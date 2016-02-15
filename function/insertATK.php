<?php
	include("../Connect.php");

	global $conn;
	$query = "INSERT INTO ATK (aid, jenis, stok, stok_min) VALUES ('".$_GET["aid"]."', '".$_GET["jenis"]."', '".$_GET["stok"]."', '".$_GET["stok_min"]."')";
	
	$rquery = mysqli_query($conn, $query);
	
	header("Location: ../stok.php");
	die();
?>

