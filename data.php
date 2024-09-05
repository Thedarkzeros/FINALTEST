<?php
require("connect.php");
$stu_id = $_POST["stu_id"];
$stu_name = $_POST["stu_name"];
$stu_email = $_POST["stu_email"];
$stu_tel = $_POST["stu_tel"];
$stu_date = $_POST["stu_date"];

$sql = "INSERT INTO data_student(stu_id,stu_name,stu_email,stu_tel,stu_date) VALUES('$stu_id','$stu_name','$stu_email','$stu_tel','$stu_date')";

$result = mysqli_query($con, $sql);

if ($result) {
    header("location:index.php");
    exit(0);
} else {
    echo "$sql";
}
