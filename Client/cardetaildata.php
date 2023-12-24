<?php
$con = mysqli_connect("localhost", "root", "", "user");
if($con == false)
{
	die("ERROR: Cound not connect".mysqli_connect_error());
}

$car = $_POST['car'];
$varient = $_POST['varient'];
$fueltype = $_POST['fueltype'];
$transmission = $_POST['transmission'];
$subject = $_POST['subject'];

$query = "INSERT INTO customer (car, varient, fueltype, transmission, subject) VALUES ('$car','$varient','$fueltype','$transmission','$subject')";
	
if(mysqli_query($con, $query))
{
	echo '<script>alert("Record Inserted Successfully")</script>';	
}
else
{
	echo '<script>alert("Record Not Inserted")</script>';

}
/*header("Location:cardetail.html");*/
mysqli_close($con); 
?>

