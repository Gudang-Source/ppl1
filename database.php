<?php

include("connect.php");

/* Fungsi read all data*/
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

/* Fungsi Create */
function insert_ATK($aid, $jenis, $stok, $stok_min){
/* Menambah ATK baru */
	global $conn;
	$query = "INSERT INTO ATK (aid, jenis, stok, stok_min) VALUES (NULL, $jenis, $stok, $stok_min)";
	$rquery = mysqli_query($conn, $query);
	
	return $rquery;
}

function insert_user($uid, $nama){
/* Menambah user */
	global $conn;
	$query = "INSERT INTO ATK (aid, nama) VALUES (NULL, $nama)";
	$rquery = mysqli_query($conn, $query);
	
	return $rquery;
}

function insert_supplier($sid, $jenis, $stok, $stok_min){
/* Menambah supplier */
	global $conn;
	$query = "INSERT INTO ATK (sid, nama, perusahaan) VALUES (NULL, $nama, $perusahaan)";
	$rquery = mysqli_query($conn, $query);
	
	return $rquery;
}

function insert_pemakaian($pid, $jumlah, $tanggal, $p_uid, $p_aid){
/* Menambah pemakaian */
	global $conn;
	$query = "INSERT INTO pemakaian (pid, jumlah, tanggal, p_uid, p_aid) VALUES (NULL, $jumlah, $tanggal, (SELECT uid, aid FROM user NATURAL JOIN ATK WHERE (uid = $p_uid) AND (aid = $p_aid)))";
	$rquery = mysqli_query($conn, $query);
	
	return $rquery;
}

function insert_booking($bid, $jumlah, $tanggal, $b_uid, $b_aid){
/* Menambah booking */
	global $conn;
	$query = "INSERT INTO booking (bid, jumlah, tanggal, p_uid, p_aid) VALUES (NULL, $jumlah, $tanggal, (SELECT uid, aid FROM user NATURAL JOIN ATK WHERE (uid = $b_uid) AND (aid = $b_aid)))";
	$rquery = mysqli_query($conn, $query);
	
	return $rquery;
}

function insert_pengadaan($aid, $jumlah, $tgl_pesan, $tgl_datang, $p_sid, $p_aid){
/* Menambah pengadaan */
	global $conn;
	$query = "INSERT INTO pengadaan (aid, jumlah, tgl_pesan, tgl_datang, p_sid, p_aid) VALUES (NULL, $jumlah, $tgl_pesan, $tgl_datang, (SELECT sid, aid FROM supplier NATURAL JOIN ATK WHERE (sid = $a_sid) AND (aid = $a_aid)))";
	$rquery = mysqli_query($conn, $query);
	
	return $rquery;
}

/* Fungsi Update */
function update_ATK($aid, $jenis, $stok, $stok_min){
/* Mengubah data ATK */
	global $conn;
	$query = "UPDATE ATK SET jenis = $jenis, stok = $stok, stok_min = $stok_min WHERE aid = $aid";
	$rquery = mysqli_query($conn, $query);
	
	return $rquery;
}

function update_user($uid, $nama){
/* Mengubah data user */
	global $conn;
	$query = "UPDATE user SET nama = $nama WHERE uid = $uid";
	$rquery = mysqli_query($conn, $query);
	
	return $rquery;
}

function update_supplier($sid, $nama, $perusahaan){
/* Mengubah data supplier */
	global $conn;
	$query = "UPDATE supplier SET nama = $nama, perusahaan = $perusahaan WHERE sid = $sid";
	$rquery = mysqli_query($conn, $query);
	
	return $rquery;
}

function update_pemakaian($pid, $jumlah, $tanggal, $p_uid, $p_aid){
/* Mengubah data pemakaian */
	global $conn;
	$query = "UPDATE pemakaian SET jumlah=$jumlah, tanggal=$tanggal, p_uid=$p_uid, p_aid=$p_aid WHERE pid = $pid";
	$rquery = mysqli_query($conn, $query);
	
	return $rquery;
}

function update_booking($bid, $jumlah, $tanggal, $b_uid, $b_aid){
/* Mengubah data booking */
	global $conn;
	$query = "UPDATE booking SET jumlah=$jumlah, tanggal=$tanggal, b_uid=$b_uid, b_aid=$b_aid WHERE bid = $bid";
	$rquery = mysqli_query($conn, $query);
	
	return $rquery;
}

function update_pengadaan($aid, $jumlah, $tgl_pesan, $tgl_datang, $a_sid, $a_aid){
/* Mengubah data pengadaan */
	global $conn;
	$query = "UPDATE pengadaan SET jumlah=$jumlah, tgl_pesan=$tgl_pesan, tgl_datang=$tgl_datang, a_sid=$a_sid, a_aid=$a_aid WHERE aid = $aid";
	$rquery = mysqli_query($conn, $query);
	
	return $rquery;
}

/* Fungsi Delete */
function delete_ATK($aid){
/* Menghapus data ATK */
	global $conn;
	$query = "DELETE FROM ATK WHERE aid = $aid";
	$rquery = mysqli_query($conn, $query);
	
	return $rquery;

}

function delete_user($uid){
/* Menghapus data user */
	global $conn;
	$query = "ELETE FROM user WHERE uid = $uid";
	$rquery = mysqli_query($conn, $query);
	
	return $rquery;

}

function delete_supplier($sid){
/* Menghapus data supplier */
	global $conn;
	$query = "DELETE FROM ATK WHERE sid = $sid";
	$rquery = mysqli_query($conn, $query);
	
	return $rquery;

}

function delete_pemakaian($pid){
/* Menghapus data pemakaian */
	global $conn;
	$query = "DELETE FROM pemakaian WHERE pid = $pid";
	$rquery = mysqli_query($conn, $query);
	
	return $rquery;

}

function delete_booking($bid){
/* Menghapus data booking */
	global $conn;
	$query = "DELETE FROM booking WHERE bid = $bid";
	$rquery = mysqli_query($conn, $query);
	
	return $rquery;

}

function delete_pengadaan($aid){
/* Menghapus data ATK */
	global $conn;
	$query = "DELETE FROM pengadaan WHERE aid = $aid";
	$rquery = mysqli_query($conn, $query);
	
	return $rquery;

}

function get_kebutuhan(){
	$stokATK = get_ATK();
	$filteredATK = array();
	foreach ($stokATK as $data){
		if($data["stok"] < $data["stok_min"]){
			$data["kebutuhan"] = $data["stok_min"] - $data["stok"];
			$filteredATK[] = $data;
		}
	}
	return $filteredATK;
}

?>