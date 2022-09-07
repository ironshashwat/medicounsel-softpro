<?php
session_start();
include("connect.php");
$feed=$_POST['feed'];
$email=$_SESSION['patient'];
$query="select * from tbl_patient where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$pid=$row['pat_id'];
}
$query2="insert into tbl_feedback(pat_id,feedback,date) values('$pid','$feed',now())";
mysql_query($query2);
header("Location:pprofile.php");
?>