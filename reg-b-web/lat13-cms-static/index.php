<!DOCTYPE html>
<html>
<head><title>Menu Utama</title></head>
<body>
		<table align="center" width="100%" height="30%">
			<tr colspan="1" align="center">
				<td><?php include 'header-footer/header.php'; ?></td>
			</tr>
		</table>
		
		<table width="100%" height="400" align="center" >
			<tr width="100%" height="100%">
				<td width="10%" align="left" bgcolor="GRAY" valign="top">
					<?php 
						//Selanjutnya akan di load dari database dengan menggunakan perulangan
					?>
					<a href="index.php?modul=home">HOME</a><br>
					<a href="index.php?modul=training-it">Training IT Malang</a><br>
					<a href="index.php?modul=google">www.google.com</a><br>
					<a href="index.php?modul=w3school">www.w3school.com</a>
				</td>
				<td align="center" >
					<?php 
						$modul=$_GET['modul'];
						
						//Yang selanjutnya digantikan dengan mengambil nilai dari
						$link= 'content.php';
						
						if ($modul=="home") {
							include $link;
						} else if ($modul=="training-it") {
							echo '<iframe width="100%" height="100%" src="http://training-it-malang.blogspot.com"></iframe>';
						} else if ($modul=="google"){
							echo '<iframe width="100%" height="100%" src="https://www.google.com"></iframe>';														
						} else if ($modul=="w3school"){
							echo '<iframe width="100%" height="100%" src="http://www.w3schools.com"></iframe>';						
						} else {
							include $link;							
						}
						
					?>
				</td>
			<tr>		
		</table>
		
		<table align="center" width="100%">
			<tr colspan="1" align="center">
				<td><?php include 'header-footer/footer.php'; ?></td>
			</tr>
		</table>
		
</body>
</html>
