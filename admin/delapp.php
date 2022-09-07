  <?php
session_start();
if($_SESSION['admin']=="")
{
	header("Location:index.php");
}
else
{
	include("../connect.php");
	$appid=$_REQUEST['appid'];
	$query="delete from tbl_appointment where appid='$appid'";
	mysql_query($query);
	header("Location:vapp.php?msg=1");
}
?>