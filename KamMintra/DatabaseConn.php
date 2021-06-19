<?php
	$conn=mysqli_connect("localhost:3306","root","");
	mysqli_select_db($conn,"kaammitra");
	if($conn)
	{
       // echo "connect successfully";
		
	}
	else
	{
		echo "data base connection is Failed ";
	}
?>