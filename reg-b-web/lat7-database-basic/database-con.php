<?php 
	echo "TEST DATABASE";
	$dbServer = "localhost";
	$dbUser = "root";
	$dbPass = "hacker";		
	//1. Koneksi ke server
	$dbConn = mysql_connect($dbServer, $dbUser , $dbPass) or die('<br>Error>>Koneksi database gagal');	
	//2. Memilih database 
	mysql_select_db('db_order', $dbConn) or die('<br>Error >> Database tidak ada');

	//Test Memasukkan data
	$queryku = "INSERT INTO tb_produk(pcode, pname, tipe, hrg_beli, hrg_jual, stok) values('004', 'Jajan', 'T2', '2000', '4000', '50')";
	mysql_query($queryku, $dbConn) or die('<br> Kesalahan Query : '.$query);
	$query = "DELETE FROM tb_produk WHERE pcode= '004' ";
	mysql_query($query, $dbConn) or die('<br> Kesalahan Query : '.$query);
	
	//Test Tampilkan data
	//1. Buat Statement Query
	$query = "SELECT pcode, pname, tipe, hrg_beli, hrg_jual, stok FROM tb_produk";
	//2. Jalankan Query
	$resultSet = mysql_query($query, $dbConn) or die('<br> Kesalahan Query : '.$query);
	//3.
	echo "<br>";
	$rows = array();	
	while ($item = mysql_fetch_assoc($resultSet)) {
	    echo $item["pcode"]; echo " : ";
		echo $item["pname"]; echo " : ";
		echo $item["tipe"]; echo " : ";
		echo $item["hrg_beli"]; echo " : ";
		echo $item["hrg_jual"]; echo " : ";
		echo $item["stok"]; echo " : ";
		echo "<br>";
		//Memasukkan ke dalam array row >> Kita juga bisa ganti memasukkan kedalam object nantinya
		$rows[] = $item;
	}
		
	echo "<br>Command Completed";
?>