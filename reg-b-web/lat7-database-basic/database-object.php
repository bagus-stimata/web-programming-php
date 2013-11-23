<?php 
	include 'koneksi.php';	
	
	echo "<h1>DATABASE DENGAN KONSEP OBJECT</h1>";
	class ModelBarang{
		var $kodeBarang;
		var $namaBarang;
		var $tipe;
		var $hargaBeli;
		var $hargaJual;
		var $stok;
		//Buat Getter Setter Sendiri ya????..... hehehe...
	}
	
	//Test Tampilkan data
	//1. Buat Statement Query
	$query = "SELECT pcode, pname, tipe, hrg_beli, hrg_jual, stok FROM tb_produk";
	//2. Jalankan Query
	$resultSet = mysql_query($query, $dbConn) or die('<br> Kesalahan Query : '.$query);
	echo "<br>";
	
	//***INI ADALAH CALON DAO***
	while ($item = mysql_fetch_assoc($resultSet)) {
		//Memasukkan ke dalam array Object
		$barang = new ModelBarang();
		$barang->kodeBarang = $item["pcode"];
		$barang->namaBarang = $item["pname"];
		$barang->tipe = $item["tipe"];
		$barang->hargaBeli = $item["hrg_beli"];
		$barang->hargaJual = $item["hrg_jual"];
		$barang->stok = $item["stok"];
		
		$arrBarang[] = $barang;				
		//Memasukkan ke dalam array row >> Kita juga bisa ganti memasukkan kedalam object nantinya
	}
	
	
	//***FUNGSI GET DI DAO***
	echo "<br>****MENAMPILKAN DATA DENGAN KONSEP OBJECT*****<br>";
	for ($i=0; $i<count($arrBarang); $i++ ){
		$itemBarang = new ModelBarang();		
		$itemBarang = $arrBarang[$i];

		//Cara Menampilkan
		echo $itemBarang->kodeBarang; echo " : ";
		echo $itemBarang->namaBarang; echo " : ";
		echo $itemBarang->tipe; echo " : ";
		echo $itemBarang->hargaBeli; echo " : ";
		echo $itemBarang->hargaJual; echo " : ";
		echo $itemBarang->stok; echo " : ";
				
		echo "<br>";
	}
	
		
	echo "<br>Command Completed";
	

?>
