<?php
$name =$_POST["S_Name"];
$lastname= $_POST["S_LastName"];
$address= $_POST["S_Address"];
$SunjectName= $_POST["S_SunjectName"];

include('connection.php');

//สร้างคำสั่ง sql
$sql = "INSERT INTO tbl_customers (S_Name,S_LastName,S_Address,S_SunjectName) VALUES ('$name','$lastname','$address','$SunjectName')";
if ($conn->query($sql)) {
 header('location:ins_form1.php'); //กลับไปยังหน้าตาราง
} else {
 echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>