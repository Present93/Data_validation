<?php
include 'db_con.php';
session_start();

if(isset($_POST['education']))
{
    $sname=$_POST['sname'];
    $cname=$_POST['cname'];
    $sroll=$_POST['sRoll'];
    $croll=$_POST['cRoll'];
    $syear=$_POST['sy'];
    $hyear=$_POST['hy'];
    $hsc=$_POST['hsc'];
    $ssc=$_POST['ssc'];
    $roll=$_SESSION['Roll'];
mysqli_query ($dbcon,"INSERT INTO `education`(`Roll`,`School_name`, `College_name`, `School_roll`, `College_roll`, `ssc_year`, `hsc_year`, `ssc`, `hsc`) VALUES ('$roll',$sname','$cname','$sroll','$croll','$syear','$hyear','$ssc','$hsc')");
echo "Successfully entered";


 }
//if(checkdate((int)$january->format('%m'),(int)$january->format('%d'),(int)$january->format('%y'))==false)
//	printf("yes it");

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
 <form action="edu_qua.php" method="post">
 <label>High School Name:  </label>
<input type="text" name="sname" required title="Please enter your High school name"><br>
 <label>S.S.C Roll:  </label>
 <input type="text" name="sRoll" required title="Please enter your S.S.C roll" ><p></p>
<label>S.S.C Result:  </label>
 <input type="number" name="ssc" step="0.01" min="2" max="5" required title="Please enter your S.S.C  G.P.A"><br>
 <label>Passed year:  </label>
 <input type="year" name="sy" required title="Please enter your passed year"><p></p>
 <label>College Name:  </label>
<input type="text" name="cname" required title="Please enter your College name"><br>
 <label>H.S.C Roll:  </label>
 <input type="text" name="cRoll" required title="Please enter your H.S.C roll" ><p></p>
<label>H.S.C Result:  </label>
 <input type="number" name="hsc" step="0.01" min="2" max="5" required title="Please enter your H.S.C  G.P.A"><br>
 <label>Passed year:  </label>
 <input type="year" name="hy" required title="Please enter your passed year"><p></p>
 

 <input type="submit" name="education" value="Register" />
 </form> 
  </p>

</div>  
    </nav> 
</body>
</html>