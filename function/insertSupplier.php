<?php
	include("../Connect.php");

	global $conn;
	$query = "INSERT INTO supplier (sid, nama, perusahaan) VALUES ('".$_GET["sid"]."', '".$_GET["nama"]."', '".$_GET["perusahaan"]."')";
	
	$rquery = mysqli_query($conn, $query);
	
	header("Location: ../supplier.php");
	die();

?>