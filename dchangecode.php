<?php
session_start();
$op=$_POST['op'];  //op=old password
$np=$_POST['np'];    //np=new password
$cnp=$_POST['cnp'];    //cnp=cobfirm new password
$email=$_SESSION['doctor'];
include("connect.php");
$query="select password from tbl_doctor where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$pp=$row['password'];    //pp=purana password;
}
if($pp==$op)
{
	if($op==$np)
	{
		// echo "no change";
		header("Location:dchange.php");
	}
	else if($np==$cnp)
	{
		// echo "change hoga";
		$query2="update tbl_doctor set password='$cnp' where email='$email'";
		mysql_query($query2);
		session_destroy();
		header("Location:login.php?msg=4");
	}
	else
	{
		// echo "no change";
		header("Location:dchange.php");
	}
}
else
{
	// echo "no change";
	header("Location:dchange.php");
}
?>