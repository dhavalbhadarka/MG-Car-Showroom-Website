<?php
$con = mysqli_connect("localhost", "root", "", "user");


if (isset($_POST['submit'])) 
{
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
	header("Location:Service_Booking_show.php");	
}
else
{
	echo '<script>alert("Record Not Inserted")</script>';

}
}

?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;

}

input[type=submit]:hover {
  background-color: #45a049;

}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  width: 50%;
  margin-left: 25%;
}


.b {
  text-align: center;
  color: red;
}


body{

  background-image: url("final.jpg");
}



</style>
</head>
<body>



<div class="container">
  <form  method="POST">

    <h3 class="b">Service Booking Form</h3>
    <br></br>

    <label for="">Owner Name : </label>
    <input type="text" name="name" required>
    <br></br>

     <label for="">Email : </label>
    <input type="text" name="email" required>
    <br></br>


    <label for="">Phone : </label>
    <input type="text" name="phone" required>
    <br></br>

    <label for="">Car No : </label>
    <input type="text" name="carno" placeholder="GJ-##-##-####" required>
    <br></br>

    <label for="">Address : </label>
    <textarea  name="address" placeholder="Write address here.." style="height:200px" required></textarea>
    <br></br>

    <label for="">City : </label>
    <input type="text" name="city" required>
    <br></br>

    <label for="">State : </label>
    <input type="text" name="state" required>
    <br></br>

    <label for="">Pin-Code : </label>
    <input type="text" name="pincode" required>
    <br></br>

   <label for="">Preffered Date : </label>
    <input type="text" name="date" placeholder="yyyy/mm/dd" required>
    <br></br>

     <label for="">Select Time Slot : </label>
  <select name="time" required>
    <option selected disabled>-- Select Time Slots --</option>
    <option value="12:00-14:00">12:00-14:00</option>
    <option value="14:00-16:00">14:00-16:00</option>
    <option value="16:00-18:00">16:00-18:00</option>
  </select>
  <br></br>

    <input type="submit" value="Submit" name="submit" align="right">


 

</div>
</form>

</body>
</html>


