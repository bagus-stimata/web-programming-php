<html>
	<head>
	</head>	
	<body>

	<h1 align="center">FUNGSI SATU</h1><br>

	<?php
		//Cara memanggil	
		penjumlahan();
		
		function penjumlahan(){
			echo "Penjumlahan";			
		}
		//Cara memanggil
		penjumlahan();
		
		echo "<br>==========================================<br>";
		//Fungsi dengan parameter
		function luas($panjang, $lebar){
			echo "Panjang adalah : " . $panjang*$lebar . " Meter";
		}
		luas(5, 6);
		
		echo "<br>==========================================<br>";
		//Fungsi Dengan menghasilkan nilai balik
		function hitungGaji($gapok, $tunjangan){
			return $gapok + $tunjangan;
		}
		echo  "Jumlah Gaji adalah: " . hitungGaji(2000, 1500); 
		
		
		
	?>

	</body>
</html>
