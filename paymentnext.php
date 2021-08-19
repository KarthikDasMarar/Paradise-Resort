<?php

$con=mysqli_connect("localhost","root","","ipwt");

$firstname =$_POST['firstname'];
$lastname =$_POST['lastname'];
$email =$_POST['email'];
$contact =$_POST['contact'];
$roomname = $_POST['rooms'];
$checkin= $_POST['checkin'];
$checkout = $_POST['checkout'];
$adults = $_POST['adults'];
$children = $_POST['children'];


$q="insert into bookings values('','$firstname','$lastname','$email','$contact', '$roomname','$checkin' , '$checkout' , '$adults' , '$children')";
{
														
mysqli_query($con,$q);
if(mysqli_affected_rows($con)>0)
		{
            ?>
            <script>alert("booking processed.Proceed for payment");
            window.location="pay.php";
            </script>
<?php
}

else
{
echo mysqli_error($con);
}
}
?>
