<html>
<head><title>Form Barang Detail</title></head>
<body>
	<form action="barang_tambah_proc.php" method="get">
		<table>
			<tr>
				<td>Kode Barang: </td>
				<td><input type="text" name="teks_pcode"></td>
			</tr>
			<tr>
				<td>Nama Barang: </td>
				<td><input type="text" name="teks_pname"></td>
			</tr>
			<tr>
				<td>Tipe:</td>
				<td><input type="text" name="teks_tipe"></td>
			</tr>
			<tr>
				<td>Harga Beli:</td>
				<td><input type="text" name="teks_hrg_beli"></td>
			</tr>
			<tr>
				<td>Harga Jual:</td>
				<td><input type="text" name="teks_hrg_jual"></td>
			</tr>
			<tr>
				<td>Stok:</td>
				<td><input type="text" name="teks_stok"></td>
			</tr>
			<tr>
				<td colspan="2" align="right"><input type="submit" value="Submit"></td>
			</tr>
		</table>
		
	</form>
</body>
</html>