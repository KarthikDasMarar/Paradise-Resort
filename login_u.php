
<?php
$a=$_POST['username'];
$b=$_POST['password'];
$c=$_POST['submit'];

$con=mysqli_connect("localhost","root","","ipwt");


$cat="select username,password,guest_id from guests where username='$a'";
							
$data=mysqli_query($con,$cat);
							 
if(mysqli_num_rows($data)>0)
{
    while($row=mysqli_fetch_array($data))
    {
        if($b==$row[1])
        {
            session_start();
            $_SESSION["guest_id"]=$row[2];
            header("location:guesthome.php");
        }
        else
        {
            ?>
            <script>alert("Incorrect Password");
            window.location="login.php";
            </script>
            <?php
            break;
        }
    }
}
else
{
    ?>
    <script>alert("Incorrect username");
    window.location="login.php";
    </script>
    <?php
    }
    ?>
