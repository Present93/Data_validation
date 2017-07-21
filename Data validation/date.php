<?php
include 'db_con.php';
session_start();

$yearerror="";
$rollerror="";
$sumsg="";
if(isset($_POST['Register']))
{
    $name=$_POST['name'];
    $roll=$_POST['Roll'];
    $fname=$_POST['f_name'];
    $date=$_POST['bday'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $subject="Registration Complete";
    $time=time();
    $message="Welcome, You are registered.\'n Your track number is".$time.".";
    mail ($email,$subject,$message);
    $ndate = new DateTime(date("Y-m-d"));
    $bdate = new DateTime($date);
    $interval = $ndate->diff($bdate);
if(($interval->format('%y'))<=18)
    $yearerror="You must be above 18 years old";
if((strlen($roll)!=8)||(is_numeric($roll)!=true))
    $rollerror="Your roll is not valid";
else{
$sql=mysqli_query($dbcon,"INSERT INTO `class` (`Name`, `Roll`, `F_name`, `b_day`, `phone_num`, `email`, `track`) VALUES ('$name','$roll' ,'$fname','$date', '$phone', '$email', '$time')");
$sumsg = "Successfully registered";
$_SESSION['Roll']=$roll;
sleep(3);
        echo "<script>window.open('edu_qua.php','_self')</script>";
}

 }
//if(checkdate((int)$january->format('%m'),(int)$january->format('%d'),(int)$january->format('%y'))==false)
//  printf("yes it");

?>
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
    <a href="admin.php">Admin Panel</a>
    </div>
 <nav class="navbar navbar-default">
    <div class="navbar-header" style="background-color: #ddd;padding: 50px">
  
 <h2>Registration</h2>
 <h4>
 <form action="date.php" method="post">
 <p><label>Name:  </label>
<input type="text" name="name" required title="Please enter your name"><br>
 <p><label>Roll:  </label>
 <input type="text" name="Roll" required title="Please enter your roll" ><p><?php echo $rollerror;?></p>
 <p><label>Birth date:  </label>
 <input type="date" name="bday" required title="Please enter your birth date"><p><?php echo $yearerror;?></p>
<p><label>Father's Name:  </label>
 <input type="text" name="f_name" required title="Please enter your father's name"><br>
 <p><label>Phone number:  </label>
 <input type="text" name="phone" required title="Please enter your phone number"><br>
 <p><label>Email address:  </label>
 <input type="email" name="email" required title="Please enter your email"><br>
 <p><input type="submit" name="Register" value="Register" />
 </form> 
  </h4>
<p><?php echo $sumsg;?><p>
</div>  
    </nav> 
</body>
</html>
