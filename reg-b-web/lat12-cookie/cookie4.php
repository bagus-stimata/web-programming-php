<html>
<head><title>Cookie Halaman ke-4</title></head>
<body>
	<h1><p align="center">Cookie Halaman ke-4</p></h1>
	<?php 
		echo "Baca Cookie yang diciptakan di halaman pertama<br>";
		echo "Isi Cookie cookieUser adalah : "; echo $_COOKIE['cookieUser'];
		
		//Menghancurkan cookie		
  		setcookie("cookieUser", "", time()-3600);
	?>
	<br>
	Link ke <a href="cookie2.php">Halaman ke-2 (melihat apakah Cookie cookieUser masih ada?)</a>

</body>
</html>