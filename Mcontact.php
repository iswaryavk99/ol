
<?php
//connection to database...

$servername ="localhost";
$username ="root";
$password ="";
$database ="old";

$connection =mysqli_connect($servername, $username, $password, $database);

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];


$insert = "INSERT INTO contact    VALUES('','$name','$email','$message')";

$fire =mysqli_query($connection,$insert);

if ($fire) {

	header('location:Mhome.html');
}
else{
	echo "Data not inserted";
}
?>