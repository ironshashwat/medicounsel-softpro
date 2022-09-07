  <?php
session_start();
if($_SESSION['admin']=="")
{
	header("Location:index.php");
}
else
{
	include("../connect.php");
	$qid=$_REQUEST['qid'];
	$query="delete from tbl_answer where qid='$qid'";
	mysql_query($query);
	$query="delete from tbl_question where qid='$qid'";
	mysql_query($query);
	header("Location:vdisboard.php?msg=1");
}
?>