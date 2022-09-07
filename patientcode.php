<?php
include("connect.php");
$n=$_POST['name'];
// echo $n
$fn=$_POST['fname'];
$g=$_POST['gender'];
$e=$_POST['email'];
$p=$_POST['password'];
$a=$_POST['address'];
$m=$_POST['mobile'];
$pin=$_POST['pin'];
$age=$_POST['age'];
$query="insert into tbl_patient(name,fname,gender,email,password,address,mobile,pin,age,date) values ('$n','$fn','$g','$e','$p','$a','$m','$pin','$age',now())";
mysql_query($query);
header("Location:login.php");
?>