<?php
session_start();
$email=$_SESSION['patient'];
include("connect.php");
$n=$_POST['name'];
$fn=$_POST['fname'];
$g=$_POST['gender'];
$e=$_POST['email'];
$p=$_POST['password'];
$a=$_POST['address'];
$pin=$_POST['pin'];
$m=$_POST['mobile'];
$age=$_POST['age'];
$query="update tbl_patient set name='$n', fname='$fn',gender='$g',email='$e',password='$p',address='$a',mobile='$m',pin='$pin',age='$age' where email='$email'";
mysql_query($query);
header("Location:pprofile.php");
?> 	