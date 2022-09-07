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
	$query="delete from tbl_patient where pat_id='$pid'";
	mysql_query($query);
	header("Location:vpatient.php?msg=1");
}
?>