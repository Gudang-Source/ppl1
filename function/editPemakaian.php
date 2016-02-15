<?php
	include("../Connect.php");

	global $conn;
	$query = "UPDATE pemakaian SET pid = '".$_GET["pid"]."', jumlah = '".$_GET["jumlah"]."', tanggal = '".$_GET["tanggal"]."', p_uid = '".$_GET["p_uid"]."', p_aid = '".$_GET["p_aid"]."' WHERE pid = '".$_GET["pid"]."'";
	
	$rquery = mysqli_query($conn, $query);
	
	header("Location: ../pemakaian.php");
	die();
?>
