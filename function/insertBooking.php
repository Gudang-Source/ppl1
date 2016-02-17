<?php
	include("../Connect.php");

	global $conn;
	
	$query = "SELECT aid FROM ATK WHERE aid = '".$_GET["b_aid"]."'";
	$ratk = mysqli_query($conn, $query);
	$query = "SELECT uid FROM user WHERE uid = '".$_GET["b_uid"]."'";
	$ruser = mysqli_query($conn, $query);

	if (is_null($rstok) || is_null($ruser)){
		header("Location: ../errorDatabase.php");
		die();
	}
	
	$stok = mysqli_fetch_array($rstok, MYSQLI_NUM);
	$stoklama = (int)$stok[0];
	
	$jumlah = (int)$_GET["jumlah"];
	echo $jumlah;
	$stokbaru = $stoklama - $jumlah;
	
	$rstokbaru = (string)$stokbaru;
	echo $rstokbaru;
	
	if ($stokbaru >= 0 && $jumlah > 0){
		$query = "INSERT INTO booking (bid, jumlah, tanggal, b_uid, b_aid) VALUES ('".$_GET["bid"]."', '".$_GET["jumlah"]."', '".$_GET["tanggal"]."', '".$_GET["b_uid"]."', '".$_GET["b_aid"]."')";
		
		$rquery = mysqli_query($conn, $query);
		
		$query = "UPDATE ATK SET stok = '".$rstokbaru."' WHERE aid = '".$_GET["b_aid"]."'";
		$rquery = mysqli_query($conn, $query);
		
		header("Location: ../booking.php");
		die();
	} else {
		header("Location: ../errorStok.php");
		die();
	}
?>

