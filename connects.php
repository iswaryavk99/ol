
<?php
//connection to database...

$servername ="localhost";
$username ="root";
$password ="";
$database ="old";

$conn =mysqli_connect($servername, $username, $password, $database);

if(!$conn){
	echo "connection failed";
}


?>