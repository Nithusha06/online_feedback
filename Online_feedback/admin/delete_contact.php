<?php
include('../dbconfig.php');
	
	$_GET['id']=$info;
	
	mysqli_query($con,"delete from contact where id='$info'");
	header('location:dashboard.php?info=contact');
?>