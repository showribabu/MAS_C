<?php 


//accept means add member to group...(credentials.php)

//ans update the request status...(a)

include "conn.php";
session_start();
if(isset($_GET['user_id']))
{
    $_SESSION['uid2'] = $_GET['user_id'];
    $uid2 = $_SESSION['uid2'];
    //members id...id1
    $gmid=$_SESSION['gmid'];


    //from->to

    $sql12='update requests set r_status="a" where request_to="'.$gmid.'" and request_from="'.$uid2.'"';
    $rr=mysqli_query($con,$sql12);
    if($rr)
    {
        echo"<script>alert('Accept Button Clicked');</script>";

        header("Location: credentials.php?user_id=" . urlencode($uid2));    
    }
}



                /*Accept button*/

                if(isset($_GET['auser_id']))
                {
                    $_SESSION['uid3'] = $_GET['auser_id'];
                    $uid3 = $_SESSION['uid3'];
                    //members id...id1
                    $gmid=$_SESSION['gmid'];
                
                
                    //from->to
                
                    $sql12='update requests set r_status="ar" where request_to="'.$gmid.'" and request_from="'.$uid3.'" and request_id="'.$request_id.'"';
                    $rr=mysqli_query($con,$sql12);
                    if($rr)
                    {
                        echo"<script>alert('Accept Button Clicked');</script>";
                    
                        header("Location: rmv.php?user_id=" . urlencode($uid3));    
                    }
                }


?>