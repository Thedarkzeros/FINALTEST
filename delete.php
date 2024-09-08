 <?php
  require("connect.php");

 if(isset($_GET['delete_id'])){

        $id = $_GET['delete_id'];

        // sql to delete a record
        $sql = "DELETE FROM data_student WHERE id= $id";
        $con->query($sql);
        $con->query("ALTER TABLE data_student AUTO_INCREMENT =1");

        if (mysqli_query($con, $sql)) {
            echo "<br>ลบข้อมูลสำเร็จ</br>";

            echo "<a href='index.php'>กลับหน้าหลัก</a>";

        } else {
         
            echo "Error deleting record: " . mysqli_error($con);
         }
      }
?>
