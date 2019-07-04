<?php
$servername = localhost;
$username = 'root';
$password = "";

$con = musqli_connect($servername, $username, $password);

if(!$con)
{
	die("connection aborted" .mysqli_connect_error());
}


$sql = "CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";

if(mysqli_query($conn, $sql))
{
	echo "Database created successfully";
}
else
{
	echo "Error creatinng database:" .mysqli_error($conn);
}

mysqli_close($conn);
?>