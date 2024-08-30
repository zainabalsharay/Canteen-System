<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$sql = "CREATE DATABASE canteen" ;
if (mysqli_query($conn, $sql))
{
echo "Database created successfully" ;
} 
else
{
echo "Error creating database: " . mysqli_error($conn);
}


if(mysqli_select_db($conn,"canteen"))
echo "<br>Database selected<br><br>";
else
echo"<br>Database not selected<br><br>";


$sql = "CREATE TABLE items ( id INT(6), name VARCHAR(30),photo VARCHAR(100),price int(4),type tinyint(1))";

if (mysqli_query($conn, $sql)){
	echo "table items created successfully";
	}
	else {
		echo "Error Creating Table: ".mysqLI_error($conn);
		}

mysqli_close($conn);
?>