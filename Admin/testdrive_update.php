<?php
$con = mysqli_connect("localhost", "root", "", "user");

$id=$_GET['id'];

if (isset($_POST['submit'])) 
{
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


$query = "UPDATE `testdrive` SET `fname`='$fname',`lname`='$lname',`email`='$email',`phone`='$phone',`car`='$car',`varient`='$varient',`fueltype`='',`transmission`='$transmission',`color`='$color',`address`='$address',`city`='$city',`state`='$state',`pincode`='$pincode',`date`='$date',`time`='$time' WHERE id='$id'";
  
if(mysqli_query($con, $query))
{
  echo '<script>alert("Record Inserted Successfully")</script>';
  header("Location:testdrive_show.php");  
}
else
{
  echo '<script>alert("Record Not Inserted")</script>';

}
}
$query=mysqli_query($con,"SELECT * FROM testdrive WHERE id='$id'");
$data=mysqli_fetch_array($query);
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
  <form method="POST">

    <h3 class="b">Test Drive Booking Form</h3>
    <br></br>

    <label for="">First Name : </label>
    <input type="text" name="fname" required value="<?php echo $data['fname'];?>">
    <br></br>

    <label for="">Last Name : </label>
    <input type="text" name="lname" required value="<?php echo $data['lname'];?>">
    <br></br>

    <label for="">Email : </label>
    <input type="text" name="email" required value="<?php echo $data['email'];?>">
    <br></br>

    <label for="">Phone : </label>
    <input type="text" name="phone" required value="<?php echo $data['phone'];?>">
    <br></br>



    <label for="">Select Car : </label>
  <select name="car" required>
    <option selected disabled value="<?php echo $data['car'];?>">-- Select Car --</option>
    <option value="hector">Hector</option>
    <option value="hector plus 6 str">Hector Plus 6str</option>
    <option value="hector plus 7 str">Hector Plus 7str</option>
    <option value="zs ev 2021">ZS EV 2021</option>
    <option value="gloster">Gloster</option>
  </select>
  <br></br>


    <label for="">Select Varient : </label>
  <select name="varient" required>
    <option selected disabled value="<?php echo $data['varient'];?>">-- Select Varient --</option>
    <option value="sharp">Sharp</option>
    <option value="smart">Smart</option>
    <option value="super">Super</option>
    <option value="style">Style</option>
  </select>
  <br></br>


    <label for="">Select Fuel Type : </label>
  <select name="fueltype" required>
    <option selected disabled value="<?php echo $data['fueltype'];?>">-- Select Fuel Type --</option>
    <option value="petrol">Petrol</option>
    <option value="diesel">Diesel</option>
    <option value="electric">Electric</option>
  </select>
  <br></br>



    <label for="">Select Trasmission : </label>
  <select name="transmission" required>
    <option selected disabled value="<?php echo $data['transmission'];?>">-- Select Transmission --</option>
    <option value="automatic">Automatic</option>
    <option value="manual">Manual</option>
    <option value="cvt">CVT</option>
  </select>
  <br></br>



   <label for="">Select Car Color : </label>
  <select name="color" required>
    <option selected disabled value="<?php echo $data['color'];?>">-- Select Car Color --</option>
    <option value="white">White</option>
    <option value="grey">Grey</option>
    <option value="black">Black</option>
    <option value="red">Red</option>
  </select>
  <br></br>
</div>



<div class="container">
 <h3 class="b">Location Of Test-Drive</h3>
  <br></br>

    <label for="">Address : </label>
    <textarea  name="address" placeholder="Write address here.." style="height:200px" required value="<?php echo $data['address'];?>"></textarea>

    <label for="">City : </label>
    <input type="text" name="city" required value="<?php echo $data['city'];?>">
    <br></br>

    <label for="">State : </label>
    <input type="text" name="state" required value="<?php echo $data['state'];?>">
    <br></br>

    <label for="">Pin-Code : </label>
    <input type="text" name="pincode" required value="<?php echo $data['pincode'];?>">
    <br></br>

</div>


<div class="container">
  
  <h3 class="b">Preffered Date & Time Slots</h3>
   <br></br>


   <label for="">Preffered Date : </label>
    <input type="text" name="date" placeholder="yyyy/mm/dd" required value="<?php echo $data['date'];?>">
    <br></br>

     <label for="">Select Time Slot : </label>
  <select name="time" required>
    <option selected disabled value="<?php echo $data['time'];?>">-- Select Time Slots --</option>
    <option value="12:00-14:00">12:00-14:00</option>
    <option value="14:00-16:00">14:00-16:00</option>
    <option value="16:00-18:00">16:00-18:00</option>
  </select>
  <br></br>

    <input type="submit" value="Update" name="submit" align="right">


 

</div>
</form>

</body>
</html>
