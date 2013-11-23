<table>
  <tr>
    <th>Column 1 Heading</th>
    <th>Column 2 Heading</th>
  </tr>

  <tr>
    <td>Row 1: Col 1</td>
    <td>Row 1: Col 2</td>
  </tr>

</table>

<?php 
	include 'BarangDao.php';
	//include 'Barang.php';
	//0. Mau memakai Barang DAo untuk test
	//1. Membuat Instan untuk barang Dao
	$barangDao = new BarangDao();
	//2. menarik data dari salah satu metho yaitu getAll() dimasukkan kedalam arrayList
	$keranjangBaru = $barangDao->getAll();
	//$keranjangBaru = $barangDao->getById("002");
	//3. Menguraikan array List utnuk di tampilkan ke layar
	$i = 0;
	while ($i< count($keranjangBaru)){
		//1. Buat Object Barang
		$item = new Barang();
		//2. Isi dalam keranjang diambil satu-satu terus di masukkan ke item barang
		$item = $keranjangBaru[$i];
		//3. Item barang di uraikan isi propertinya
		echo $item->getKodeBarang() . "<br>";
		echo $item->getNamaBarang() . "<br>";
		echo $item->getTipe() . "<br>";
		echo $item->getHrgBeli() . "<br>";
		echo $item->getHrgJual() . "<br>";
		echo $item->getStok() . "<br>";
		
		echo $i;
		$i++;
	}
	
	$keranjangBaru = $barangDao->getById("001");
	echo "<br>Berhasil<br>";


?>