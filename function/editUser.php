<?php
	include("../Connect.php");

	global $conn;
	$query = "UPDATE user SET uid = '".$_GET["uid"]."', nama = '".$_GET["nama"]."' WHERE uid = '".$_GET["uid"]."'";
	
	$rquery = mysqli_query($conn, $query);
	
	header("Location: ../pengguna.php");
	die();
?>
