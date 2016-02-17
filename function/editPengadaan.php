<?php
	include("../Connect.php");

	global $conn;
	
	$query = "SELECT aid FROM ATK WHERE aid = '".$_GET["a_aid"]."'";
	$ratk = mysqli_query($conn, $query);
	$query = "SELECT sid FROM supplier WHERE sid = '".$_GET["a_sid"]."'";
	$ruser = mysqli_query($conn, $query);
	$atk = mysqli_fetch_array($ratk, MYSQLI_NUM);
	$atkid = (int)$atk[0];
	$user = mysqli_fetch_array($ruser, MYSQLI_NUM);
	$userid = (int)$user[0];
	echo $atkid;
	echo $userid;
	
	if (($atkid == 0) || ($userid == 0)){
		header("Location: ../errorDatabase.php");
		die();
	}
	
	$jumlah = (int)$_GET["jumlah"];
	if ($jumlah > 0){
		$query = "SELECT jumlah FROM pengadaan WHERE aid = '".$_GET["aid"]."'";
		$rquery = mysqli_query($conn, $query);
		$old = mysqli_fetch_array($rquery, MYSQLI_NUM);


		$query = "UPDATE pengadaan SET aid = '".$_GET["aid"]."', jumlah = '".$_GET["jumlah"]."', tgl_pesan = '".$_GET["tgl_pesan"]."', tgl_datang = '".$_GET["tgl_datang"]."', a_sid = '".$_GET["a_sid"]."', a_aid = '".$_GET["a_aid"]."' WHERE aid = '".$_GET["aid"]."'";
		
		$rquery = mysqli_query($conn, $query);
		

		$query = "SELECT stok FROM ATK WHERE aid = '".$_GET["a_aid"]."'";
		$rstok = mysqli_query($conn, $query);
		
		$stok = mysqli_fetch_array($rstok, MYSQLI_NUM);
		$stoklama = (int)$stok[0];
		echo $stoklama;
		$jumlah = (int)$_GET["jumlah"];
		echo $jumlah;
		$stokbaru = $stoklama +($jumlah - $old[0]);
		
		$rstokbaru = (string)$stokbaru;
		echo $rstokbaru;
		
		$query = "UPDATE ATK SET stok = '".$rstokbaru."' WHERE aid = '".$_GET["a_aid"]."'";
		$rquery = mysqli_query($conn, $query);

		header("Location: ../pengadaan.php");
		die();
	} else {
		header("Location: ../errorStok.php");
		die();
	}
?>
