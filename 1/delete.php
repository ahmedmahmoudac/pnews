<?php
require("conn.php");
		
if(isset($_GET['country']))
{
    $country_selected = $_GET['country'];

    $delete = mysqli_query($con,"DELETE FROM users WHERE country = '$country_selected' ");
   echo "<script> window.location.href = 'victims.php';</script>";
}
else
{
    $delete = mysqli_query($con,"DELETE  FROM users");
     echo "<script> window.location.href = 'victims.php';</script>";
}
//
?>