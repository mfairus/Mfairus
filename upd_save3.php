<?php
$c_no = $_GET["s_id"];
$S_Name =$_POST["s_name"];  
$S_LastName =$_POST["s_date"];   

include('connection.php');
$sql = "UPDATE tbl_sale  SET s_name='$S_Name', s_date='$S_LastName' WHERE s_id=$c_no";
if ($conn->query($sql)) {
    echo "<script>alert('Record Inserted Successfully!');</script>";
    echo "<script>window.location.href='ins_form4.php'</script>";
} else {
    echo "<script>alert('Something went wrong! Please try again!');</script>";
    echo "<script>window.location.href='ins_form4.php'</script>";
}
$conn->close();
?>
