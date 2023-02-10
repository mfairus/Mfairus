<?php 
 $c_no = $_GET['s_id'];
include('connection.php');
$sql = "DELETE FROM tbl_sale WHERE s_id=$c_no";
if ($conn->query($sql) === TRUE) {
    echo "<script>alert('ecord deleted successfully');</script>";
    echo "<script>window.location.href='ins_form4.php'</script>";
} else {
  
    echo "<script>alert('Error deleting record: ');</script>";
    echo "<script>window.location.href='ins_form4.php'</script>";
}

$conn->close();
?>
