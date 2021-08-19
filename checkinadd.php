<?php

$con=mysqli_connect("localhost","root","","ipwt");

$checkin= $_POST['checkin'];
$checkout = $_POST['checkout'];
$adults = $_POST['adults'];
$children = $_POST['children'];


$q="insert into bookings values('','','','', '','','$checkin' , '$checkout' , '$adults' , '$children')";
{
														
mysqli_query($con,$q);
if(mysqli_affected_rows($con)>0)
		{
echo "Inserted";
header("location:rooms.php");
}
else
{
echo mysqli_error($con);
}
}

?>