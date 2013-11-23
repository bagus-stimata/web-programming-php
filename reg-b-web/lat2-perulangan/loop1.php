<html>
	<head>
	</head>	
	<body>
	<h1>Coba Header H2</h1><br>

	<?php
		//Ini sintax di C++
		/*
		for (int i=0; i<5; i++){
			
		}
		*/
		
		for ($i=0; $i<5; $i++){
			//echo "Perulangan ke-" . $i . "<br>";
			echo "Perulangan ke- $i <br>";
		}
		
		echo "<br>============================<br>";
		$init_value=0;
		while($init_value<0){
			echo "Perulangan ke- $init_value <br>";			
			//$init_value++;			
			//$init_value+=1;
			$init_value=$init_value+1;
		}
		
		echo "<br>============================<br>";
		$init_value=0;
		do{
			echo "Perulangan ke- $init_value <br>";			
			//$init_value++;			
			//$init_value+=1;
			$init_value=$init_value+1;
		}while($init_value<0)
		
	?>
	
	<table border="1">
		<thead>
		<tr>
			<td>NIM</td>
			<td>Nama</td>
		</tr>
		</thead>
		<?php 
			for ($i=0;$i<5; $i++) {				
				echo "<tr>";
					echo "<td>$i</td>";
					echo "<td>Ari Untung ke-$i</td>";
				echo "</tr>";
			}
		?>
	</table>

	</body>
</html>
