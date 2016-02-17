<?php
    include ("../Connect.php");

    global $conn;

	$query = "SELECT aid FROM ATK WHERE aid = '".$_GET["a_aid"]."'";
	$ratk = mysqli_query($conn, $query);
	$query = "SELECT sid FROM supplier WHERE sid = '".$_GET["a_sid"]."'";
	$ruser = mysqli_query($conn, $query);
	$atk = mysqli_fetch_array($ratk, MYSQLI_NUM);
	$atkid = (int)$atk[0];
	$user = mysqli_fetch_array($ruser, MYSQLI_NUM);
	$userid = (int)$user[0];
	echo $stoklama;
	
	if (($atkid == 0) || ($userid == 0)){
		header("Location: ../errorDatabase.php");
		die();
	}
	
	$jumlah = (int)$_GET["jumlah"];
	if ($jumlah > 0){
		// Penambahan data di tabel 'pengadaan'
		$query = "INSERT INTO pengadaan (aid, jumlah, tgl_pesan, tgl_datang, a_sid, a_aid) VALUES ('".$_GET["aid"]."', '".$_GET["jumlah"]."', '".$_GET["tgl_pesan"]."', '".$_GET["tgl_datang"]."', '".$_GET["a_sid"]."', '".$_GET["a_aid"]."')";
		$rquery = mysqli_query($conn, $query);

		// Update data di tabel 'ATK'
		// get reference ke data yang mau diadakan
		$query = "SELECT stok FROM ATK WHERE aid = '".$_GET["a_aid"]."'";
		$rstok = mysqli_query($conn, $query);

		// get nilai stok awal
		$stok = mysqli_fetch_array($rstok, MYSQLI_NUM);
		$stoklama = (int)$stok[0];
		echo $stoklama;

		// get nilai stok yang mau diadakan
		$jumlah = (int)$_GET["jumlah"];
		echo $jumlah;

		// set query dan nilai stok baru
		$stokbaru = $stoklama + $jumlah;
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
