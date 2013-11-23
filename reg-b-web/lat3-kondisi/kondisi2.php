<html>
	<head>
	</head>	
	<body>

	<h1 align="center">KONDISI DUA</h1><br>

	<table border="1">
		<thead align="center">
		<tr bgcolor="GREY">
			<td>NIM</td>
			<td>NAMA</td>
		</tr>
				</thead>
		<?php
		
			for ($i=0; $i<10; $i++){			
				if ($i % 2 ==1){
					echo '<tr bgcolor="YELLOW">';
					
				} else {
					echo "<tr>";					
				}				


				echo "<td>" . $i . "</td>";
				echo "<td>" . "Nomor Ke-" .  $i . "</td>";
				echo "</tr>";
			}
			
		?>
	</table>
	
	</body>
</html>
