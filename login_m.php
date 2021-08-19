
<?php
$a=$_POST['username'];
$b=$_POST['password'];
$c=$_POST['submit'];

$con=mysqli_connect("localhost","root","","ipwt");


$cat="select username,password,manager_id from manager where username='$a'";
							
$data=mysqli_query($con,$cat);
							 
if(mysqli_num_rows($data)>0)
{
    while($row=mysqli_fetch_array($data))
    {
        if($b==$row[1])
        {
            session_start();
            $_SESSION["manager_id"]=$row[2];
            header("location:managerhome.php");
        }
        else
        {
            ?>
            <script>alert("Incorrect Password");
            window.location="managerlogin.php";
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
    window.location="managerlogin.php";
    </script>
    <?php
    }
    ?>
