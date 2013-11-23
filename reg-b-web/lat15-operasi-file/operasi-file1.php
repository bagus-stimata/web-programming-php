<html>
<head><title>Latihan File</title></head>
<body>	
	<form action="">
		Nama File: <br>
		<input type="text" size="20" name="namaFile" value="<?php echo trim($_GET['namaFile'], " \t"); ?> "><br>
		Isi File: <br>
		<textarea rows="5" cols="40" name="isiFile"><?php echo 'abc' ?></textarea><br>
		<input type="submit" value="Submit Baca" name="cmdBaca">
		<input type="submit" value="Submit Tulis" name="cmdBaca">
	
	</form>
	<?php 	
		$button= $_GET['cmdBaca'];
		$filePath = $_GET['namaFile'];
		if (isset($button)){
			//1.Coba Buka File 
			$file=fopen($filePath,"x+") or die($fileIsExits=true);
			if ($fileIsExits==true){
				$file = fopen($filePath,"w+") or die($fileIsReadOnly=true);
			}
			if ($fileIsReadOnly==true){
				$file = fopen($filePath,"r") or die("<br>benar benar tidak bisa membuka file<br>");				
			}

			$isiFile="";
			if (isset($file)) {
				//Membaca file baris per baris sampai End Of File (EOF)
				while(!feof($file)){
					//Baca perkarakter
					//echo fgetc($file);
				  	//Baca per baris										
					$isiFile= $isiFile . fgets($file). "<br>";
				}				
				fclose($file);							
			}
			
			if ($button=="Submit Baca") {				
				echo "Menggunakan Tombol Untuk Membaca";
			} else if ($button=="Submit Tulis"){
				echo "Menggunakan Tombol Untuk Menulis";			
			}
			
			//Menutup file
		}
		
		
	?>
	
</body>
</html>