<?php 
	include 'Barang.php';
	
	class BarangDao{	
				
		function findAll(){
			include 'koneksi.php';
			//Test Tampilkan data
			//1. Buat Statement Query
			$query = "SELECT pcode, pname, tipe, hrg_beli, hrg_jual, stok FROM tb_produk";
			//2. Jalankan Query
			$resultSet = mysql_query($query, $dbconn) or die('<br> Kesalahan Query : '.$query);			
			
			while ($item = mysql_fetch_assoc($resultSet)) {
				//Memasukkan ke dalam array Object
				$barang = new Barang();
				$barang->kodeBarang = $item["pcode"];
				$barang->namaBarang = $item["pname"];
				$barang->tipe = $item["tipe"];
				$barang->hargaBeli = $item["hrg_beli"];
				$barang->hargaJual = $item["hrg_jual"];
				$barang->stok = $item["stok"];
				
				$arrBarang[] = $barang;		
			}
			return $arrBarang;
		}
		
		function findAllById($id){
			include 'koneksi.php';
			//Test Tampilkan data
			//1. Buat Statement Query
			$query = "SELECT pcode, pname, tipe, hrg_beli, hrg_jual, stok FROM tb_produk WHERE pcode LIKE '%" .$id. "%'";
			//2. Jalankan Query
			$resultSet = mysql_query($query, $dbconn) or die('<br> Kesalahan Query : '.$query);			
			
			while ($item = mysql_fetch_assoc($resultSet)) {
				//Memasukkan ke dalam array Object
				$barang = new Barang();
				$barang->kodeBarang = $item["pcode"];
				$barang->namaBarang = $item["pname"];
				$barang->tipe = $item["tipe"];
				$barang->hargaBeli = $item["hrg_beli"];
				$barang->hargaJual = $item["hrg_jual"];
				$barang->stok = $item["stok"];
				$arrBarang[] = $barang;		
			}
			return $arrBarang;
						
		}
		function remove($object){
			include 'koneksi.php';
			
			$barang = new Barang();
			$barang = $object;
			$query = "DELETE FROM tb_produk WHERE pcode='".$barang->kodeBarang."'"; 
			mysql_query($query, $dbconn) or die('<br> Kesalahan Query : '.$query);
			
		}
		function saveOrUpdate($object){
			include 'koneksi.php';
			
			$barang = new Barang();
			$barang = $object;
			//Jika $rows lebih dari 0 maka EDIT			
			$rows = $this->findAllById($barang->kodeBarang);
			if (count($rows)>0){
				$query = "UPDATE tb_produk SET pname='" .$barang->namaBarang."', 
					tipe='" .$barang->tipe. "', hrg_beli='".$barang->hargaBeli."', hrg_jual='".$barang->hargaJual."', stok='".$barang->stok."'
					WHERE pcode='".$barang->kodeBarang."'"; 						
			} else {
				//Tambah Data
				$query = "INSERT INTO tb_produk(pcode, pname, tipe, hrg_beli, hrg_jual, stok) 
					values('". $barang->kodeBarang . "', '". $barang->namaBarang ."','". $barang->tipe ."',
					'". $barang->hargaBeli ."','". $barang->hargaJual ."','". $barang->stok ."')";				
			}
			
			mysql_query($query, $dbconn) or die('<br> Kesalahan Query : '.$query);			
		}
		
	}
	
	/*	
	//TEST DAO
	$barangDao = new BarangDao();	
	//TAMPIL DATA
	$listBarang = $barangDao->findAllById('008');
	//$listBarang = $barangDao->findAll();	
	$panjang = count($listBarang);
	for ($i=0; $i<$panjang; $i++){
		$itemBarang = new Barang();
		$itemBarang = $listBarang[$i];
		
		echo $itemBarang->kodeBarang; echo " : ";
		echo $itemBarang->namaBarang; echo " : ";
		echo $itemBarang->tipe; echo " : ";
		echo $itemBarang->hargaBeli; echo " : ";
		echo $itemBarang->hargaJual; echo " : ";
		echo $itemBarang->stok; echo " : ";
		echo "<br>";	
	}
	
	//Tambah Data
	$barang = new Barang();
	$barang->kodeBarang = '008';
	$barang->namaBarang = 'Jangan dicoba donk';
	$barang->tipe = '123';
	$barang->hargaBeli = '600';
	$barang->hargaJual = '700';
	$barang->stok = '10';
	$barangDao->saveOrUpdate($barang);	
	
	//HAPUS BARANG
	$barang2 = new Barang();
	$barang2->kodeBarang = '008';
	$barangDao->remove($barang2);	
	
	echo "<br>Completed</br>";
	
	*/
		
?>
