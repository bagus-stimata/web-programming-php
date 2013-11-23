<html>
	<head>
	</head>	
	<body>

	<h1 align="center">OBJECT ADVANCE</h1><br> 

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
		
		$mhs1 = new Mahasiswa();
		$mhs1->setNim("001");
		$mhs1->setNama("Kiki Fatmala");
		
		//$arr_mahasiswa = array();		
		$arr_mahasiswa2[] = $mhs1;		
		
		$mhs2 = new Mahasiswa();
		$mhs2->setNim("002");
		$mhs2->setNama("Mahasiswa Kedua");
		
		$arr_mahasiswa2[] = $mhs2;		
		
		//Menampilkan
		$mhs = new Mahasiswa();
		$mhs =  $arr_mahasiswa2[0];
		echo $mhs->getNim() . " " . $mhs->getNama();	
		
	    echo "<br>";
	    
		$mhs = new Mahasiswa();
		$mhs =  $arr_mahasiswa2[1];
		echo $mhs->getNim() . " " . $mhs->getNama();	
		
		echo "<br> Mission Complete";
		
		
	?>
	
	

	</body>
</html>
