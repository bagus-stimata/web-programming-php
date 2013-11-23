<html>
	<head>
	</head>	
	<body>

	<h1 align="center">IF KE SATU</h1><br>

	<?php
		//Grade Nilai 
		//Variable yang berisi nilai dimana nilai ini yang akan dianalisa
		//Dengan menggunakan kondisi
		$nilai = 20;
		if ($nilai==20){
			echo  "Benar 20";
		} else {
			echo "Salah, bukan 20";
		}
		echo "<br>===================<br>";	
		
		$nilai=81;
		
		if ($nilai>80) {
			echo "Nilai A";
		} else if($nilai>75){
			echo "nilai B";
		}else if($nilai>60){
			echo "nilai C";
		}else if($nilai>40){
			echo "nilai D";
		}else {
			echo "Nilai E";
		}
		
		echo "<br>===================<br>";	
		
		if (10 % 2==0){
			echo "Genap";	
		} else {
			echo "Ganjil";
		}
		
		
	?>
	
	<table border="1">
		<thead align="center">
		<tr bgcolor="GREY">
			<td>NIM</td>
			<td>NAMA</td>
		</tr>
				</thead>
		<tr bgcolor="red">
			<td>001</td>
			<td>Bagus Winarno</td>
		</tr>
		
			<?php
		
				for ($i=0; $i<10; $i++){			

					if ($i % 2==0){
						echo '<tr bgcolor="red">';							
					} else {
						echo '<tr bgcolor="yellow">';
					}											
					echo "<td>" . $i . "</td>";
					echo "<td>";
						if ($i % 2==0){
							echo "Genap";	
						} else {
							echo "Ganjil";
						}											
					echo "</td>";
					echo "</tr>";
				}			
			?>

			<?php
		
				for ($i=0; $i<10; $i++){			

					if ($i % 2==0){
						echo '<tr bgcolor="red">';							
						echo "<td>" . $i . "</td>";
						echo "<td>";
							echo "Genap";	
						echo "</td>";
						echo "</tr>";
						
					} else {
						echo '<tr bgcolor="yellow">';
						echo "<td>" . $i . "</td>";
						echo "<td>";
							echo "Ganjil";						
						echo "</td>";
						echo "</tr>";
					}											
				}
			
			?>
			
	</table>
	

	</body>
</html>
