<?php
	include("../Connect.php");

	global $conn;
		
	$stok = (int)$_GET["stok"];
	$stok_min = (int)$_GET["stok_min"];
	if (($stok >= 0) && ($stok_min >= 0)){
		$query = "INSERT INTO ATK (aid, jenis, stok, stok_min) VALUES ('".$_GET["aid"]."', '".$_GET["jenis"]."', '".$_GET["stok"]."', '".$_GET["stok_min"]."')";
		
		$rquery = mysqli_query($conn, $query);
		
		header("Location: ../stok.php");
		die();
	} else {
		header("Location: ../errorStok.php");
		die();
	}
?>

