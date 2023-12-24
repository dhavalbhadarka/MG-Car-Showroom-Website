<?php

include("connect.php");

	if(mysqli_query($con,"DELETE FROM  service WHERE id='".$_GET['uidi']."'"))
	{
		header("location:Service_Booking_show.php");
	}
	else
	{
		echo "<script>alert('Cannot Delete Category')</script>";
	}
?>


