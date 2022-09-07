<?php
session_start();
if($_SESSION['patient']=="")
{
	header("Location:login.php");
}
else
{
$qid=$_REQUEST['qid'];
//echo $qid;
?>
<html>
<head>
</head>
<body>
<form action="answer.php" method="post">
<input type="hidden" value="<?php echo $qid; ?>" name="qid"/>
Add Answer
<textarea name="ans"></textarea><br/><br/>
<input type="submit" value="Add"/>
</form>
</body>
</html>
<?php
}
?>