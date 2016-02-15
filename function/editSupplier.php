<?php
	include("../Connect.php");

	global $conn;
	$query = "UPDATE supplier SET sid = '".$_GET["sid"]."', nama = '".$_GET["nama"]."', perusahaan = '".$_GET["perusahaan"]."' WHERE sid = '".$_GET["sid"]."'";
	
	$rquery = mysqli_query($conn, $query);
	
	header("Location: ../supplier.php");
	die();
?>

