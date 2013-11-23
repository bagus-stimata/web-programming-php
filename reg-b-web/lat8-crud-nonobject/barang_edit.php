<html>
<head><title>Form Barang Detail</title></head>
<body>

<?php 
	//1. Bikin koneksi
	include 'koneksi.php';
			//2. Mengambil nilai parameter kodebarang yaanga ada di address bar
			//http://localhost/reg-b-web/lat8-crud-nonobject/barang_edit.php?kodebarang=002
			$kodeBarang = $_GET['kodebarang'];
			
			$query = "SELECT * FROM tb_produk WHERE pcode='". $kodeBarang ."'";
			//$query = "SELECT * FROM tb_produk WHERE pcode='002'";
			
			//$query = "SELECT * FROM tb_produk WHERE pcode='001'";
			$result = mysql_query($query, $dbconn) or die('<br> Kesalahan Query : '.$query);
			
			while ($item = mysql_fetch_assoc($result)){
				$pcode = $item["pcode"];				
				$pname = $item["pname"];				
				$tipe =  $item["tipe"];				
				$hrg_jual = $item["hrg_jual"];				
				$hrg_beli = $item["hrg_beli"];				
				$stok = $item["stok"];				
			}
			
	
?>

	<form action="barang_edit_proc.php" method="get">
		<table>
			<tr>
				<td>Kode Barang: </td>
				<td><input type="text" disabled="disabled" readonly="readonly"  name="teks_pcode" value="<?php echo $pcode ?>"></td>
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
				<td>Stokcoba:</td>
				<td><input type="text" name="teks_stok" value="diisi manual"></td>
			</tr>
			<tr>
				<td colspan="2" align="right"><input type="submit" value="Submit"></td>
			</tr>
		</table>
		
	</form>
</body>
</html>