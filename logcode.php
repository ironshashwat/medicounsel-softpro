<?php
session_start();
include("connect.php");
$option=$_REQUEST['msg'];
$email=$_POST['email'];
$password=$_POST['password'];
if($option=='2')
{
	$query="select * from tbl_doctor where email='$email' and password='$password'";
	$res=mysql_query($query);
	if($row=mysql_fetch_array($res,MYSQL_BOTH))
	{
		 $_SESSION['doctor']=$email;
		 header("Location:dprofile.php");
		// echo "Right";
	}
	 else
	 {
		 header("Location:login.php?msg=3");
	 }
}
 if($option=='1')
 {
	 $query="select * from tbl_patient where email='$email' and password='$password'";
	 $res=mysql_query($query);
	 if($row=mysql_fetch_array($res,MYSQL_BOTH))
	 {
		 $_SESSION['patient']=$email;
		 header("Location:pprofile.php");
	 }
	 else
	 {
		 header("Location:login.php?msg=3");
	 }
 }
 if($option=="")
 {
	 header("Location:login.php?msg=3");
 }
?>