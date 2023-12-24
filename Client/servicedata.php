<?php
$con = mysqli_connect("localhost", "root", "", "user");
if($con == false)
{
	die("ERROR: Cound not connect".mysqli_connect_error());
}

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$carno = $_POST['carno'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$pincode = $_POST['pincode'];
$date = $_POST['date'];
$time = $_POST['time'];


$query = "INSERT INTO service (name, email, phone, carno, address, city, state, pincode, date, time) VALUES ('$name','$email','$phone','$carno', '$address', '$city', '$state', '$pincode', '$date', '$time')";
	
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

