<?php
	include("../Connect.php");

	global $conn;
	$query = "SELECT * FROM pemakaian WHERE pid = '".$_GET["pid"]."'";
	$rstok = mysqli_query($conn, $query);
	$old = mysqli_fetch_array($rstok, MYSQLI_NUM);
	$jumlah = (int)$old[0];
	
	$query = "SELECT stok FROM ATK WHERE aid = '".$old[3]."'";
	$rstok = mysqli_query($conn, $query);
	
	$stok = mysqli_fetch_array($rstok, MYSQLI_NUM);
	$stoklama = (int)$stok[0];
	echo $stoklama;
	
	echo $jumlah;
	$stokbaru = $stoklama + $jumlah;
	
	$rstokbaru = (string)$stokbaru;
	echo $rstokbaru;
	
	$query = "UPDATE ATK SET stok = '".$rstokbaru."' WHERE aid = '".$old[3]."'";
	$rquery = mysqli_query($conn, $query);


	$query = "DELETE FROM pemakaian WHERE pid = '".$_GET["pid"]."'";
	
	$rquery = mysqli_query($conn, $query);
	
	header("Location: ../pemakaian.php");
	die();
?>

