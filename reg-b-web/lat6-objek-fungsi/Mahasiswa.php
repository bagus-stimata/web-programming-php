<?php 
	//Function Biasa
	function menulisNama(){
		echo "Menulis Nama Juga<br>";
	}
	function mengambilNama(){
		$panjang  =5;
		$lebar = 10;
		$nilai = $panjang * $lebar;
		return $nilai;
	}
	
?>

<?php 
	//Cara Mendelarasikan Class
	Class Mhs{
		var $nim;
		var $nama;

		function setNim($isi_nim){
			$this->nim = $isi_nim;
		}
		function getNim(){
			return $this->nim;
		}
		
		function setNama($isi){
			$this->nama = $isi;
		}
		function getNama(){
			return $this->nama;
		}
		
	}
	
	Class Dosen{
		var $nip;
		var $name;
	}
	
/*	
	$test_var = 100;
	 
	echo mengambilNama() . "<br>";
	//menulisNama();
	//menulisNama();
	
	
	
	//Mendeklarasikan Instant --> Hukumnya Wajib
	$mhs = new Mhs();
	
	//$mhs->nim = "001";	
	//echo $mhs->nim;
	$mhs->setNim("Nim111"); //Ini untuk mengeset suatu nilai
	echo $mhs->getNim(); //Ini untuk mengambil dataa
	
	echo "<br>";
	
	$mhs->setNama("Pak Heri"); //Ini untuk mengeset suatu nilai
	echo $mhs->getNama(); //Ini untuk mengambil dataa
	
	echo "<br>";
	
	//Deklarasikan Instant dosen untuk menggunakan
	$dosen = new Dosen();
	$dosen->nip = "N001";
	echo "<br>";
	
	$dosen->nama = "Suhendar";
	echo $dosen->nama;
	
	echo "<br>";	
	
	echo "Check is Correct";
*/
?>