<?php

$username = "root";
$password = "password";
$server = "10.14.98.204";
$db = "mas";

$con = mysqli_connect($server, $username, $password, $db);

if ($con) {
    // echo "deep successful";
} else {
    echo "connection failed";
}
