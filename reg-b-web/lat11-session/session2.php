<?php session_start(); ?>
<html>
<head><title>Halaman ke-2</title></head>
<body>
	<h1><p align="center">Halaman ke-2</p></h1>
	<?php 
		echo "Baca Session yang diciptakan di halaman pertama<br>";
		echo "Isi Session namaUser adalah : "; echo $_SESSION['namaUser'];
	?>
	<br>
	Link ke <a href="session3.php">Halaman ke-3 (Session Masih ada di Halaman 3 walaupun tidak diisi nilai lagi)</a>

</body>
</html>