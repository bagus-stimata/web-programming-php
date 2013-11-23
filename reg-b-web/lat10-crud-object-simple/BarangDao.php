
<?php 
	include 'Barang.php';
	//1. Buat Kelas Barang Dao
	class BarangDao{
		
		function getAll() {				
			return $keranjangBarang = $this->getById("%");
		}
		
		function getById($id){
			include 'koneksi.php';
			//Test Tampilkan data
			//1. Buat Statement Query
			$query = "SELECT pcode, pname, tipe, hrg_beli, hrg_jual, stok FROM tb_produk WHERE pcode LIKE '%" .$id. "%'";
			//2. Jalankan Query
			$resultSet = mysql_query($query, $dbconn) or die('<br> Kesalahan Query : '.$query);			
			
			$i=0;
			while ($item = mysql_fetch_assoc($resultSet)){
				//Membuat Instan object barang
				$barang = new Barang();
				$barang->setKodeBarang($item["pcode"]);
				$barang->setNamaBarang($item["pname"]);
				$barang->setTipe($item["tipe"]);
				$barang->setHrgBeli($item["hrg_beli"]);
				$barang->setHrgJual($item["hrg_jual"]);
				$barang->setStok($item["stok"]);
				
				//$listBarang[] = $i;
				$keranjangBarang[] = $barang;				
				$i++;
			}
			
			return $keranjangBarang;
		}
		
		
	}
/*	
	//0. Mau memakai Barang DAo untuk test
	//1. Membuat Instan untuk barang Dao
	$barangDao = new BarangDao();
	//2. menarik data dari salah satu metho yaitu getAll() dimasukkan kedalam arrayList
	$list = $barangDao->getAll();
	//3. Menguraikan array List utnuk di tampilkan ke layar
	$i = 0;
	while ($i< count($list)){
		echo $list[$i];
		$i++;
	}
	
	echo "<br>Berhasil<br>";
*/
?>