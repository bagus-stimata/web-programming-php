<?php 

	$dbconn = mysql_connect('localhost', 'root', 'hacker') or die("<br>Gagal Koneksi</br>");	
	mysql_select_db('db_order', $dbconn) or die("<br>Database tidak ada</br>");	
	
?>
<?php 
//Koneksi dengan PostgreSQL
/*
	$dbconn = pg_connect("dbname=mary");
	//connect to a database named "mary"
	
	$dbconn2 = pg_connect("host=localhost port=5432 dbname=mary");
	// connect to a database named "mary" on "localhost" at port "5432"
	
	$dbconn3 = pg_connect("host=sheep port=5432 dbname=mary user=lamb password=foo");
	//connect to a database named "mary" on the host "sheep" with a username and password
	
	$conn_string = "host=sheep port=5432 dbname=test user=lamb password=bar";
	$dbconn4 = pg_connect($conn_string);
	//connect to a database named "test" on the host "sheep" with a username and password
	
	$dbconn5 = pg_connect("host=localhost options='--client_encoding=UTF8'");
	//connect to a database on "localhost" and set the command line parameter which tells the encoding is in UTF-8
 * 
 */
?>
<?php 
//Koneksi dengan mssql server
/*
	$myServer = "localhost";
	$myUser = "your_name";
	$myPass = "your_password";
	$myDB = "examples";
	
	//connection to the database
	$dbhandle = mssql_connect($myServer, $myUser, $myPass)
	  or die("Couldn't connect to SQL Server on $myServer");
	
	//select a database to work with
	$selected = mssql_select_db($myDB, $dbhandle)
	  or die("Couldn't open database $myDB");
	
	//declare the SQL statement that will query the database
	$query = "SELECT id, name, year ";
	$query .= "FROM cars ";
	$query .= "WHERE name='BMW'";
	
	//execute the SQL query and return records
	$result = mssql_query($query);
	
	$numRows = mssql_num_rows($result);
	echo "<h1>" . $numRows . " Row" . ($numRows == 1 ? "" : "s") . " Returned </h1>";
	
	//display the results
	while($row = mssql_fetch_array($result))
	{
	  echo "<li>" . $row["id"] . $row["name"] . $row["year"] . "</li>";
	}
	//close the connection
	mssql_close($dbhandle);
*/	

?>