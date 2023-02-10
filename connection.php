<?php
$host = "localhost";
$username = "id20176804_root";
$password = "@JpK24i!4_E0FB5u";
$dbname = "id20176804_miniproject050";

//สร้างการเชื่อมต่อ
$conn = new mysqli($host, $username, $password,$dbname);

//ตรวจสอบการเชื่อมต่อ
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



?>