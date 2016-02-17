<?php
    include ("../Connect.php");

    global $conn;

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
?>
