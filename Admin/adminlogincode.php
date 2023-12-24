<?php

$con=mysqli_connect("localhost","root","","user");

if (isset($_POST['submit'])) 
{
	$email=$_POST['email'];
    $password=$_POST['password'];

$query="SELECT * FROM adminlogin WHERE email = '$email' OR password = '$password'";
/*"SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";*/

$res=mysqli_query($con,$query);
$rows = mysqli_num_rows($res);

if(empty($rows == 1))
{
	?>
    <script>alert("Login Not Successfully");</script>
    <?php
    header('location:login.php');
}
else
{
    ?>
    <script>alert("Login Successfully");</script>
    <?php
    header('location:index.php');
}

mysqli_close($con);	
}

?>