<?php 
    session_start();
    include('connection.php');
    $id = $_GET['c_no'];
    $sql = "select * from tbl_customers where c_no='$id'";
    $result = $conn->query($sql);
    
    $row;
    
    if($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['c_no'] = $id;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Customer</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="mt-3">แก้ไขข้อมูล</h1>
        <hr>
        
        <form action="upd_save.php?c_no=<?=$_GET["c_no"];?>" enctype="multipart/form-data"   method="POST">
            <label for="fname" class="form-label">First Name</label>
            <input class="form-control" type="text" name="S_Name" value="<?php echo $row['S_Name']; ?>">
            <label for="lname" class="form-label">Last Name</label>
            <input class="form-control" type="text"  name="S_LastName" value="<?php echo $row['S_LastName']; ?>">
            <label for="address" class="form-label">Address</label>
            <input class="form-control" type="text" name="S_Address" value="<?php echo $row['S_Address']; ?>">
            <label for="subjectname" class="form-label">Subject Name</label>
            <input class="form-control" type="text" name="S_SunjectName" value="<?php echo $row['S_SunjectName']; ?>">
            <input class="btn btn-success mt-3" type="submit" value="Update">
            <a href="index.php" class="btn btn-primary mt-3">Go Back</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>