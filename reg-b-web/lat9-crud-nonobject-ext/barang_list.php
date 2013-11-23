<html>
<head><title>DAFTAR BARANG</title></head>
<body>
<?php 
	include 'koneksi.php';
?>
	<table>
		<tr bgcolor="BLUE">
			<th>Kode</th>
			<th>Nama Barang</th>
			<th>Tipe</th>
			<th>Hrg Beli</th>
			<th>Hrg Jual</th>
			<th>Stok</th>
			<th></th>
			<th></th>
			<th></th>
		</tr>
		<?php 
			$query = "SELECT * FROM tb_produk";
			$result = mysql_query($query, $dbconn) or die('<br> Kesalahan Query : '.$query);
			
			$pencacah=0;
			while ($item = mysql_fetch_assoc($result)){
				if ($pencacah % 2 == 0 ){	
					echo '<tr>';
				} else {					
					echo '<tr bgcolor="GRAY">';
				}
				$pencacah++;
				
				echo '<td>'. $item["pcode"]. '</td>';				
				echo '<td>'. $item["pname"]. '</td>';				
				echo '<td>'. $item["tipe"]. '</td>';				
				echo '<td>'. $item["hrg_jual"]. '</td>';				
				echo '<td>'. $item["hrg_beli"]. '</td>';				
				echo '<td>'. $item["stok"]. '</td>';	
							
				echo '<td>'. '<a href="barang.php">Tambah</a>' . '</td>';				
				echo '<td>'. '<a href="barang.php?kodebarang=' . $item["pcode"] . '">Edit</a>' . '</td>';				
				echo '<td>'. '<a href="barang_proc.php?isEdit=3&teks_pcode=' . $item["pcode"] . '">Hapus</a>' . '</td>';				
				
				echo '</tr>';
			}
			
		?>
	</table>
	
	<?php 
	
	?>
</body>
</html>