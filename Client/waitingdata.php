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
$carname = $_POST['carname'];
$varient = $_POST['varient'];
$date = $_POST['date'];



$query = "INSERT INTO waiting (fname, lname, email, phone, carname, varient, date) VALUES ('$fname', '$lname', '$email','$phone','$carname', '$varient', '$date')";
	
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

