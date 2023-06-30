<?php
include "conn.php";

session_start();
if(isset($_POST['user_id']))
{
    $user_id=$_POST['user_id'];
    $group_number=$_POST['group_number'];
    $group_type=$_POST['group_type'];
    $privilege=$_POST['privilege'];
// echo $user_id.','.$privilege;

//stores gm userid as gmid
$_SESSION['gmid']=$user_id;
$_SESSION['group_number']=$group_number;
$_SESSION['group_type']=$group_type;
$_SESSION['privilege']=$privilege;


}
else
{
    echo "Not coming";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group Manager</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            /* background-color: rgb(232, 236, 237); */
            background-color: #b8d5ff;

        }
        .hd 
        {
            margin-top:0px;
            /*background-color: white;*/
            background-color: #100a89;
            border-radius: 5px;  
            /*border-top: 10px solid darkblue;*/
            /* width:100%; */
            /*padding:10px;*/
            padding: 0 4.8rem;
            /* display:flex;
            flex-direction: column; */

        }
        h2 
        {
            /* padding:15px;
            text-align: center; */
           
            color: white;
            width: 100%;
            text-align: center;
            padding: 12px;
            margin: 0;
            font-weight: bold;
            letter-spacing: 0.2rem;
            text-shadow:1px 1px .2px white;

        }
        nav 
        {
            display:flex;
            padding:20px;
            margin-left:33%;
            /* justify-content:flex-end; */
            margin-right:0%;
        }
        nav li {
            text-decoration: none;
            list-style: none;
            position: relative;
            margin-right:0%;

        }
        
        nav li a {
            text-decoration: none;
            text-align: center;
            font-size: 16px;
            padding: 14px 20px;
            /* background-color: darkblue; */
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            /* margin-right: 20px; */
            font-weight: bold;
            margin-right:0%;

            
        }
        .sub-menu {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            padding: 6px;
            border-radius: 5px;
        }
        .sub-menu li {
            margin-bottom: 8px;
        }
    
        .sub-menu li a {
            display: block;
            color: #fff;
            text-decoration: none;
            padding: 8px 6px;
            /* background-color: darkblue; */
            border-bottom:2px solid black;
            /* text-decoration: underline; */
            
        } 
        
        #grp:hover .sub-menu {
            display: block;
        }
      

        .btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 14px;
            font-weight: bold;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn.btn-danger {
            background-color: #dc3545;
            color: #fff;
          }
          
          .btn.btn-danger:hover {
            background-color: #c82333;
          }
          
          .btn.btn-danger:active {
            background-color: #bd2130;
          }


          /* hover */

          nav li a:hover {
            background-color: #1f84f7;
        }

        footer {
        text-align: center;
        padding: 3px;
        width: 100%;
        bottom: 0;
        position: fixed;
        color: white;
        font-weight: bold;
        background-color: #100a89;
    }
