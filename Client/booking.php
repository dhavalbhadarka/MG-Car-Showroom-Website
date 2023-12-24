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
  <form action="bookingdata.php" method="POST">

    <h3 class="b">Booking Form</h3>
    <br></br>



    <label for="">Select Car : </label>
  <select name="car" required>
    <option selected disabled>-- Select Car --</option>
    <option value="hector">Hector</option>
    <option value="hector plus 6 str">Hector Plus 6str</option>
    <option value="hector plus 7 str">Hector Plus 7str</option>
    <option value="zs ev 2021">ZS EV 2021</option>
    <option value="gloster">Gloster</option>
  </select>
  <br></br>


    <label for="">Select Varient : </label>
  <select name="varient" required>
    <option selected disabled>-- Select Varient --</option>
    <option value="sharp">Sharp</option>
    <option value="smart">Smart</option>
    <option value="super">Super</option>
    <option value="style">Style</option>
  </select>
  <br></br>


    <label for="">Select Fuel Type : </label>
  <select name="fueltype" required>
    <option selected disabled>-- Select Fuel Type --</option>
    <option value="petrol">Petrol</option>
    <option value="diesel">Diesel</option>
    <option value="electric">Electric</option>
  </select>
  <br></br>



    <label for="">Select Trasmission : </label>
  <select name="transmission" required>
    <option selected disabled>-- Select Transmission --</option>
    <option value="automatic">Automatic</option>
    <option value="manual">Manual</option>
    <option value="cvt">CVT</option>
  </select>
  <br></br>



   <label for="">Select Car Color : </label>
  <select name="color" required>
    <option selected disabled>-- Select Car Color --</option>
    <option value="white">White</option>
    <option value="grey">Grey</option>
    <option value="black">Black</option>
    <option value="red">Red</option>
  </select>
  <br></br>
</div>



<div class="container">
 <h3 class="b">Location Of Booking & Delivery</h3>
  <br></br>

  <label for="">Select State : </label>
  <select name="state" required>
    <option selected disabled>-- Select State --</option>
    <option value="gujrat">Gujrat</option>
    <option value="maharastra">Maharastra</option>
    <option value="assam">Assam</option>
    <option value="bihar">Bihar</option>
  </select> 
  <br></br>



  <label for="">Select City : </label>
  <select name="city" required>
    <option selected disabled>-- Select City --</option>
    <option value="jamnagar">Jamnagar</option>
    <option value="rajkot">Rajkot</option>
    <option value="morbi">Morbi</option>
  </select>
  <br></br>


  <label for="">Select Dealer: </label>
  <select name="dealer" required>
    <option selected disabled>-- Select Dealer --</option>
    <option value="jay ganesh mg">Jay Ganesh MG</option>
    <option value="mg motor rajkot">Rajkot</option>
    <option value="mg world morbi">Morbi</option>
  </select>
  <br></br>
</div>

<div class="container">
  
  <h3 class="b">Contact Detail Form</h3>
   <br></br>


   <label for="">Name : </label>
    <input type="text" name="name" required>
    <br></br>

    <label for="">Email : </label>
    <input type="text" name="email" required>
    <br></br>

    <label for="">Phone : </label>
    <input type="text" name="phone" required>
    <br></br>

    <label for="">Address : </label>
    <textarea  name="address" placeholder="Write address here.." style="height:200px" required></textarea>

    <br></br>
    <input type="submit" value="Submit" name="submit" align="right">


 

</div>
</form>

</body>
</html>
