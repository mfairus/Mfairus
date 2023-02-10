<?php
$c_no = $_GET["e_id"];
$S_Name =$_POST["e_name"];  
$S_LastName =$_POST["e_type"];  

include('connection.php');
$sql = "UPDATE tbl_employee  SET e_name='$S_Name', e_type='$S_LastName' WHERE e_id=$c_no";
if ($conn->query($sql)) {
    echo "<script>alert('Record Inserted Successfully!');</script>";
    echo "<script>window.location.href='ins_form2.php'</script>";
} else {
    echo "<script>alert('Something went wrong! Please try again!');</script>";
    echo "<script>window.location.href='ins_form2.php'</script>";
}
$conn->close();
?>
