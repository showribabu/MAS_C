<?php
echo "hello";

echo $uid = $_GET['uid'];
echo $gnum = $_GET['gnum'];
echo $rid = $_GET['rid'];

include "../connection.php";




$sql = "DELETE  FROM group_data WHERE user_id = '$uid' and group_number = '$gnum'";
$result = mysqli_query($con, $sql) or die("Query Unsuccessful");

$sql2 = "update  requests set r_status = 'p' WHERE request_from = '$uid' ";
$result2 = mysqli_query($con, $sql2) or die("Query Unsuccessful");

header("Location: grp_deletion.php");


// mysqli_close($con);