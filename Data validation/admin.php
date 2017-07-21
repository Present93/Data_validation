<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Addressbook</title>
   <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	</title>
</head>
<body>
     <nav class="navbar navbar-default">
    <div class="topnav" style="padding: 50px">
    <div style= margin:20px;>
    <a href="rmv.php">Log Out</a>
    </div>
 <nav class="navbar navbar-default">
    <div class="navbar-header" style="background-color: #ddd;padding: 50px">
     <?php

include 'db_con.php';
session_start();

if(!$_SESSION['username'])
{

    header("Location: new.php");//redirect to login page to secure the welcome page without login access.
}
 
 $data = mysqli_query($dbcon,"SELECT * FROM class ORDER BY name ASC") 
 or die(mysql_error()); 
 Print "<h2>Registered Members</h2><p>"; 
 Print "<table border cellpadding=3>"; 
 Print "<tr><th width=200>Name</th><th width=100>Roll</th><th width=200>Father's Name</th><th width=100>Birth date</th><th width=100>phone number</th><th width=200>Email</th><th width=100>track number</th></tr>";  
 while($info = mysqli_fetch_array( $data )) 
 { 
 Print "<tr><td>".$info['Name'] . "</td> "; 
 Print "<td>".$info['Roll'] . "</td> "; 
 Print "<td>".$info['F_name'] . "</td> "; 
 Print "<td>".$info['b_day'] . "</td> "; 
 Print "<td>".$info['phone_num'] . "</td> "; 
 Print "<td> <a href=mailto:".$info['email'] . ">" .$info['email'] . "</a></td>"; 
 Print "<td>".$info['track'] . "</td> "; 
 Print "<form method='post' action='reg.php'>
 <td><input type='hidden' name='hroll' value=".$info['Roll']. ">
 <input type='submit' name='more' value='more'></td>
</form></tr>";  
 } 
 Print "</table>"; 

?>

    </div>  
    </nav>  
 
 </body> 
 </html> 
