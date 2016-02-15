<?php
	include("../Connect.php");

	global $conn;
	$query = "DELETE FROM supplier WHERE sid = '".$_GET["sid"]."'";
	
	$rquery = mysqli_query($conn, $query);
	
	header("Location: ../supplier.php");
	die();
?>

