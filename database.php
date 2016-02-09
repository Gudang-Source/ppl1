<?php

include("connect.php");

/* Fungsi */
function get_ATK(){
/* Mengakses data seluruh ATK */
	global $conn;
	$query = "SELECT * FROM ATK";
	$rquery = mysqli_query($conn, $query);
	$ATK = array();
	
	while ($row = mysqli_fetch_array($rquery, MYSQLI_ASSOC)){
		$ATK[] = $row;
	}
	
	return $ATK;
}

function get_user(){
/* Mengakses data seluruh user */
	global $conn;
	$query = "SELECT * FROM user";
	$rquery = mysqli_query($conn, $query);
	$user = array();
	
	while ($row = mysqli_fetch_array($rquery, MYSQLI_ASSOC)){
		$user[] = $row;
	}
	
	return $user;
}

function get_supplier(){
/* Mengakses data seluruh supplier */
	global $conn;
	$query = "SELECT * FROM supplier";
	$rquery = mysqli_query($conn, $query);
	$supplier = array();
	
	while ($row = mysqli_fetch_array($rquery, MYSQLI_ASSOC)){
		$supplier[] = $row;
	}
	
	return $supplier;
}

function get_pemakaian(){
/* Mengakses data seluruh pemakaian */
	global $conn;
	$query = "SELECT * FROM pemakaian";
	$rquery = mysqli_query($conn, $query);
	$pemakaian = array();
	
	while ($row = mysqli_fetch_array($rquery, MYSQLI_ASSOC)){
		$pemakaian[] = $row;
	}
	
	return $pemakaian;
}

function get_pengadaan(){
/* Mengakses data seluruh pengadaan */
	global $conn;
	$query = "SELECT * FROM pengadaan";
	$rquery = mysqli_query($conn, $query);
	$pengadaan = array();
	
	while ($row = mysqli_fetch_array($rquery, MYSQLI_ASSOC)){
		$pengadaan[] = $row;
	}
	
	return $pengadaan;
}

function get_booking(){
/* Mengakses data seluruh booking */
	global $conn;
	$query = "SELECT * FROM booking";
	$rquery = mysqli_query($conn, $query);
	$booking = array();
	
	while ($row = mysqli_fetch_array($rquery, MYSQLI_ASSOC)){
		$booking[] = $row;
	}
	
	return $booking;
}

function insert_pemakaian($jumlah, $tanggal, $p_uid, $p_aid){
/* Menambah pemakaian */
	global $conn;
	$query = INSERT INTO pemakaian (jumlah, tanggal, p_uid, p_aid) VALUES ($jumlah, $tanggal, (SELECT uid, aid FROM user NATURAL JOIN ATK WHERE (uid = $p_uid) AND (aid = $p_aid)));
	$rquery = mysqli_query($conn, $query);
	
	return $rquery;
}



?>