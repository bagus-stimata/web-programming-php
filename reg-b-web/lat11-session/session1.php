<?php session_start(); ?>

<html>
<head><title>Halaman ke-1</title></head>
<body>
	<h1><p align="center">Halaman ke-1</p></h1>
	<?php 
		echo "Create dan Inisialisasi Session<br>";
		echo "Isi Session Nama User dengan: Pak Dul";
		
		// Buat Session namaUser dan mengisi nilai dengan Pak Dul
		$_SESSION['namaUser']= "Pak Dul";		
	?>
	<br>
	Link ke <a href="session2.php">Halaman ke-2</a>

</body>
</html>