<?php
	include("../Connect.php");

	global $conn;
	$query = "DELETE FROM ATK WHERE aid = '".$_GET["aid"]."'";
	
	$rquery = mysqli_query($conn, $query);
	
	header("Location: ../stok.php");
	die();
?>

