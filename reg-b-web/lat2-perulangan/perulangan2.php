<html>
	<head>
	</head>	
	<body>
	<h1 align="center">PERULANGAN DUA</h1><br>

	<table border="1">
		<thead align="center">
		<tr bgcolor="GREY">
			<td>NIM</td>
			<td>NAMA</td>
		</tr>
				</thead>
		<tr>
			<td>001</td>
			<td>Bagus Winarno</td>
		</tr>
			<?php
		
				for ($i=0; $i<10; $i++){			
					echo "<tr>";
					echo "<td>" . $i . "</td>";
					echo "<td>" . "Nomor Ke-" .  $i . "</td>";
					echo "</tr>";
				}
			
			?>
	</table>

	</body>
</html>
