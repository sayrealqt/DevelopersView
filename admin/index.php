<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Developer's View | Admin Login</title>

	<link rel="stylesheet" href="css/style2.css">
</head>

<body>

<?php
session_start();
include('config.php');
if(isset($_POST['login']))
{
$email=$_POST['username'];
$password=md5($_POST['password']);
$sql ="SELECT UserName,Password FROM admin WHERE UserName=:email and Password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
$_SESSION['alogin']=$_POST['username'];
echo "<script type='text/javascript'> document.location = 'change-password.php'; </script>";
} else{

  echo "<script>alert('Invalid Details');</script>";

}

}

?>

	<div class="form">
  <div class="form__box">
    <div class="form__left">
      <div class="form__padding"><img class="form__image" src="admin_icon.gif"/></div>
    </div>
    <div class="form__right">
      <div class="form__padding-right">
        <form>
          <h1 class="form__title">Admin Login</h1>
          <input class="form__email" type="text" name="email" placeholder="Username" required />
          <input class="form__password" type="password" name="password" placeholder="Password" required />
          <a href="../index.html">Login</a>
<!--           <input class="form__submit-btn" type="submit" onclick="myFunction()" value="Login"/> -->
      </div>
    </div>
  </div>
</div>


	<!-- Loading Scripts -->
	<!-- <script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script> -->

</body>

</html>
