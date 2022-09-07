<?php
session_start();
include("../connect.php");
$email=$_SESSION['admin'];
$op=$_POST['op'];
$np=$_POST['np'];
$cnp=$_POST['cnp'];
$query="select * from tbl_admin where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$pp=$row['password'];
}
if($op==$pp)
{
	if($op==$np)
	{
		header("Location:changepwd.php");
	}
	else if($np==$cnp)
	{
		$query2="update tbl_admin set password='$cnp' where email='$email'";
		mysql_query($query2);
		session_destroy();
		header("Location:index.php");
	}
}
else
{
	header("Location:changepwd.php");
}
?>