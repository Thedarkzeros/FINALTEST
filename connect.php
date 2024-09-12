<?php

$host = "localhost";
$username = "root";
$password = ""; 
$dbname = "register_student";


$con = new mysqli($host, $username, $password, $dbname);


if ($con->connect_error) {
    die("Connection failed: " . $con->connnect_error);
} else {
    echo "เชื่อมต่อข้อมูลสำเร็จ";
}
?>
