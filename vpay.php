<?php
//connection to database...

$servername ="localhost";
$username ="root";
$password ="";
$database ="old";

$connection =mysqli_connect($servername, $username, $password, $database);

$name = $_POST['name'];
$payments = $_POST['payments'];
$card = $_POST['card'];
$cvc = $_POST['cvc'];
$EXP_Month = $_POST['EXP_Month'];
$EXP_Year = $_POST['EXP_Year'];
$dates = $_POST['dates'];
$months = $_POST['months'];
$years = $_POST['years'];
$payment = $_POST['payment'];    




$insert = "INSERT INTO view_payment VALUES('','$name', '$payments', '$card', '$cvc','$EXP_Month', '$EXP_Year', '$dates', '$months', '$years','$payment')";

$fire =mysqli_query($connection, $insert);

if($fire){
  
	echo "Data ok inserted";
	header('location:frame4.php?id=<?php echo$row["id"]; ?>');
  }
else{
	echo "Data not inserted";
}
     
?>