<?php
    include ("../Connect.php");
    global $conn;
	
	$query = "SELECT nama, COUNT(nama) FROM user JOIN pemakaian ON user.uid = pemakaian.p_uid GROUP BY nama";
	
	$rquery = mysqli_query($conn, $query);
	$row = mysqli_fetch_array($rquery, MYSQLI_NUM);
	$rowcount = mysqli_num_rows($rquery);
	
	echo $rowcount;
	print_r($row);
	mysqli_close($conn);
?>