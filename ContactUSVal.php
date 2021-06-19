<?php

include('DatabaseConn.php');

extract($_POST);


$sql = "insert into ContactUS (name,email,mobile,subject,message)  values ('$name','$email','$mobile','$subject','$message')";


$result = mysqli_query($conn,$sql);

if($result)
{
    echo "OK";
}
else
{
    echo "Not Inserted";
}

?>