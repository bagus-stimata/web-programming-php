<?php 
	include 'Menu.php';
	include 'koneksi.php';
	
	class MenuDao{	
				
		function findAll(){
			include 'koneksi.php';
			//Test Tampilkan data
			//1. Buat Statement Query
			$query = "SELECT id_menu, title, link FROM tb_menu";
			//2. Jalankan Query
			$resultSet = mysql_query($query, $dbconn) or die('<br> Kesalahan Query : '.$query);						
			while ($item = mysql_fetch_assoc($resultSet)) {
				//Memasukkan ke dalam array Object
				$menu = new Menu();
				$menu->idMenu = $item["id_menu"];
				$menu->judulMenu = $item["title"];
				$menu->link = $item["link"];
				$arrMenu[] = $menu;		
			}						
			return $arrMenu;
		}
		
		function findAllById($id){
			include 'koneksi.php';
			//Test Tampilkan data
			//1. Buat Statement Query
			$query = "SELECT id_menu, title, link FROM tb_menu WHERE id_menu LIKE '%" .$id. "%'";
			//2. Jalankan Query
			$resultSet = mysql_query($query, $dbconn) or die('<br> Kesalahan Query : '.$query);			
			while ($item = mysql_fetch_assoc($resultSet)) {
				//Memasukkan ke dalam array Object
				$menu = new Menu();
				$menu->idMenu = $item["id_menu"];
				$menu->judulMenu = $item["title"];
				$menu->link = $item["link"];
				$arrMenu[] = $menu;		
			}						
			return $arrMenu;
									
		}
		function remove($object){
			include 'koneksi.php';
			$menu = new Menu();
			$menu = $object;
			$query = "DELETE FROM tb_menu WHERE id_menu='".$menu->idMenu."'"; 
			mysql_query($query, $dbconn) or die('<br> Kesalahan Query : '.$query);
			
		}
		function saveOrUpdate($object){
			include 'koneksi.php';
			$menu = new Menu();
			$menu = $object;
			//Jika $rows lebih dari 0 maka EDIT			
			$rows = $this->findAllById($menu->idMenu);
			if (count($rows)>0){
				$query = "UPDATE tb_menu SET title='" .$menu->judulMenu."', 
					link='" .$menu->link. "' 
					WHERE id_menu='".$menu->idMenu."'"; 						
			} else {
				//Tambah Data
				$query = "INSERT INTO tb_menu(id_menu, title, link) 
					values('". $menu->idMenu . "', '". $menu->judulMenu."','". $menu->link ."')";				
			}
			
			mysql_query($query, $dbconn) or die('<br> Kesalahan Query : '.$query);			
		}
		
	}
	
/*	
	//TEST DAO
	$menuDao = new MenuDao();	
	//TAMPIL DATA
	
	$listMenu = $menuDao->findAll();
	
	//$listBarang = $barangDao->findAll();	
	$panjang = count($listMenu);
	
	for ($i=0; $i<$panjang; $i++){
		$item = new Menu();
		$item= $listMenu[$i];
		
		echo $item->idMenu; echo " : ";
		echo $item->judulMenu; echo " : ";
		echo $item->link; echo " : ";
		echo "<br>";	
	}	
	
	echo "<br>completed";	
*/
	
?>
