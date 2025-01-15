<?php
//connection to database...

$servername ="localhost";
$username ="root";
$password ="";
$database ="";

$connection =mysqli_connect($servername, $username, $password, $database);

$username = $_POST['username'];
$password = $_POST['password'];

$insert = "INSERT INTO YT VALUES('','','')";

$fire =mysqli_query($connection, $insert);

if ($fire) {
	# code...
	echo "Data inserted successfully";
}
else{
	echo "Data not inserted";
}
?>