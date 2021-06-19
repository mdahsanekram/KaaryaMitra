<?php

session_start();

include('DatabaseConn.php');
extract($_POST);

$encpass = sha1($password);
$sql = "select fName,mobile,proimage,password from signup_worker where mobile='$mobile' and password='$encpass' ";


$result = mysqli_query($conn,$sql);


if(mysqli_num_rows($result) == 1)
{
    while($row=mysqli_fetch_assoc($result))
    {
        $_SESSION['usermobile'] = $mobile;
        $_SESSION['username']= $row['fName'];
        $_SESSION['workerImage'] = $row['proimage'];
        
    }
    
    echo "ok";
}
else
{
    echo "Invalid Password or email";
}






?>