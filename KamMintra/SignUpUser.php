<?php


include('Databaseconn.php');
extract($_POST);

$sql = "insert into signupnormal (fName,lName,email ,mobile ,password, add1, add2, state, city,zip) values
 ('$fname','$lname','$email','$mobile','$password','$workType','$addressOne','$addressTwo','$city','$state'.'$pincode')";


 $result = mysqli_query($conn,$sql);


 if($result)
    {
        echo "OK";
    }
    else
   {
    echo  "Not Inserted";  
   }


?>