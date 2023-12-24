<?php
$con = mysqli_connect("localhost", "root", "", "user");

$id=$_GET['id'];

if (isset($_POST['submit'])) 
{
 $car = $_POST['car'];
 $varient = $_POST['varient'];
 $fueltype = $_POST['fueltype'];
 $transmission = $_POST['transmission'];
 $subject = $_POST['subject'];

 $query ="UPDATE customer SET `car`='$car',`varient`='$varient',`fueltype`='$fueltype',`transmission`='$transmission',`subject`='$subject' WHERE id='$id'";

 if(mysqli_query($con, $query))
 {
  echo '<script>alert("Record Updated Successfully")</script>'; 
  header("Location:Car_Detail_show.php");
}
else
{
  echo '<script>alert("Record Not Updated")</script>';

}
/*header("Location:cardetail.html");*/
// mysqli_close($con); 
}

$query=mysqli_query($con,"SELECT * FROM customer WHERE id='$id'");
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


  <div class="container size">
    <form  method="POST">

      <h3 class="b">Car Detail Form</h3>

      <label for="">Select Car : </label>
      <select name="car" required >
        <option selected disabled value="<?php echo $data['car'];?>">-- Select Car --</option>
       <option value="hector">Hector</option>
       <option value="hector plus 6str">Hector Plus 6str</option>
       <option value="hector plus 7str">Hector Plus 7str</option>
       <option value="zs ev 2021">ZS EV 2021</option>
       <option value="gloster">Gloster</option>
     </select>

     <label for="">Select Varient : </label>
     <select name="varient" required >
       <option selected disabled value="<?php echo $data['varient'];?>">-- Select Varient --</option>
       <option value="sharp">Sharp</option>
       <option value="smart">Smart</option>
       <option value="super">Super</option>
       <option value="style">Style</option>
     </select>

     <label for="">Select Fuel Type : </label>
     <select name="fueltype" required >
       <option selected disabled value="<?php echo $data['fueltype'];?>">-- Select Fuel Type --</option>
       <option value="petrol">Petrol</option>
       <option value="diesel">Diesel</option>
       <option value="electric">Electric</option>
     </select>


     <label for="">Select Trasmission : </label>
     <select name="transmission" required >
       <option selected disabled value="<?php echo $data['transmission'];?>" >-- Select Trasmission --</option>
       <option value="automatic">Automatic</option>
       <option value="manual">Manual</option>
       <option value="cvt">CVT</option>
     </select>

     <label for="">Detail</label>
     <textarea value="<?php echo $data['subject'];?>"  name="subject" placeholder="Write something.." style="height:200px" required ></textarea>

     <input type="submit" value="Update" name="submit">
   </form>
 </div>

</body>
</html>
