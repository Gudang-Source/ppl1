<?php
	include("../Connect.php");

	global $conn;
	$query = "INSERT INTO user (uid, nama) VALUES ('".$_GET["uid"]."', '".$_GET["nama"]."')";
	
	$rquery = mysqli_query($conn, $query);
	
	header("Location: ../pengguna.php");
	die();
?>
