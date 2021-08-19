<?php

$con=mysqli_connect("localhost","root","","ipwt");

$guest_name = $_POST['fullname'];
$guest_email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$contact = $_POST['contact'];
$address = $_POST['address'];

$q="insert into guests values('','$guest_name','$guest_email','$username', '$password','$contact','$address')";
{
														
mysqli_query($con,$q);
if(mysqli_affected_rows($con)>0)
		{
echo "Inserted";
header("location:login.php");
}
else
{
echo mysqli_error($con);
}
}

?>