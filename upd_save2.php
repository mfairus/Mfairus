<?php
$c_no = $_GET["p_id"];
$S_Name =$_POST["p_name"];  
$S_LastName =$_POST["p_type"];  

include('connection.php');
$sql = "UPDATE tbl_product  SET p_name='$S_Name', p_type='$S_LastName' WHERE p_id=$c_no";
if ($conn->query($sql)) {
    echo "<script>alert('Record Inserted Successfully!');</script>";
    echo "<script>window.location.href='ins_form3.php'</script>";
} else {
    echo "<script>alert('Something went wrong! Please try again!');</script>";
    echo "<script>window.location.href='ins_form3.php'</script>";
}
$conn->close();
?>
