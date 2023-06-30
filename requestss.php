<?php 


//reject  means update r_status('r') 


include "conn.php";
session_start();
if(isset($_GET['user_id']))
{
    $_SESSION['uid2'] = $_GET['user_id'];
    $uid2 = $_SESSION['uid2'];
    //members id...id1
    $gmid=$_SESSION['gmid'];


    //from->to

    $sql12='update requests set r_status="r" where request_to="'.$gmid.'" and request_from="'.$uid2.'"';
    $rr=mysqli_query($con,$sql12);
    if($rr)
    {
        echo"<script>alert('Reject  Button Clicked');</script>";

        // header("Location: credentials.php?user_id=" . urlencode($uid2));    
    }
}

?>