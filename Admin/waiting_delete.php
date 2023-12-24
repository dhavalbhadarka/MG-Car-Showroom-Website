<?php

include("connect.php");

	if(mysqli_query($con,"DELETE FROM waiting WHERE id='".$_GET['uidi']."'"))
	{
		header("location:waiting_show.php");
	}
	else
	{
		echo "<script>alert('Cannot Delete Category')</script>";
	}
?>


