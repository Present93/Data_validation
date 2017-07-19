<?php
include 'db_con.php';
session_start();

$yearerror="";
$rollerror="";
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
//mysqli_query($dbcon,$sql);
        echo "<script>window.open('edu_qua.php','_self')</script>";
echo "Successfully registered";
 sleep(5);
$_SESSION['Roll']=$roll;
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
    <div class="navbar-header" style="padding: 100px">
  
 <h2>Registration</h2>
 <p>
 <form action="date.php" method="post">
 <label>Name:  </label>
<input type="text" name="name" required title="Please enter your name"><br>
 <label>Roll:  </label>
 <input type="text" name="Roll" required title="Please enter your roll" ><p><?php echo $rollerror;?></p>
 <label>Birth date:  </label>
 <input type="date" name="bday" required title="Please enter your birth date"><p><?php echo $yearerror;?></p>
 <label>Father's Name:  </label>
 <input type="text" name="f_name" required title="Please enter your father's name"><br>
 <label>Phone number:  </label>
 <input type="text" name="phone" required title="Please enter your phone number"><br>
 <label>Email address:  </label>
 <input type="email" name="email" required title="Please enter your email"><br>
 <input type="submit" name="Register" value="Register" />
 </form> 
  </p>

</div>  
    </nav> 
</body>
</html>