<?php
session_start();
if($_SESSION['patient']=="")
{
	header("Location:login.php");
}
else
{
include("connect.php");
$ques=$_POST['ques'];
// echo $question;
$email=$_SESSION['patient'];
$query="select * from tbl_patient where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$pid=$row['pat_id'];
}
$query2="insert into tbl_question(pat_id,question,date) values('$pid','$ques',curdate())";
mysql_query($query2);
header("Location:discuss.php");
}
?>
