<?php
	$conn=mysqli_connect("localhost:3306","root","");
	mysqli_select_db($conn,"kaaryamitra");
	if($conn)
	{
       // echo "connect successfully";
		
	}
	else
	{
		echo "data base connection is Failed ";
	}
?>