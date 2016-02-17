<?php
	include("../Connect.php");

	global $conn;
	
	$stok = (int)$_GET["stok"];
	$stok_min = (int)$_GET["stok_min"];
	if (($stok >= 0) && ($stok_min >= 0)){
		$query = "UPDATE ATK SET aid = '".$_GET["aid"]."', jenis = '".$_GET["jenis"]."', stok = '".$_GET["stok"]."', stok_min = '".$_GET["stok_min"]."' WHERE aid = '".$_GET["aid"]."'";
		
		$rquery = mysqli_query($conn, $query);
		
		header("Location: ../stok.php");
		die();
	} else {
		header("Location: ../errorStok.php");
		die();
	}
?>

