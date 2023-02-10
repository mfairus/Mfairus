<?php session_start();
include('connection.php');
$ID = $_SESSION['a_id'];
$name = $_SESSION['a_username'];
$level = $_SESSION['a_level'];
if($level!='A'){
Header("Location:logout.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Page</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>
<body>
<br>

		<div class="container">

				<a href="ins_form1.php" class="btn btn-success">ลูกค้า</a>
				<a href="ins_form2.php" class="btn btn-success">สินค้า</a>
				<a href="ins_form3.php" class="btn btn-primary">การขาย</a>
				<a href="ins_form4.php" class="btn btn-success">พนักงาน</a>
				<a href="logout.php" class="btn btn-danger">ออกจากระบบ</a>
				
		<table id="mytable" class="table table-bordered table-striped">
        <br>
        <br>
		<thead><a href="insert3.php" class="btn btn-warning">เพิ่ม</a>
		<br>
		 <tr>
				<th>ไอดี</th>
				<th>ชื่อการขาย</th>
				<th>ประเภทการขาย</th>
				<th>เพิ่มการขาย</th>
		 </tr>
 </thead> <h1 class="mt-3">การขาย</h1>
        <hr>
 <tbody>
 
<?php
        include('connection.php');
        $sql = "SELECT * FROM tbl_product";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        //แสดงข้อมูลเป็นตาราง
        while($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td>'. $row['p_id'] . '</td>';
            echo '<td>'. $row['p_name'] . '</td>';
            echo '<td>'. $row['p_type'] . '</td>';
            echo '<td><a role="button"  href="update2.php?p_id='.$row['p_id'].'" class="btn btn-primary">อัปเดท</a> ';  //ปุ่มที่เพิ่มเข้ามา
                echo '<a href="delete2.php?p_id='.$row['p_id'].'" class="btn btn-danger">ลบ</a>';  //ปุ่มที่เพิ่มเข้ามา
            echo '</tr>';
 }
 } else {
 echo " ";
 }
 $conn->close();
 ?>
 </tbody>
</table>
</div>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>