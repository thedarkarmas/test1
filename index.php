<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ระบบจักการฐานข้อมูล</title>
</head>
<body>
<?php
    require_once("dbcon.php");
    session_start();
    if(isset($_POST['login'])) {
        $sql = "SELECT * FROM student WHERE student_id = '{$_POST['student_id']}' AND student_pin = '{$_POST['student_pin']}'";
        $result = $conn->query($sql);
        if($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $_SESSION["student_id"] = $row['student_id'];
        } else {
            echo "<p>รหัสผิด</p>";
        }
    }

    if(isset($_POST['logout'])) {
        session_unset();    
    }

    if(isset($_SESSION['student_id'])) {
        require_once("table2.php");
    } else {
        require_once("login.php");
    }
    
?>
</body>
</html>