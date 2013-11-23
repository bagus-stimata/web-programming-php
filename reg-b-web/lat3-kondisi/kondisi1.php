<html>
	<head>
	</head>	
	<body>

	<h1 align="center">KONDISI DUA</h1><br>

	<?php
		$nilai = 5;
		if ($nilai<10) {
			echo "Kurang dari lima";
		}
		echo "<br>";
		
		echo "Grade Nilai : ";
		$nilai = 4;
		if ($nilai>8) {
			echo "Grade A";
		} else if ($nilai>7){
			echo "Grade B";
		} else if ($nilai>6) {
			echo "Grade C";
		} else {
			echo "Grade D";
		}
		
	?>

	</body>
</html>
