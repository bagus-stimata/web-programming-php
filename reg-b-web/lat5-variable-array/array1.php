<html>
	<head>
	</head>	
	<body>

	<h1 align="center">KONDISI DUA</h1><br>

	<?php
			$variabel_biasa = "Ini adalah variable biasa";
			echo $variabel_biasa . "<br>";
			
			echo "<br>========================================<br>";
			//1. Cara pertama deklarasi array
			$teman= array("Bari", "Ajeng", "Intan");
			echo $teman[0] . "<br>";
			echo $teman[1] . "<br>";
			echo $teman[2] . "<br>";
			
			echo "<br>========================================<br>";
			//2. Cara kedua deklarasi array
			$friend[] = "Sahabat";
			$friend[] = "Sejati";
			$friend[] = "Kenal-kenal aja";
			echo $friend[0] . "<br>";
			echo $friend[1] . "<br>";
			echo $friend[2] . "<br>";
			
			echo "<br>========================================<br>";
			//3. Cara Ketiga deklarasi array
			$rekan= array("Kerja"=>Ahmad, "Main"=>Untung, "Nakal"=>Sule);
			echo $rekan["Kerja"] . "<br>";
			echo $rekan["Main"] . "<br>";
			echo $rekan["Nakal"] . "<br>";
			//Ini tidak bisa ditampilkan
			echo $rekan[0] . "<br>";
			echo $rekan[1] . "<br>";
			echo $rekan[2] . "<br>";
			
			echo "<br>========================================<br>";
			//4. Menampilkan dengan perulangan
			$nilai_siswa = array(200, 300, 50);
			
			for ($i=0; $i< count($nilai_siswa); $i++){
				echo "For Nilai Siswa : " . $nilai_siswa[$i] . " <br>";
			}
			
			foreach ($nilai_siswa as $key=>$isi){
				echo "FOREACH $key adalah $isi <br>";				
			}
			
			while (list($key, $isi)=each($nilai_siswa)) {
				echo "While Nilai $key adalah $isi<br>";
			}
			
			while (list($key, $isi)=each($rekan)) {
				echo "Rekan $key adalah $isi<br>";
			}
			
	
	?>
	
	

	</body>
</html>
