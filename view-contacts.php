
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
  
$sql = "SELECT fullname,email,contact,message FROM contact"; 
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
    <th>FullName</th> 
    <th>Email</th>
    <th>Contact</th>
    <th>Message</th>
  </tr>
  <?php  
  while($rows=$result->fetch_assoc()) 
  { 
    ?> 
<tr> 
  <td><?php echo $rows['fullname'];?></td> 
  <td><?php echo $rows['email'];?></td> 
  <td><?php echo $rows['contact'];?></td>
  <td><?php echo $rows['message'];?></td> 
</tr> 
<?php  
} 
?> 
</table> 
  </body>
</html>