<?php
session_start();
include("connect.php");
$did=$_POST['did'];
// echo $did;
$doa = $_POST['date'];
// echo $doa;
$email=$_SESSION['patient'];
$doc_id=$_REQUEST['docid'];
$query = "select * from tbl_patient where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$pid=$row['pat_id'];
	$age=$row['age'];
	$g=$row['gender'];
}
$query2="insert into  tbl_appointment(doc_id,pat_id,doa,status,date) values ('$did','$pid','$doa','N',curdate())";
mysql_query($query2);
header("Location:pprofile.php");
?>
