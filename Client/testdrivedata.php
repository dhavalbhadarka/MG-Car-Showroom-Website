<?php
$con = mysqli_connect("localhost", "root", "", "user");
if($con == false)
{
	die("ERROR: Cound not connect".mysqli_connect_error());
}

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$car = $_POST['car'];
$varient = $_POST['varient'];
$fueltype = $_POST['fueltype'];
$transmission = $_POST['transmission'];
$color = $_POST['color'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$pincode = $_POST['pincode'];
$date = $_POST['date'];
$time = $_POST['time'];


$query = "INSERT INTO testdrive (fname, lname, email, phone, car, varient, fueltype, transmission, color, address, city, state, pincode, date, time) VALUES ('$fname','$lname','$email','$phone','$car','$varient','$fueltype','$transmission','$color', '$address', '$city', '$state', '$pincode', '$date', '$time')";
	
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

