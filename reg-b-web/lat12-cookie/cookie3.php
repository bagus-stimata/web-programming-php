<html>
<head><title>Cookie Halaman ke-3</title></head>
<body>
	<h1><p align="center">Cookie Halaman ke-3</p></h1>
	<?php 
		echo "Baca Cookie yang diciptakan di halaman pertama<br>";
		if (isset($_COOKIE['cookieUser'])){
			echo "Isi Cookie cookieUser adalah : "; echo $_COOKIE['cookieUser'];						
		}else {
		  echo "Waduh Cookienya tidak pernah ada th mas!<br>";			
		}
		
		
		echo "<br>Tampilkan semua cookie yang aktif<br><br>";
		print_r($_COOKIE);
		
	?>
	<br>
	Link ke <a href="cookie2.php">Halaman ke-2</a>
	<br>
	Link ke <a href="cookie4.php">Halaman ke-4 (Untuk menghancurkan Cookie)</a>

</body>
</html>