<?php
session_start();
if($_SESSION['admin']=="")
{
	header("Location:index.php");
}
else
{
	include("../connect.php");
	$did=$_REQUEST['did'];
	$query="delete from tbl_doctor where doc_id='$did'";
	mysql_query($query);
	header("Location:vdoctor.php?msg=1");
}
?>