
<?php
//connection to database...

$servername ="localhost";
$username ="root";
$password ="";
$database ="old";

$connection =mysqli_connect($servername, $username, $password, $database);

$name = $_POST['name'];
$fathername = $_POST['fathername'];
$mothername = $_POST['mothername'];
$Brothers = $_POST['Brothers'];
$Systers = $_POST['Systers'];
$Fstatus = $_POST['Fstatus'];
$Homeat = $_POST['Homeat'];
$Home = $_POST['Home'];
$HouseOwner = $_POST['HouseOwner'];
$Marital = $_POST['Marital'];
$Physical_challenged = $_POST['Physical_challenged'];
$height = $_POST['height'];
$age = $_POST['age'];
$Bdate = $_POST['Bdate'];
$Btime = $_POST['Btime'];
$Bplace = $_POST['Bplace'];
$zodic = $_POST['zodic'];
$star = $_POST['star'];
$diagonal = $_POST['diagonal'];
$yogam = $_POST['yogam'];
$Dosh = $_POST['Dosh'];
$education = $_POST['education'];
$workLocation = $_POST['workLocation'];
$livingPlace = $_POST['livingPlace'];
$annualIncome = $_POST['annualIncome'];
$jobType = $_POST['jobType'];
$position = $_POST['position'];
$img = $_POST['img'];
$cast = $_POST['cast'];
$religion = $_POST['religion'];
$address = $_POST['address'];


$insert = "INSERT INTO services VALUES('','$name','$fathername','$mothername','$Brothers','$Systers','$Fstatus','$Homeat','$Home','$HouseOwner','$Marital','$Physical_challenged','$height','$age','$Bdate','$Btime','$Bplace','$zodic','$star','$diagonal','$yogam','$Dosh','$education','$workLocation','$livingPlace','$annualIncome','$jobType','$position','$img','$cast','$religion','$address')";

$fire =mysqli_query($connection,$insert);

if ($fire) {
	
	header('location:Mpayment.php');
}
else{
	echo "Data not inserted";
}
?>