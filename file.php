
<?php

    session_start();

    $user_id = $_SESSION['user_id'];
    $group_num = $_SESSION['group_number'];
    $group_type = $_SESSION['group_type'];
    $privilege = $_SESSION['privilege'];

    // $_SESSION['user_id'] = $user_id;
    // $_SESSION['group_num'] = $group_num;
    // $_SESSION['privilege'] = $privilege;

    include 'connector.php';
    $query1 = "select * from files where group_num = '$group_num' ";
    $result = mysqli_query($con,$query1);  
    // $row = mysqli_fetch_assoc($result);   
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File view</title>
    <link rel="stylesheet" href="./css/file.css">


</head>
<body>
    
    <table>
        <thead>
         <th>File Name</th>
         <th>Button</th>
        </thead>
        <tbody>
            <?php
            while(  $row = mysqli_fetch_assoc($result)  )
            {
             ?>
            <tr>
             <td><?php echo $row['file_name'] ?></td>
             <td><form method="post" class=form1>
                 <input type="hidden" name="file_id" value="<?php echo $row['file_id'] ?>">
                 <input type="hidden" name="group_num" value="<?php echo $group_num ?>">
                 <input type="hidden" name="group_type" value="<?php echo $group_type ?>">
                 <input type="hidden" name="user_id" value="<?php echo $user_id ?>">
                 <button type="submit" name="enter"> Enter </button>
                 </form>
             </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <?php


if (isset($_POST['enter']))
{
    $file_id = $_POST['file_id'];
    $user_id = $_POST['user_id'];
    $group_type = $_POST['group_type'];

    require 'vendor/autoload.php';
    $client = new MongoDB\Client("mongodb://localhost:27017");
    $mas = $client->selectDatabase('mas'); 
    $files = $mas->files;
    
    // $filter = ['_id' => $file_id, $user_id => ['$exists' => true]];
    // $update = ['$set' => [$user_id => 1]];
    // $files->updateOne($filter, $update);
    
    // $document = $files->findOne(
    // ['_id'=>$file_id]
    // ); 

    
    if($group_type== 'A')
    {
        ?>
        <script>
            alert("data access!");
        </script>
        <?php
    }
    elseif($group_type == 'B')
    {
        //setting $userid_first to first click userid
        $document = $files->findOne(['_id'=>$file_id]); 
        $flag_userid_first=1;
        foreach($document as $key=>$value)
        {
            if($value==1)   //not checking key as _id and userid_first do not have 1 value.
            {
                $flag_userid_first=0;
                break;
            }
        }
        if($flag_userid_first==1)
        {
            $files->updateOne(['_id' => $file_id], ['$set' => [$userid_first => $user_id]]);
        }

        //file accessing by first user
        $flag_check = 1;
        foreach($document as $key=>$value)
        {
            if($value==0)
            {
                $flag_check = 0;
                break;
            }
        }
        if(flag_ckeck==1)
        {
            ?>
            <script>
                alert("file downloaded");
            </script>
            <?php
             $filter = ['_id' => $file_id];
             $update = ['$set' => []];
             $document = $files->findOne($filter);
             foreach ($document as $key => $value) 
             {
                 if ($key != '_id' && $key != 'userid_first') 
                 {
                     $update['$set'][$key] = 0;
                 }
             }
             $files->updateOne($filter, $update);
        }  //if nothing of above case satisfies, set flag of corressponding user_id to 1
        else
        {
            $files->updateOne(['_id' => $file_id], ['$set' => [$user_id => 1]]);
            ?>
            <script>
            alert("Wait for other members!");
            window.location.href = 'file.php';
            
            <?php 
        }
    }
}
        
?>


</body>
</html>