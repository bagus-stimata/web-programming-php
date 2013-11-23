<?php setcookie("cookieUser", "Sop Pak Min", time()+3600); ?> 
<html>
<head><title>Cookie Halaman ke-1</title></head>
<body>
	<h1><p align="center">Cookie Halaman ke-1</p></h1>
	<?php 
		//Variasi cara mendeklarasikan cookie
		$expire=time()+60*60*24*30; //--> time():waktu sekarang + detik + menit + jam + hari --> berarti cookie akan hidup selama 1 bulan
		setcookie("cookieUser2", "Sop Pak Min Kedua", $expire);
		
		
		echo "Create dan Inisialisasi Cookie<br>";
		echo "Isi cookie user dengan: Sop Pak Min";
		
	?>
	<br>
	Link ke <a href="cookie2.php">Halaman ke-2</a>

</body>
</html>