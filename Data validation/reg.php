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

    header("Location: new.php");
}
if(isset($_POST["more"]))
{
$id=$_POST["hroll"];
 $einfo=mysqli_query ($dbcon,"SELECT * FROM education where Roll=$id")
 or die(mysql_error()); 
 Print "<h2>Education Qualification</h2><p>"; 
 Print "<table border cellpadding=3>"; 
 Print "<tr><th width=100>Roll</th><th width=200>School name</th><th width=200>College name</th><th width=100>S.S.C roll</th><th width=100>S.S.C roll</th><th width=50>S.S.C year</th><th width=50>H.S.C year</th><th width=50>S.S.C G.P.A</th><th width=50>H.S.C G.P.A</th></tr>";  
 $ei = mysqli_fetch_array( $einfo );
 Print "<tr><td>".$ei['Roll'] . "</td> "; 
 Print "<td>".$ei['School_name'] . "</td> "; 
 Print "<td>".$ei['College_name'] . "</td> "; 
 Print "<td>".$ei['School_roll'] . "</td> "; 
 Print "<td>".$ei['College_roll'] . "</td> ";  
 Print "<td>".$ei['ssc_year'] . "</td> ";    
 Print "<td>".$ei['hsc_year'] . "</td> ";  
 Print "<td>".$ei['ssc'] . "</td> ";  
 Print "<td>".$ei['hsc'] . "</td></tr>";
 Print "</table>"; 
 } 
?>