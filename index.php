<?php
    require("connect.php");
    $sql = "SELECT *  FROM data_student";
    $result = mysqli_query($con,$sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>ข้อมูลของนักเรียน</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center">ระบบลงทะเบียน</h1>
        <hr>
        <table class="table">
            <thead class="table-dark">  
                <tr>
                    <th>ลำดับ</th>
                    <th>รหัสนักเรียน</th>
                    <th>ชื่อ-นามสกุล</th>
                    <th>อีเมลล์</th>
                    <th>หมายเลขโทรศัพท์</th>
                    <th>วันที่ลงทะเบียน</th>
                    <th>แก้ไข</th>
                    <th>ลบ</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_assoc($result)) { 
                    ?>
                    <tr>
                        
                        <td><?php echo "$row[id]"?></td>
                        <td><?php echo "$row[stu_id]"?></td>
                        <td><?php echo "$row[stu_name]" ?></td>
                        <td><?php echo "$row[stu_email]"?></td>
                        <td><?php echo "$row[stu_tel]" ?></td>
                        <td><?php echo "$row[stu_date]" ?></td>
                        <td><a class="btn btn-primary" href="edit_form.php">แก้ไข</a></td>
                        <td><a class="btn btn-danger" href="delete.php?delete_id=<?php echo $row['id']; ?>">ลบ</a></td>
                    </tr>
                    <?php 
                }
                ?>
            </tbody>         
        </table>
    </div>
    <a href="register_form.php" role="button"><h1><center>ลงทะเบียน</center></h2></a>
</body>

</html>
