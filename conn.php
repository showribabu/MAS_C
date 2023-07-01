<?php
$host='localhost';
$user='root';
$pass='';
$db='MAS';
$con=mysqli_connect($host,$user,$pass,$db);


//  $db_host        = '10.14.98.204:3306';
// // // $db_host='localhost';
//  $db_user        = 'root';
//  $db_pass        = 'password';
//  $db_database    = 'MAS'; 
 

// $con = mysqli_connect($db_host,$db_user,$db_pass,$db_database);


if(!$con)
{
    echo die('Error:'.mysqli_connect_error());
}

    $sql2='select * from server_parameters';

    $r2=mysqli_query($con, $sql2);
    if($r2) {
        foreach($r2 as $i) {
            session_abort();
            session_start();
            $_SESSION['p']=$i['p'];
            $_SESSION['q']=$i['q'];
            $_SESSION['kv']=$i['kv'];
            $_SESSION['ix']=$i['ix'];
            $_SESSION['spk']=$i['spk'];
            $_SESSION['s']=$i['s'];
            session_abort();

        }
    }

?>