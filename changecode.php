<?php
session_start();
include("connect.php");
$email=$_SESSION['doctor'];
$op=$_POST['op'];
$np=$_POST['np'];
$cnp=$_POST['cnp'];
$query="select password from tbl_doctor where email='$email'";
$res=mysql_query($query);
// echo $_SESSION['user'];
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$pp=$row['password'];
}

if($pp==$op)
{
	if($op==$np)
	{
		header("Location:change.php");
	}
	else if($np==$cnp)
	{
		//echo "change hoga";
		$query2="update tbl_doctor set password='$cnp' where email='$email'";
		mysql_query($query2);
		session_destroy();
		header("Location:login.php?msg");
	}
	else
	{
		// echo "No change";
		header("Location:change.php");
	}
}
else
{
	// echo "No Change";
	header("Location:change.php");
}
?>