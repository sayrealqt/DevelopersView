<!DOCTYPE html>
<html>
<head>
	<title> Login </title>
	<link rel="stylesheet" href="style1.css">
</head>
<body>
	<?php
session_start();
include('admin/config.php');
if(isset($_POST['login']))
{
$email=$_POST['email'];
$password=md5($_POST['password']);
$sql ="SELECT EmailId,Password,FullName FROM tblusers WHERE EmailId=:email and Password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
$_SESSION['login']=$_POST['email'];
$_SESSION['fname']=$results->FullName;
$currentpage=$_SERVER['REQUEST_URI'];
echo "<script type='text/javascript'> document.location = '$currentpage'; </script>";
} else{
  
  echo "<script>alert('Invalid Details');</script>";

}

}

?>


<div class="form">
  <div class="form__box">
    <div class="form__left">
      <div class="form__padding"><img class="form__image" src="mancode.gif"/></div>
    </div>
    <div class="form__right">
      <div class="form__padding-right">
        <form>
          <h1 class="form__title">Member Login</h1>
          <input class="form__email" type="text" placeholder="Username" required />
          <input class="form__password" type="password" placeholder="Password" required />
          <a href="index.html">Login</a>
<!--           <input class="form__submit-btn" type="submit" onclick="myFunction()" value="Login"/> -->
        <p>Don't have an Account?</p>
        <p> <a class="form__link" href="register.php">Create an account</a></p>
      </div>
    </div>
  </div>
</div>

 <script>
      function myFunction() {
        window.location.href="index.php";
      }
    </script>
<!-- <form id="log">

<div class="container" onclick="onclick">
  <div class="top"></div>
  <div class="bottom"></div>
  <div class="center">
    <h1>Login</h1>
		<input type="text" placeholder="Enter Username" name="user" required /><br>
		<input type="password" placeholder="Enter Password" name="pass" required /><br>
		<button class="button"><a href="index.html" > Login </a></button>
  </div>
  <div class="modal-footer text-center">
        <p>Don't have an account? <a href="register.php" data-toggle="modal" data-dismiss="modal">Signup Here</a></p>
      </div>
</div>
</form> -->
</body>
</html>
