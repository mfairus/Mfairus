<?php 
 $c_no = $_GET['c_no'];
include('connection.php');
$sql = "DELETE FROM tbl_customers WHERE c_no=$c_no";
if ($conn->query($sql) === TRUE) {
    echo "<script>alert('ecord deleted successfully');</script>";
    echo "<script>window.location.href='ins_form1.php'</script>";
} else {
  
    echo "<script>alert('Error deleting record: ');</script>";
    echo "<script>window.location.href='ins_form1.php'</script>";
}

$conn->close();
?>
