<!DOCTYPE html>
<html>
<head><title>Menu Utama</title></head>
<body>

<?php 
	include 'MenuDao.php';
	//Buat Instan object
	$menuDao = new MenuDao();	
	
?>

		<table align="center" width="100%" height="30%">
			<tr colspan="1" align="center">
				<td><?php include 'header-footer/header.php'; ?></td>
			</tr>
		</table>
		
		<table width="100%" height="400" align="center" >
			<tr width="100%" height="100%">
				<td width="15	%" align="left" bgcolor="GRAY" valign="top">
					<?php 
						//Selanjutnya akan di load dari database dengan menggunakan perulangan
						
						$listMenu = $menuDao->findAll();
						$panjang = count($listMenu);						
						for ($i=0; $i<$panjang; $i++){
							$item = new Menu();
							$item= $listMenu[$i];
							
							echo '<a href="index.php?modul='.$item->idMenu.'">' .$item->judulMenu. '</a><br>';
							
							//echo $item->idMenu; echo " : ";
							//echo $item->judulMenu; echo " : ";
							//echo $item->link; echo " : ";
							//echo "<br>";	
						}						
					
					?>
				</td>
				<td align="center" >
					<?php 
						$modul=$_GET['modul'];					
						$listMenu = $menuDao->findAllById($modul);
						$item = new Menu();
						$item= $listMenu[0];
						
						
						
						//Yang selanjutnya digantikan dengan mengambil nilai dari
						$link= $item->link;
						echo '<iframe width="100%" height="100%" src="'. $link . '"></iframe>';		
										
						/* SUDAH TIDAK DI PAKE LAGI
						if ($modul=="home") {
							include $link;
						} else if ($modul=="training-it") {
							echo '<iframe width="100%" height="100%" src="http://training-it-malang.blogspot.com"></iframe>';
						} else if ($modul=="google"){
							echo '<iframe width="100%" height="100%" src="https://www.google.com"></iframe>';														
						} else if ($modul=="w3school"){
							echo '<iframe width="100%" height="100%" src="http://www.w3schools.com"></iframe>';						
						} else {
							echo '<iframe width="100%" height="100%" src="'. $link . '"></iframe>';						
						}
						*/
						
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
