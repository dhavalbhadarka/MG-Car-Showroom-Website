<?php
$con = mysqli_connect("localhost", "root", "", "user");
if($con == false)
{
    die("ERROR: Cound not connect".mysqli_connect_error());
}
if (isset($_POST['submit']))
{
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$query = "INSERT INTO contact (fname, lname, email, phone, message) VALUES ('$fname','$lname','$email','$phone','$message')";
    
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
} 
?>

