<?php
	include("../Connect.php");

	global $conn;
	$query = "UPDATE ATK SET aid = '".$_GET["aid"]."', jenis = '".$_GET["jenis"]."', stok = '".$_GET["stok"]."', stok_min = '".$_GET["stok_min"]."' WHERE aid = '".$_GET["aid"]."'";
	
	$rquery = mysqli_query($conn, $query);
	
	header("Location: ../stok.php");
	die();
?>

