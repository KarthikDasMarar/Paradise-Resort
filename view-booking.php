
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
  
$sql = "SELECT guest_id,firstname, lastname, email,contact,roomname,checkin,checkout,adults,children FROM bookings"; 
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
    <th>First Name</th> 
    <th>LastName</th>
    <th>Email</th>
    <th>contact</th>
    <th>Room-No</th>
    <th>checkin</th>
    <th>checkout</th>
    <th>adults</th>
    <th>children</th>
  </tr>
  <?php  
  while($rows=$result->fetch_assoc()) 
  { 
    ?> 
<tr> 
  <td><?php echo $rows['guest_id'];?></td> 
  <td><?php echo $rows['firstname'];?></td> 
  <td><?php echo $rows['lastname'];?></td>
  <td><?php echo $rows['email'];?></td>
  <td><?php echo $rows['contact'];?></td>   
  <td><?php echo $rows['roomname'];?></td> 
  <td><?php echo $rows['checkin'];?></td>
  <td><?php echo $rows['checkout'];?></td> 
  <td><?php echo $rows['adults'];?></td> 
  <td><?php echo $rows['children'];?></td>
</tr> 
<?php  
} 
?> 
</table> 
  </body>
</html>