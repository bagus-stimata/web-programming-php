<html>
<head><title>Lat Koneksi</title></head>
<body>
	<?php 
		echo "<h1>Latihan Koneksi</h1>";
		//1. Koneksi ke server
		//2. Memilih database 
		//Statement Query
		//Select Data, Insert Date, Edit Data, Hapus Data
		include 'config/koneksi/koneksi.php';
		//Ini tidak bisa
		//include 'http://localhost/reg-b-web/database-basic/config/koneksi.php';
		
		$strQuery = "SELECT pcode, pname, tipe, hrg_beli, hrg_jual, stok FROM tb_produk";
		
		//2. Jalankan Query
		$resultSet = mysql_query($strQuery , $dbConn) or die('<br> Kesalahan Query : ');
		//$resultSet = mysql_query("SELECT pcode, pname, tipe, hrg_beli, hrg_jual, stok FROM tb_produk" , $dbConn) or die('<br> Kesalahan Query : ');
		
		while ($row = mysql_fetch_assoc($resultSet)) {
		    echo $row["pcode"];	  
			echo $row["pname"];	  		      
		    echo "<br>";
		}
		
		
		echo "<br>Command Completed<br>";
	?>
	
	<table border="1">
		<tr>
			<th>Kode</th>
			<th>Nama</th>
			<th>Tipe</th>
		</tr>
		
		<?php 
		$resultSet = mysql_query($strQuery , $dbConn) or die('<br> Kesalahan Query : ');
		while ($row = mysql_fetch_assoc($resultSet)) {
		?>
		<tr>
			<td><?php echo $row["pcode"]; ?></td>
			<td><?php echo $row["pname"]; ?></td>
			<td><?php echo $row["tipe"]; ?></td>
		</tr>
		<?php 
		}	
		?>
		
		
	</table>		
</body>
</html>
