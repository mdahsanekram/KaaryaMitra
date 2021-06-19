<?php

session_start();

include('DatabaseConn.php');
extract($_POST);

$encpaas = sha1($password);

$sql = "select fName,mobile,password from signupsupervisor where mobile='$mobile' and password='$encpaas' ";


$result = mysqli_query($conn,$sql);

$res = array();
if(mysqli_num_rows($result) == 1)
{
    while($row=mysqli_fetch_assoc($result))
    {
        $_SESSION['usermobile'] = $mobile;
        $_SESSION['username']= $row['fName'];
        $_SESSION['typeLogin'] = "superVisiorLogin";
    }
    
    $res[0] = "ok";
}
else
{
    echo "Invalid Password or email";
}


echo json_encode($res);



?>