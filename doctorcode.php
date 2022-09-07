<?php
include("connect.php");
$n=$_POST['name'];
// echo $n
$fn=$_POST['fname'];
$g=$_POST['gender'];
$e=$_POST['email'];
$p=$_POST['password'];
$fee=$_POST['fees'];
$t=$_POST['timing'];
$s=$_POST['specialty'];
$a=$_POST['address'];
$m=$_POST['mobile'];
$filename=$_FILES['photo']['name'];
// echo $filename;
$tmp_name=$_FILES['photo']['tmp_name'];
$location="doctor/";
$query="insert into tbl_doctor(name,fname,gender,email,password,fees,timing,specialty,address,mobile,photo,date) values ('$n','$fn','$g','$e','$p','$fee','$t','$s','$a','$m','$filename',now())";
mysql_query($query);
move_uploaded_file($tmp_name,$location.$filename);
header("Location:login.php");
?>