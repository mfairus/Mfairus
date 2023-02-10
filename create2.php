<?php
$lastname= $_POST["p_name"];
$address= $_POST["p_type"];

include('connection.php');

//สร้างคำสั่ง sql
$sql = "INSERT INTO tbl_product (p_name,p_type) VALUES ('$lastname','$address')";
if ($conn->query($sql)) {
    
 header('location:ins_form3.php'); //กลับไปยังหน้าตาราง
} else {
 echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>