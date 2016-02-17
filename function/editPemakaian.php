<?php
	include("../Connect.php");

	global $conn;
	
	$query = "SELECT aid FROM ATK WHERE aid = '".$_GET["p_aid"]."'";
	$ratk = mysqli_query($conn, $query);
	$query = "SELECT uid FROM user WHERE uid = '".$_GET["p_uid"]."'";
	$ruser = mysqli_query($conn, $query);

	if (is_null($rstok) || is_null($ruser)){
		header("Location: ../errorDatabase.php");
		die();
	}
	
	$query = "SELECT stok FROM ATK WHERE aid = '".$_GET["p_aid"]."'";
	$rstok = mysqli_query($conn, $query);
	
	$stok = mysqli_fetch_array($rstok, MYSQLI_NUM);
	$stoklama = (int)$stok[0];
	echo $stoklama;
	$jumlah = (int)$_GET["jumlah"];
	echo $jumlah;
	$stokbaru = $stoklama +($old[0] - $jumlah);
	
	$rstokbaru = (string)$stokbaru;
	echo $rstokbaru;
	
	if ($stokbaru >= 0){
		$query = "SELECT jumlah FROM pemakaian WHERE pid = '".$_GET["pid"]."'";
		$rquery = mysqli_query($conn, $query);
		$old = mysqli_fetch_array($rquery, MYSQLI_NUM);


		$query = "UPDATE pemakaian SET pid = '".$_GET["pid"]."', jumlah = '".$_GET["jumlah"]."', tanggal = '".$_GET["tanggal"]."', p_uid = '".$_GET["p_uid"]."', p_aid = '".$_GET["p_aid"]."' WHERE pid = '".$_GET["pid"]."'";
		
		$rquery = mysqli_query($conn, $query);
		
		$query = "UPDATE ATK SET stok = '".$rstokbaru."' WHERE aid = '".$_GET["p_aid"]."'";
		$rquery = mysqli_query($conn, $query);

		header("Location: ../pemakaian.php");
		die();
	} else {
		header("Location: ../errorStok.php");
		die();
	}
	
?>
