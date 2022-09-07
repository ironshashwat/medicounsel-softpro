<?php
session_start();
include("connect.php");
$ans=$_POST['ans'];
// echo "ans ".$ans;
$qid=$_POST['qid'];
// echo "Qid = ".$qid;
// echo $qid;
$email= $_SESSION['patient'];
$query="select * from tbl_patient where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$pid=$row['pat_id'];
	// echo $pid;
}
$query2="insert into tbl_answer(qid,pat_id,answer,date) values ('$qid','$pid','$ans',curdate())";
mysql_query($query2);
header("Location:showquestion.php");
?>