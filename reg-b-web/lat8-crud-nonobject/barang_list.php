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
				
				$manual = "123";
				
				echo '<td>'. '<a href="barang_tambah.php?">Tambah</a>' . '</td>';				
				echo '<td>'. '<a href="barang_edit.php?kodebarang=' . $item["pcode"] . '">Edit</a>' . '</td>';				
				echo '<td>'. '<a href="barang_hapus_proc.php?kodebarang=' . $item["pcode"] . '">Hapus</a>' . '</td>';				
				echo '<td><a href="barang_edit.php?kodebarang=' .$item["pcode"]. ' ">Cuma Melempar Parameter</a></td>';
				//echo '<td><a href="http://www.yahoo.co.id">Menuju Ke Yahoo Beneran</a></td>';
				
				echo '</tr>';
			}
			
		?>
	</table>
	
	<?php 
	
	?>
</body>
</html>