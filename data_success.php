<?php
$stu_id = $_POST["stu_id"];
$stu_name = $_POST["stu_name"];
$stu_email = $_POST["stu_email"];
$stu_tel = $_POST["stu_tel"];
$stu_date = $_POST["stu_date"];
include('connect.php');

// Ensure you use the correct column names as defined in the table
$sql = "UPDATE data_student SET stu_name='$stu_name', stu_email='$stu_email', stu_tel='$stu_tel', stu_date='$stu_date' WHERE stu_id=$stu_id";

if ($con->query($sql)) {
    echo '<br>แก้ไขข้อมูลสำเร็จ <a class="btn" href="index.php"><br>กลับหน้าหลัก</br></a></br>';
} else {
    echo "Error updating record: " . $con->error;
}

$con->close();
?>
