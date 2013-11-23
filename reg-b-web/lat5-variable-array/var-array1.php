<html>
	<head>
	</head>	
	<body>

	<h1 align="center">VARIABLE DAN ARRAY</h1><br>

	<?php
		$var_mahasiswa = array("Bari", "Edi", "Samit", "Mahasiswa tambahan");
		echo $var_mahasiswa[0] . "<br>";
		echo $var_mahasiswa[1] . "<br>";
		echo $var_mahasiswa[2] . "<br>";
		
		echo "=====================<br>";
		$var_mahasiswa2[] = "Andri";		
		$var_mahasiswa2[] = "Adeknya";		
		$var_mahasiswa2[1] = "Kakaknya";		

		echo $var_mahasiswa2[0] . "<br>";
		echo $var_mahasiswa2[1] . "<br>";
		echo $var_mahasiswa2[2] . "<br>";//Gak bakal muncul
		
		echo "=====================<br>";
		
		$var_mhs2 = array("Bari"=>20, "Edi"=>30, "Samit"=>10);
		echo $var_mhs2["Bari"] . "<br>";
		echo $var_mhs2["Edi"] . "<br>";
		echo $var_mhs2["Samit"] . "<br>";
		
		echo "=====================<br>";
		echo "Panjang array:" . count($var_mahasiswa) . " <br>";
		//Menampilkan dengan for
		for ($i=0;$i<count($var_mahasiswa); $i++){
			echo $var_mahasiswa[$i] . "<br>";
		}
		
		
	?>
	
	

	</body>
</html>
