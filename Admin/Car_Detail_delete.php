<?php

include("connect.php");

	if(mysqli_query($con,"DELETE FROM  customer WHERE id='".$_GET['uidi']."'"))
	{
		header("location:Car_Detail_show.php");
	}
	else
	{
		echo "<script>alert('Cannot Delete Category')</script>";
	}
?>


