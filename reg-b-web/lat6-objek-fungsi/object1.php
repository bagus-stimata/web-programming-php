<html>
	<head>
	</head>	
	<body>

	<h1 align="center">OBJECT</h1><br> 

	<?php
		class Mahasiswa{
			var $nim=1;
			var $nama ="Belum Ada";
			
			function setNama($objectnya, $nilai){
				$objectnya->nim = $nilai;
			}
			function getNama($objectnya){
				return $objectnya->nim;
			}
			
			function toString($objectnya){
				echo $objectnya->nama;
			}
			
		}
		
		$mhs = new Mahasiswa();
		echo $mhs->nama . "<br>";
		
		echo $mhs->toString($mhs);
		
		echo "<br>";
		
		$mhs->setNama($mhs, "Suhariono");
		echo $mhs->getNama($mhs);
		
	?>
	
	

	</body>
</html>
