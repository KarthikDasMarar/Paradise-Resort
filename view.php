
<!DOCTYPE html>
<html>
<?php 
$user = 'root'; 
$password = '';  
$database = 'ipwt';  
$servername='localhost'; 
$mysqli = new mysqli($servername, $user,  
                $password, $database); 
  
if ($mysqli->connect_error) { 
    die('Connect Error (' .  
    $mysqli->connect_errno . ') '.  
    $mysqli->connect_error); 
} 
  
$sql = "SELECT guest_id,guest_name,guest_email,contact,address FROM guests"; 
$result = $mysqli->query($sql); 
$mysqli->close();  
?> 
  <head>
  <style>
      th{
        border:2px solid #34656D;
        padding:10px;
      }
      td{
        padding:10px;
        border:2px solid #34656D;
      }
    </style>
  </head>
  <body>
<table> 
  <tr>
    <th>Guest id</th> 
    <th>Guest Name</th> 
    <th>Email</th>
    <th>Contact</th>
    <th>Address</th>
  </tr>
  <?php  
  while($rows=$result->fetch_assoc()) 
  { 
    ?> 
<tr> 
  <td><?php echo $rows['guest_id'];?></td> 
  <td><?php echo $rows['guest_name'];?></td> 
  <td><?php echo $rows['guest_email'];?></td>
  <td><?php echo $rows['contact'];?></td> 
  <td><?php echo $rows['address'];?></td>
</tr> 
<?php  
} 
?> 

</table> 
  </body>
</html>