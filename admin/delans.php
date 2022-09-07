  <?php
session_start();
if($_SESSION['admin']=="")
{
	header("Location:index.php");
}
else
{
	include("../connect.php");
	$aid=$_REQUEST['aid'];
	$query="delete from tbl_answer where ansid='$aid'";
	mysql_query($query);
	header("Location:sans.php?msg=1");
}
?>