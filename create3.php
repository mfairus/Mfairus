<?php
$lastname= $_POST["s_name"];
$address= $_POST["s_date"];

include('connection.php');

//สร้างคำสั่ง sql
$sql = "INSERT INTO tbl_sale (s_name,s_date) VALUES ('$lastname','$address')";
if ($conn->query($sql)) {
    
 header('location:ins_form4.php'); //กลับไปยังหน้าตาราง
} else {
 echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>