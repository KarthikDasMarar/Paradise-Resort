<?php

$con=mysqli_connect("localhost","root","","ipwt");

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$message = $_POST['Message'];

$q="insert into contact values('$fullname','$email','$contact','$message')";
{
														
mysqli_query($con,$q);
if(mysqli_affected_rows($con)>0)
		{
echo "Inserted";
header("location:index.php");
}
else
{
echo mysqli_error($con);
}
}

?>