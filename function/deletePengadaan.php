<?php
	include("../Connect.php");

	global $conn;
	$query = "SELECT jumlah, a_aid FROM pengadaan WHERE aid = '".$_GET["aid"]."'";
	$rstok = mysqli_query($conn, $query);
	$old = mysqli_fetch_array($rstok, MYSQLI_NUM);
	$jumlah = (int)$old[0];
	$query = "SELECT stok FROM ATK WHERE aid = '".$old[1]."'";
	$rstok = mysqli_query($conn, $query);
	
	$stok = mysqli_fetch_array($rstok, MYSQLI_NUM);
	$stoklama = (int)$stok[0];
	
	
	$stokbaru = $stoklama - $jumlah;
	
	$rstokbaru = (string)$stokbaru;
	$query = "UPDATE ATK SET stok = '".$rstokbaru."' WHERE aid = '".$old[1]."'";
	$rquery = mysqli_query($conn, $query);


	$query = "DELETE FROM pengadaan WHERE aid = '".$_GET["aid"]."'";
	
	$rquery = mysqli_query($conn, $query);
	
	header("Location: ../pengadaan.php");
	die(); 
?>

