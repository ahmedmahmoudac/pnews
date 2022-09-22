<?php
session_start();
include 'conn.php';
if(isset($_SESSION['user_name']))
{
    header("Location:index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
<title> Login</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
body {
max-width: max-content;
margin: auto;
}
</style>
</head>
<body >
<center>
<br> <br>
<form class="form-inline" method="POST" action="">
  <div>
  
   <?php 
			   
if(isset($_POST['submit_login']))
{
    $login_username = mysqli_real_escape_string($con,$_POST['login_username']);
    $login_password = mysqli_real_escape_string($con,$_POST['login_password']);
   // $serial = mysqli_real_escape_string($conn2,$_POST['serial']);
    $get_login = mysqli_query($con,"SELECT * FROM admins WHERE user = '$login_username' && pass = '$login_password' ");
   // $get_login2 = mysqli_query($conn2,"SELECT * FROM users WHERE serial = '$serial'");
   if(mysqli_num_rows($get_login) > 0 )
    {
        $user_data = mysqli_fetch_array($get_login);
        $_SESSION['user_name'] = $user_data['user'];
		   $_SESSION['lnk'] = $user_data['lnk'];
		      $_SESSION['cpa'] = $user_data['cpa'];
		$login_success = '<div class="alert alert-success text-center">مرحبًا ، سيتم التحويل تلقائيًا</div>';
	echo  $login_success;
      $login_error = '<meta http-equiv="Refresh" content="1; url="index.php"" />';
	echo  $login_error; 
        }
     
    else
    {
        $login_error = '<div class="alert alert-danger text-center">مشكلة في تسجيل الدخول</div>';
		echo  $login_error;
    }
}	
?>
<br>
<div class="form-group mx-sm-3 mb-2">
<input type="text" class="form-control"  required placeholder="User Name"  name="login_username"> 
</div>
 <div class="form-group mx-sm-3 mb-2">
<input type="password" class="form-control" required placeholder="Password"  name="login_password"> 
</div>
<br>
<button type="submit" name="submit_login" class="btn btn-success">login</button>
 </div>
</form>
    </div>
</center>
</body>
</html>