<?php
	session_start();
	$mysqli = new mysqli("localhost","id13514750_root",'neel@123@BHADVO','id13514750_insurance_form');
	$policy=$_GET['policy'];
	$id=$_SESSION['user'];
	mysqli_query($mysqli,"UPDATE user set policy=$policy WHERE id=$id");
	header("location:index.php");
?>