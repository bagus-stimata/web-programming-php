<?php 
	include 'Mahasiswa.php';
	
//Mendeklarasikan Instant --> Hukumnya Wajib
	$mhs1 = new Mhs();	
	$mhs1->setNim("001");
	$mhs1->setNama("Ayu Ajah");
	//mhs1 akan dimasukkan kedalam array atau daftar atau ruangan
	$arr_Mahasiswa[] = $mhs1;
	
	$mhs2 = new Mhs();	
	$mhs2->setNim("002");
	$mhs2->setNama("Adeknya");
	//mhs1 akan dimasukkan kedalam array atau daftar atau ruangan
	$arr_Mahasiswa[] = $mhs2;
	
	
	
	$mhs_hasil = new Mhs();
	$mhs_hasil = $arr_Mahasiswa[0];
	//Cara Menampilkan
	echo $mhs_hasil->getNim() . "<br>";
	echo $mhs_hasil->getNama() . "<br>";
	
	
	$mhs_hasil = new Mhs();
	$mhs_hasil = $arr_Mahasiswa[1];
	//Cara Menampilkan
	echo $mhs_hasil->getNim() . "<br>";
	echo $mhs_hasil->getNama() . "<br>";
	
	
	//Menampilkan dengan menggunakan perulangan
	echo "<br>=====================================<br>";
	for ($i=0; $i<count($arr_Mahasiswa); $i++ ){
		$mhs_hasil = new Mhs();
		$mhs_hasil = $arr_Mahasiswa[$i];
		//Cara Menampilkan
		echo $mhs_hasil->getNim() . "<br>";
		echo $mhs_hasil->getNama() . "<br>";
	}
	
	echo "<br>Completed";
	
	
	//echo $arr_Mahasiswa[0];
	
?>