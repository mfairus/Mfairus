<?php 
 $c_no = $_GET['e_id'];
include('connection.php');
$sql = "DELETE FROM tbl_employee WHERE e_id=$c_no";
if ($conn->query($sql) === TRUE) {
    echo "<script>alert('ecord deleted successfully');</script>";
    echo "<script>window.location.href='ins_form2.php'</script>";
} else {
  
    echo "<script>alert('Error deleting record: ');</script>";
    echo "<script>window.location.href='ins_form2.php'</script>";
}

$conn->close();
?>
