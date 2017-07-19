<?php

$dbcon=mysqli_connect("localhost","root","","test")or die(mysql_error());
mysqli_select_db($dbcon,"test")or die(mysql_error());
?>