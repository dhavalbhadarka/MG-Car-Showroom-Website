<!DOCTYPE html>
<html>
<head>
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Contact us</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">

<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  
  /*background-image: url("images/back2.jpg");*/
}

* {
  box-sizing: border-box;
}

/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Style the container/contact section */
.container {
  border-radius: 5px;
  background-color: ;
  padding: 10px;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

h3{
    font-size: 30px;
    color: #F08080
}

h2{
    font-size: 40px;
    
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

.z{
    height: 30px;
    width: 30px;
}

td{
    text-align: center;
    color: black;
}

label{

    color: red;
    font-weight: bold;
}

span{
  color: red;
}





/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>
<?php
  include('header.php');
?>

<br><br><br><br><br><br><br><br><br>
<br><br><br>

<div class="container">
  <div style="text-align:center">
    <h2>Contact <span>Us</span></h2>
    <p>Swing by for a cup of coffee, or leave us a message:</p>
  </div>
  <div class="row">
    <div class="column">
      <br>
      <h3>Contact Information</h3>
      <br><br>
            <div class="">
            <table>
            <tr>
                <td><img  class="z" src="images/email.png"></td>
                <td><font class="B">support@mgmotor.com</font></td>
            </tr>
            </table>
        </div>

        <div class="">
            <table>
            <tr>
                <td><img class="z" src="images/call.png"></td>
                <td><font>(042) 789 35490</font></td>
            </tr>
            </table>
        </div>


        <div class="">
            <table>
             <tr>
                <td><img class="z" src="images/location.png"></td>
                <td><font>Fairview Ave, El Monte, CA, 91732</font></td>
            </tr>
            </table>
        </div>
              


    </div>
    <div class="column">

      <form id="contact" action="contactdata.php" method="POST">
        <label for="">First Name :</label>
        <input type="text" name="fname" placeholder="Your name..">
        <br></br>
        <label for="">Last Name :</label>
        <input type="text" name="lname" placeholder="Your last name..">
        <br></br>
        <label for="">Email :</label>
        <input type="text" name="email" placeholder="Your Email..">
        <br></br>
        <label for="">Phone :</label>
        <input type="text" name="phone" placeholder="Your Contact No..">
        <br></br>
        <label for="">Message</label>
        <textarea  name="message" placeholder="Write something.." style="height:170px"></textarea>
        <br></br>
        <input type="submit" value="Submit" name="submit">
      </form>
    </div>
  </div>
</div>
</body>
</html>

<?php
include('footer.php');
?>

