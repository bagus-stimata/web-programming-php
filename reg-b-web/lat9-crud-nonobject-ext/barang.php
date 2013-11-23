<html>
<head><title>Form Barang Detail</title></head>
<body>

<?php 
	include 'koneksi.php';
	
			//http://localhost/reg-b-web/lat9-crud-nonobject-ext/barang.php --> saat tambah
			//http://localhost/reg-b-web/lat9-crud-nonobject-ext/barang.php?kodebarang=002 -->saat edit
			//Maka jika tidak ada parameter->variable $kodeBarang tidak bernilai apa2
			//Sehingga hasil query adalah kosong
			$kodeBarang = $_GET['kodebarang'];
			
			$query = "SELECT * FROM tb_produk WHERE pcode='". $kodeBarang ."'";
			//$query = "SELECT * FROM tb_produk WHERE pcode='001'";
			$result = mysql_query($query, $dbconn) or die('<br> Kesalahan Query : '.$query);
			
			while ($item = mysql_fetch_assoc($result)){
				$pcode = trim($item["pcode"]," ");				
				$pname = $item["pname"];				
				$tipe =  $item["tipe"];				
				$hrg_jual = $item["hrg_jual"];				
				$hrg_beli = $item["hrg_beli"];				
				$stok = $item["stok"];				
			}
			
			if ($pcode!=""){
				$edit=1;
			} else {
				$edit=2;
			}
?>

	<form action="barang_proc.php" method="get">
	
		<input type="text"  value="<?php echo $edit ?>" name="isEdit">
		
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