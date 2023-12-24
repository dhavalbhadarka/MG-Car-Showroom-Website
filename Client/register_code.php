<?php

$con=mysqli_connect("localhost","root","","user");

$username=$_POST['username'];
$email=$_POST['email'];
$password1=$_POST['password1'];
$password2=$_POST['password2'];

$query="INSERT INTO `login`(username,email,password1,password2) VALUES ('$username','$email','$password1','$password2')";

$res=mysqli_query($con,$query);

if($res)
{
    ?>
    <script>alert("Insert Data Properly");</script>
    <?php
    header('location:login.php');
    
}
else
{
    ?>
    <script>alert("Insert Data Not Properly");</script>
    <?php
    header('location:register.php');
}

mysqli_close($con);

?>