/* 
    .main 
    {
        background-color:rgb(186, 178, 178);
        display:flex;
        flex-wrap: wrap;
        border-top:darkblue solid 5px;
        border-bottom:darkblue solid 5px;
        
    }

    .pic 
    {
       background-color:white;
       padding:30px;
       border-left:darkblue solid 5px;
       flex:30%;
       border-right:solid darkblue 5px;

    }

    .data 
    {
        background-color:white;
        padding:30px;
        border-right:solid darkblue 5px;
        flex:60%;
    }


    img 
    {
        width:300px;
        height:300px;
    } */





    



        /*footer*/
     footer {
        text-align: center;
        padding: 3px;
        width: 100%;
        bottom: 0;
        position:fixed;
        color: white;
        font-weight: bold;
        background-color: #100a89;
    }




    /* Modified table....*/

             /* */
             .data
        {
            /*min-width:200px; 
            min-height:600px; */
            align-items: center;
            text-align: center;
            /* background-color:rgb(251, 249, 233); */
            background-color:white;
            /* box-shadow: 2px 2px 4px black; */

            /* background-color:rgb(220, 211, 211);  */
            /* padding:50px; */
            margin-top:30px;
            /* width:50%; */
            margin-left:25%;
            border-radius:18px;
            padding:25px 23px 15px 15px;

            overflow-y: scroll;
            max-height:500px;
           


            
        }
       
       
        .tb 
        {

            background-color:white;
            box-shadow: 2px 2px 6px black;
            /* margin-top:30px;   */
        }

    .pp
    {
        /* background-color: rgba(207, 15, 15, 0.267); */
        background-color:rgb(202, 196, 224);
        color:black;
        border-bottom:3px darkblue solid;
        border-top:3px darkblue solid;
        padding:15px;
        
        box-shadow: 1px 1px 4px black;
        
        text-align:center;
        align-items:center;
        /* width:780px; */
        margin-top:0px;
        
     
    }

    #req {
    letter-spacing: 0.2rem;
    font-weight:bolder;
    font-size:18px;
    text-shadow:1px 1px .1px black;
    }

    table {
        border-collapse: collapse;

    }

    #tr1 th,
    #tr1 td {
        border: 3px solid black;
        padding: 18px;
        text-align: center;
        font-size:16px;
        /* background-color: rgb(103 98 185 / 48%); */

    }

    table {
        margin: 0 auto;
        border-collapse: collapse;
        background-color: #f9f9f9;
        border: 2px solid #ddd;
        border-radius:18px;
        /* background-color:white; */
        
    }
    
    th, td {
        padding: 10px;
        border-bottom: 2px solid #ddd;
    }
    
    th {
    position: sticky;
    background-color: #b495fdfe;
    cursor: pointer;
    text-transform: capitalize;
}
    
    tr:nth-child(even) {
        background-color: #f8f8f8;
    }
    
    tr:hover {
        background-color: #dccfcf;
    }
    
    .data table td,th {
        border: 3px solid black; /* Set the desired border color */
        padding: 10px;
        text-align: center;
    }
    td,th {
            border-collapse: collapse;
            padding: 1rem;
            text-align: center;
            }
    

     
            
/* ICON -Image*/

    


    .pic 
    {
       
       
        position:absolute;
        top:8px;
        left:5px;

    }

    img 
    {
        width:90px;
        height:90px;
    }
    .data2 
    {
        position:absolute;
        background-color:white;
        margin-left: 120px;
       font-size:10px;
       top:8px;
       /* width:fit-content; */
       margin-top:0%;
       width:160px; 
       height:90px;
       display:block;
       text-align:center;
       border-radius:5px;
           
    }

    /* img 
    {
        width:90px;
        height:90px;
    } */

    .pic:hover + .data {
    display: block;
}
        
    </style>
</head>

<body>
<div class="hd">
        <h2>GROUP MANAGER</h2>
        <nav>
          <!-- <li><a href="gmsuccess.php">Home</a></li> -->

            <li id="grp">
                <a href="#">Add a Member</a>
                <ul class="sub-menu">
                    <li ><a href="request.php" class='btn btn-danger'>From Requestlist</a></li>
                    
                    <li><a href="groupinit.php" class='btn btn-danger'>By Selecting</a></li>

                </ul>
            </li>
            <li><a href="remove.php">Remove</a></li>
            <li><a href="suspend.php">Suspend</a></li>
            <li><a href="unsuspend.php">Suspended Members</a></li>
            <!-- <li><a href="group_view.php">Group View</a></li> -->
            <li><a href="group_view.php">Group View</a></li>
            <!-- <li><a href="gmstatus.php?user_id=<?//php echo $id;?>">Status</a></li> -->
            <li><a href="gmstatus.php">Status</a></li>
            <li><a href="login.html">Logout</a></li>

        </nav> 
    </div>

    <?php  
    $gmid=$_SESSION['gmid'];
    $sql='select * from user where user_id="'.$gmid.'"';
    $rr=mysqli_query($con,$sql);
    if(!$rr)
    {
        echo "<script>alert('Error executing the query');</script>";
    }
    ?>
  <div class='main'> 
    <div class='pic'>
            <img src="gm1.jpg" alt="group manager">
    </div>
        <div class='data2'>
            <?php
            
            foreach($rr as $i)
            {
   
                $name=$i['first_name'].$i['last_name'];
                echo "<p>NAME : $name </p>";
                $_SESSION['name']=$name;
                echo "<p>Privilege : Group Manager</p>";
                
             
            }

            ?>

        </div>
</div>

    <footer>
        <p>MAS : MULTI PARTY AUTHENTICATION SYSTEM</p>
    </footer>
</body>
</html>
