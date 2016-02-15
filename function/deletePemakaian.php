<?php
	include("../Connect.php");

	global $conn;
	$query = "DELETE FROM pemakaian WHERE pid = '".$_GET["pid"]."'";
	
	$rquery = mysqli_query($conn, $query);
	
	header("Location: ../pemakaian.php");
	die();
?>

