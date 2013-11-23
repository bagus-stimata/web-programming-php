<html>
<head><title>Halaman ke-3</title></head>
<body>
	<h1><p align="center">Halaman ke-3</p></h1>
	<?php 
		//Kita juga bisa menuliskan session start disini
		session_start();
		echo "Baca Session yang diciptakan di halaman pertama<br>";
		echo "Isi Session namaUser adalah : "; echo $_SESSION['namaUser'];
		
	?>
	<br>
	Link ke <a href="session2.php">Halaman ke-2</a>
	<br>
	Link ke <a href="session4.php">Halaman ke-4 (Untuk menghancurkan Session)</a>

</body>
</html>