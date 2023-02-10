<?php
$lastname= $_POST["e_name"];
$address= $_POST["e_type"];

include('connection.php');

//สร้างคำสั่ง sql
$sql = "INSERT INTO tbl_employee (e_name,e_type) VALUES ('$lastname','$address')";
if ($conn->query($sql)) {
    
 header('location:ins_form2.php'); //กลับไปยังหน้าตาราง
} else {
 echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>