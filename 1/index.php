<?php
session_start();
require('conn.php');
if(!isset($_SESSION['user_name']))
{
    header("Location:login.php");
}else{
	   header("Location:home.php");
}
?>