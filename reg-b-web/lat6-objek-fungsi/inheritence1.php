<html>
	<head>
	</head>	
	<body>

	<h1 align="center">KONSEP PEWARISAN</h1><br> 

	<?php
		include 'inheritence-burung.php';
		class Berkicau extends Burung{
			var $makanan;
			function setMakanan($varMakanan){
				$this->makanan = $varMakanan;
			}
			function getMakanan(){
				return $this->makanan;
			}
			
		}
		
	
		$burungKecil = new Berkicau();
		$burungKecil->setMakanan("Biji-bijian");		
		echo $burungKecil->getMakanan();
		
		echo "<br>";
		
		$burungKecil->setParuh("kecil Juga");
		echo  $burungKecil->getParuh();
		
		echo "<br>Mission Completed";
		
	?>
	
	

	</body>
</html>
