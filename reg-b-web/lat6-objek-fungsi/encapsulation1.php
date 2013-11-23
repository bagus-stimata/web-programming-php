<html>
	<head>
	</head>	
	<body>

	<h1 align="center">ENCAPSULATION 1</h1><br> 

	<?php
		class Mahasiswa{
			var $nim=0;
			var $nama="nama kosong";
			
			
			function setNim($nilai){
				$this->nim = $nilai;
			}
			function getNim(){
				return $this->nim;
			}
			
			function setNama($nilai){
				$this->nama = $nilai;
			}
			function getNama(){
				return $this->nama;
			}
			
			function toString(){
				echo $this->nim . $this->nama;
			}
			
				
			
		}
		
		
	?>

	<?php 
		//Penggunaan Encapsulation
		$mhs = new Mahasiswa();
		//Memberi nilai pada object class mhs
		$mhs->setNim(3);
		$mhs->setNama("Bagus Winarno");			

		//Cara menampilkan kelas dengan encapsulation
		echo "Nim : " . $mhs->getNim() . "<br>";
		echo "Nama : " . $mhs->getNama();
		//echo $mhs->toString();		
		
	?>	
	
	

	</body>
</html>
