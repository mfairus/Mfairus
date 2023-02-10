<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Index Page</title>
<link rel="stylesheet"
href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-
alpha1/css/bootstrap.min.css" integrity="sha384-
r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I"
crossorigin="anonymous">
</head>
<body>
<br><br><br><br><br><br>
<div class="container">
<form name="frmlogin" method="post" action="login.php">

<div class="card text-center" style="background-color:powderblue;">
  <div class="card-body"><br>
    <h1 class="card-title">Login Form</h1>
    <br><br><br>
    <div class="input-group input-group-lg">
  <span class="input-group-text" id="inputGroup-sizing-lg">ชื่อผู้ใช้</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg"  id="Username" required name="Username" placeholder="Username">
</div>
<br><br>
<div class="input-group input-group-lg">
  <span class="input-group-text" id="inputGroup-sizing-lg">รหัสผ่าน</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg"  id="Password" required name="Password" placeholder="Password">
</div><br><br>
<button type="submit" class="btn btn-info" >Login</button>
&nbsp;&nbsp;
<button type="reset" class="btn btn-danger" >Reset</button>
  </div>
</div>

</form>
</tbody>
</table>
</div>
<script
src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
integrity="sha384-
Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-
alpha1/js/bootstrap.min.js" integrity="sha384-
oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
crossorigin="anonymous"></script>
</body>
</html>