<?php
$c_no = $_GET["c_no"];
$S_Name =$_POST["S_Name"];  
$S_LastName =$_POST["S_LastName"];  
$S_Address =$_POST["S_Address"];
$S_SunjectName =$_POST["S_SunjectName"];  

include('connection.php');
$sql = "UPDATE tbl_customers  SET S_Name='$S_Name', S_LastName='$S_LastName', S_Address='$S_Address' , S_SunjectName='$S_SunjectName' WHERE c_no=$c_no";
if ($conn->query($sql)) {
    echo "<script>alert('Record Inserted Successfully!');</script>";
    echo "<script>window.location.href='ins_form1.php'</script>";
} else {
    echo "<script>alert('Something went wrong! Please try again!');</script>";
    echo "<script>window.location.href='ins_form1.php'</script>";
}
$conn->close();
?>
