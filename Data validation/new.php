		
<?php 
include 'db_con.php';
session_start();

    //$result=mysqli_query($dbcon,"select * from admin");
    //if(mysqli_num_rows($result)>0)
    //{
if(isset($_POST['login']))
{
    $username=$_POST['username'];
    $userpass=$_POST['password'];

    $check_user="select * from admin WHERE username='$username'AND password='$userpass'";

    $run=mysqli_query($dbcon,$check_user);

    if(mysqli_num_rows($run))
    {
        echo "<script>window.open('admin.php','_self')</script>";

        $_SESSION['username']=$username;//here session is used and value of $user_email store in $_SESSION.

    }
    else
    {
        echo "<script>alert('Username or password is incorrect!')</script>";
    }
}
//}else
//echo "<script>window.open('reg.php','_self')</script>";
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
    </div>
 <nav class="navbar navbar-default">
    <div class="navbar-header" style="padding: 100px">
  
                            <form  action="new.php"  method="post"> 
                                <h1>Log in</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Your email or username </label>
                                    <input id="username" name="username" required="required" type="text" placeholder="username"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="........" /> 
                                </p>
                              
                                <p class="login button"> 
                                    <input type="submit" name="login" value="Login" /> 
								</p>
                            </form>
                            
</div>  
    </nav> 
 </body> 
 </html> 

