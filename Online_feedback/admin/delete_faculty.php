<?php
include('../dbconfig.php');
	
$_GET['id']=$info;
	
	mysqli_query($conn,"delete from faculty where id='$info'");
	header('location:dashboard.php?info=show_faculty');
?>