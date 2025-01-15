
<?php
//connection to database...

$servername ="localhost";
$username ="root";
$password ="";
$database ="old";

$connection =mysqli_connect($servername, $username, $password, $database);

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$image = $_POST['image'];

$insert = "INSERT INTO register VALUES('','$name','$$email',$password,'$cpassword','$image')";

$fire =mysqli_query($connection,$insert);

if ($fire) {

	echo "Data inserted successfully";
}
else{
	echo "Data not inserted";
}
?>








