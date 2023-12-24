<?php

include("connect.php");

	if(mysqli_query($con,"DELETE FROM testdrive WHERE id='".$_GET['uidi']."'"))
	{
		header("location:testdrive_show.php");
	}
	else
	{
		echo "<script>alert('Cannot Delete Category')</script>";
	}
?>


