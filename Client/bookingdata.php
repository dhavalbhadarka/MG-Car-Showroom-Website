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
$color = $_POST['color'];
$state = $_POST['state'];
$city = $_POST['city'];
$dealer = $_POST['dealer'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];

$query = "INSERT INTO booking (car, varient, fueltype, transmission, color, state, city, dealer, name, email, phone, address) VALUES ('$car','$varient','$fueltype','$transmission','$color','$state','$city','$dealer','$name','$email','$phone','$address')";
	
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

