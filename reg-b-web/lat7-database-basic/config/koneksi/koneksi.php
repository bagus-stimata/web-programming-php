<?php 

	$dbServer = "localhost";
	$dbUser = "root";
	$dbPass = "hacker";		
	//1. Koneksi ke server
	$dbConn = mysql_connect($dbServer, $dbUser , $dbPass) or die('<br>Error>>Koneksi database gagal');	
	
	//2. Memilih database 
	mysql_select_db('db_order', $dbConn) or die('<br>Error >> Database tidak ada');

	
	
?>
