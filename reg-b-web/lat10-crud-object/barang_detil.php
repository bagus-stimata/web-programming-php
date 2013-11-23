<html>
<head><title>Form Barang Detail</title></head>
<body>

<?php 
	include 'BarangDao.php';
	
			$kodeBarang = $_GET['kodebarang'];

			$barangDao = new BarangDao();	
			//TAMPIL DATA
			$listBarang = $barangDao->findAllById($kodeBarang);
			$itemBarang = new Barang();
			$itemBarang = $listBarang[0];

			$pcode = trim($itemBarang->kodeBarang," ");				
			$pname = $itemBarang->namaBarang;				
			$tipe =  $itemBarang->tipe;				
			$hrg_jual = $itemBarang->hargaJual;				
			$hrg_beli = $itemBarang->hargaBeli;				
			$stok = $itemBarang->stok;				
			
			if ($kodeBarang!=""){
				$edit=1;
			} else {
				$edit=2;
			}
?>

	<form action="barang_proc.php" method="get">
		<input type="text" value="<?php echo $edit ?>" name="isEdit">
		
		<table>
			<tr>
				<td>Kode Barang: </td>
				<td><input type="text" name="teks_pcode" value="<?php echo $pcode ?>"></td>
			</tr>
			<tr>
				<td>Nama Barang: </td>
				<td><input type="text" name="teks_pname" value="<?php echo $pname ?>"></td>
			</tr>
			<tr>
				<td>Tipe:</td>
				<td><input type="text" name="teks_tipe" value="<?php echo $tipe ?>"></td>
			</tr>
			<tr>
				<td>Harga Beli:</td>
				<td><input type="text" name="teks_hrg_beli" value="<?php echo $hrg_beli ?>"></td>
			</tr>
			<tr>
				<td>Harga Jual:</td>
				<td><input type="text" name="teks_hrg_jual" value="<?php echo $hrg_jual ?>"></td>
			</tr>
			<tr>
				<td>Stok:</td>
				<td><input type="text" name="teks_stok" value="<?php echo $stok ?>"></td>
			</tr>
			<tr>
				<td colspan="2" align="right"><input type="submit" value="Submit"></td>
			</tr>
		</table>
		
	</form>
</body>
</html>