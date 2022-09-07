<?php
session_start();
include("../connect.php");
$email=$_POST['email'];
$password=$_POST['password'];
$query="select * from tbl_admin where email='$email' and password='$password'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$_SESSION['admin']=$email;
	header("Location:adminprofile.php");
}
else
{
	header("Location:index.php");
}
?>