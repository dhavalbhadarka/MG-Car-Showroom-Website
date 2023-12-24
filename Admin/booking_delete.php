<?php

include("connect.php");

	if(mysqli_query($con,"DELETE FROM  booking WHERE id='".$_GET['uidi']."'"))
	{
		header("location:booking_show.php");
	}
	else
	{
		echo "<script>alert('Cannot Delete Category')</script>";
	}
?>


