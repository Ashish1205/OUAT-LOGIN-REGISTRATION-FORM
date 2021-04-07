<?php
	$con=mysqli_connect('localhost','root','','ouat');
	if($con==false)
	{
		echo "Connection is not done/Error connecting to database";
	}
	/*
	//It will show every time connection ok and we dont need it.
	else
	{
		echo "Connection Ok";
	}*/
?>