<?php
session_start();
include('DatabaseConn.php');

extract($_POST);


if(isset($_POST['editWorkerId']))
{
    
		$response = array();
		$eid=$_POST['editWorkerId'];
		$query ="select id,fname,lname,email,mobile,workType,AddressOne,AddressTwo,State,City,pincode,subType from `signup_worker` where id='$eid' ";
		$result = $conn->query($query);
		$num =  $result->num_rows;
		
		if($num==1)
		{
			$row= $result->fetch_assoc();
			$response = $row;
        }
		echo json_encode($response);
    
}


if(isset($_POST['chnid']))
{
    $edid = $_POST['chnid'];
    $sql ="update signup_worker set
    fname='$fname',
    lname='$lname',
    email='$email',
    mobile ='$mobile',
    workType ='$workType',
    AddressOne='$addressOne',
    AddressTwo ='$addressTwo',
    State='$state',
    City ='$city',
    pincode='$pincode',
    subType='$subType'
    
    where id='$edid' ";

    $result = mysqli_query($conn,$sql);

    if($result)
    {
        echo "ok";
        $_SESSION['usermobile'] = $mobile;
        $_SESSION['username']= $fname;
        
    }
    else
    {
        echo "Not Updated";
    }
    
    
}




if(isset($_POST['pid']))
{
    $pid = $_POST['pid'];
    $ecnp= sha1($newpass);
   $sql = "update signup_worker  set password='$ecnp' where id='$pid'"; 
    
    $res = mysqli_query($conn,$sql);
    
    if($res)
    {
        echo "Password Changed...";
    }
    else
    {
        echo "Password Not Chnaged ...";
    }
    
}

?>