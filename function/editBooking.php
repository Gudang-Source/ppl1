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
	
	$query = "SELECT jumlah FROM booking WHERE bid = '".$_GET["bid"]."'";
	$rquery = mysqli_query($conn, $query);
	$old = mysqli_fetch_array($rquery, MYSQLI_NUM);

	$query = "SELECT stok FROM ATK WHERE aid = '".$_GET["b_aid"]."'";
	$rstok = mysqli_query($conn, $query);
	
	$stok = mysqli_fetch_array($rstok, MYSQLI_NUM);
	$stoklama = (int)$stok[0];
	echo $stoklama;
	$jumlah = (int)$_GET["jumlah"];
	echo $jumlah;
	$stokbaru = $stoklama +($old[0] - $jumlah);
	
	$rstokbaru = (string)$stokbaru;
	echo $rstokbaru;
	
	if ($stokbaru >= 0 && $jumlah > 0){
		$query = "UPDATE booking SET bid = '".$_GET["bid"]."', jumlah = '".$_GET["jumlah"]."', tanggal = '".$_GET["tanggal"]."', b_uid = '".$_GET["b_uid"]."', b_aid = '".$_GET["b_aid"]."' WHERE bid = '".$_GET["bid"]."'";
		
		$rquery = mysqli_query($conn, $query);
			
		$query = "UPDATE ATK SET stok = '".$rstokbaru."' WHERE aid = '".$_GET["b_aid"]."'";
		$rquery = mysqli_query($conn, $query);

		header("Location: ../booking.php");
		die();
	} else {
		header("Location: ../errorsStok.php");
		die();
	}
	
?>
