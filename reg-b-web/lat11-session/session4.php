<html>
<head><title>Halaman ke-4</title></head>
<body>
	<h1><p align="center">Halaman ke-4</p></h1>
	<?php 
		session_start();

		echo "Baca Session yang diciptakan di halaman pertama<br>";
		echo "Isi Session namaUser adalah : "; echo $_SESSION['namaUser'];
		
		if(isset($_SESSION['namaUser']))
  			unset($_SESSION['namaUser']);
  		
  		//Menghancurkan semua session dengan funsi
  		//session_destroy();		
	?>
	<br>
	Link ke <a href="session2.php">Halaman ke-2 (melihat apakah session namaUser masih ada?)</a>

</body>
</html>