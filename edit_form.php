<?php
require("connect.php");

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $sql = "SELECT * FROM data_student WHERE id = $id";
    if ($con->query($sql) === TRUE) {
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Edit Student Information</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center">แก้ไขข้อมูล</h1>
        <hr>
        <form action="update.php" method="POST">
            <input type="hidden" value="<?php echo $row['id']; ?>" name="edit_id">

            <label for="stu_id">รหัสนักเรียน :</label>
            <input class="form-control" type="text" name="stu_id" id="" required>

            <label for="stu_id">ชื่อ-นามสกุล:</label>
            <input class="form-control" type="text" name="stu_name" id=""  required>

            <label for="stu_id">อีเมลล์:</label>
            <input class="form-control" type="email" name="stu_email" id=""  required>

            <label for="stu_id">หมายเลขโทรศัพท์ :</label>
            <input class="form-control" type="text" name="stu_tel" id=""  required>

            <label for="stu_id">วันที่ลงทะเบียน :</label>
            <input class="form-control" type="date" name="stu_date" id=""  required> <br>
            <input type="submit" name="" id="" class="btn btn-success" value="บันทึก">
        </form>
    </div>
</body>
</html>
