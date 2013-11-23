<?php 
	$dbconn = mysql_connect('localhost', 'root', 'hacker');
	if (! $dbconn) {
		echo "<br>Gagal Koneksi</br>";		
	}
	
	mysql_select_db('db_order', $dbconn) or die("<br>Database tidak ada</br>");	
	
?>