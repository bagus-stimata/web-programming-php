<?php 
	//Ambil parameter dari page form yang menyertakannya
	$isEdit = trim($_GET['isEdit'], " ");
	$kode_barang = trim($_GET['teks_pcode'], " ");
	$nama_barang = $_GET['teks_pname'];
	$tipe_barang = $_GET['teks_tipe'];
	$hrg_jual = $_GET['teks_hrg_jual'];
	$hrg_beli = $_GET['teks_hrg_beli'];
	$stok = $_GET['teks_stok'];

	
	include 'BarangDao.php';
	$barangDao = new BarangDao();	

	if ($isEdit==1) { //Edit Data
		//Tambah Data
		$barang = new Barang();
		$barang->kodeBarang = $kode_barang;
		$barang->namaBarang = $nama_barang;
		$barang->tipe = $tipe_barang;
		$barang->hargaBeli = $hrg_beli;
		$barang->hargaJual = $hrg_jual;
		$barang->stok = $stok;
		//Fungsi yang ada di BarangDao untuk mengupdate data
		$barangDao->saveOrUpdate($barang);	
		
	} else if ($isEdit==2){
		//Tambah Data-->SAMA LHO
		$barang = new Barang();
		$barang->kodeBarang = $kode_barang;
		$barang->namaBarang = $nama_barang;
		$barang->tipe = $tipe_barang;
		$barang->hargaBeli = $hrg_beli;
		$barang->hargaJual = $hrg_jual;
		$barang->stok = $stok;
		$barangDao->saveOrUpdate($barang);			

	} else if ($isEdit==3) {
		//HAPUS BARANG
		$barang = new Barang();
		$barang->kodeBarang = $kode_barang;
		$barangDao->remove($barang);	
		
	}
	
	
  	header('location:barang_list.php');
?>
