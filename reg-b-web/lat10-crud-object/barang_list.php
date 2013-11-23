<html>
<head><title>DAFTAR BARANG</title></head>
<body>
<?php 
	include 'BarangDao.php';
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
			$barangDao = new BarangDao();	
			//TAMPIL DATA
			//$listBarang = $barangDao->findAllById('008');
			$listBarang = $barangDao->findAll();	
			$panjang = count($listBarang);
			$pencacah=0;
			while ($pencacah<$panjang){
				if ($pencacah % 2 == 0 ){	
					echo '<tr>';
				} else {					
					echo '<tr bgcolor="GRAY">';
				}
				
				$itemBarang = new Barang();
				$itemBarang = $listBarang[$pencacah];
				
				echo '<td>'. $itemBarang->kodeBarang. '</td>';				
				echo '<td>'. $itemBarang->namaBarang. '</td>';				
				echo '<td>'. $itemBarang->tipe. '</td>';				
				echo '<td>'. $itemBarang->hargaBeli . '</td>';				
				echo '<td>'. $itemBarang->hargaJual . '</td>';				
				echo '<td>'. $itemBarang->stok. '</td>';				
				echo '<td>'. '<a href="barang_detil.php">Tambah</a>' . '</td>';				
				echo '<td>'. '<a href="barang_detil.php?kodebarang=' .$itemBarang->kodeBarang. '">Edit</a>' . '</td>';				
				echo '<td>'. '<a href="barang_proc.php?isEdit=3&teks_pcode=' .$itemBarang->kodeBarang. '">Hapus</a>' . '</td>';				
				echo '</tr>';

				$pencacah++;
			}
			
		?>
	</table>
	
	<?php 
	
	?>
</body>
</html>