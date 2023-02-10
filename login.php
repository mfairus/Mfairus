<?php
session_start();
if(isset($_POST['Username'])){
//connection

include("connection.php");

//รับค่า user & password

$Username = $_POST['Username'];
$Password = $_POST['Password'];

//query

$sql="SELECT * FROM tbl_admin Where
a_username='".$Username."' and a_pass='".$Password."' ";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)==1){
$row = mysqli_fetch_array($result);
$_SESSION["a_id"] = $row["a_id"];
$_SESSION["a_username"] = $row["a_username"];
$_SESSION["a_level"] = $row["a_level"];

if($_SESSION["a_level"]=="A"){ //ถ้าเป็ น admin ให้กระโดดไปหน้า admin_page.php

Header("Location: index.php");
}
if ($_SESSION["a_level"]=="M"){ //ถ้าเป็ น member ให้กระโดดไปหน้า user_page.php

Header("Location: user_page.php");
}
}else{
echo "<script>";
echo "alert(\" user หรือ password ไม่ถูกตอ้ง\");";
echo "window.history.back()";
echo "</script>";
}
}else{

Header("Location: form_login.php"); //user & password incorrect back to login again
}
?>