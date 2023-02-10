<?php 
 $c_no = $_GET['p_id'];
include('connection.php');
$sql = "DELETE FROM tbl_product WHERE p_id=$c_no";
if ($conn->query($sql) === TRUE) {
    echo "<script>alert('ecord deleted successfully');</script>";
    echo "<script>window.location.href='ins_form3.php'</script>";
} else {
  
    echo "<script>alert('Error deleting record: ');</script>";
    echo "<script>window.location.href='ins_form3.php'</script>";
}

$conn->close();
?>
