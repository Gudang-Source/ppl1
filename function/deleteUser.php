<?php
	include("../Connect.php");

	global $conn;
	$query = "DELETE FROM user WHERE uid = '".$_GET["uid"]."'";
	
	$rquery = mysqli_query($conn, $query);
	
	header("Location: ../pengguna.php");
	die();
?>

