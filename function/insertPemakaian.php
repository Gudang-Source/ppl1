<?php
	include("../Connect.php");

	global $conn;
	$query = "INSERT INTO pemakaian (pid, jumlah, tanggal, p_uid, p_aid) VALUES ('".$_GET["pid"]."', '".$_GET["jumlah"]."', '".$_GET["tanggal"]."', '".$_GET["p_uid"]."', '".$_GET["p_aid"]."')";
	
	$rquery = mysqli_query($conn, $query);

	$query = "SELECT stok FROM ATK WHERE aid = '".$_GET["p_aid"]."'";
	$rstok = mysqli_query($conn, $query);
	
	$stok = mysqli_fetch_array($rstok, MYSQLI_NUM);
	$stoklama = (int)$stok[0];
	echo $stoklama;
	$jumlah = (int)$_GET["jumlah"];
	echo $jumlah;
	$stokbaru = $stoklama - $jumlah;
	
	$rstokbaru = (string)$stokbaru;
	echo $rstokbaru;
	
	$query = "UPDATE ATK SET stok = '".$rstokbaru."' WHERE aid = '".$_GET["p_aid"]."'";
	$rquery = mysqli_query($conn, $query);
	
	header("Location: ../pemakaian.php");
	die();
?>

