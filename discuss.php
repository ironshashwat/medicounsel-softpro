<?php
session_start();
include("connect.php");
if($_SESSION['patient']=="")
{
	header("Location:login.php");
}
else
{
include("pheader.php");
?>
<html>
<head>
<title>Discussion</title>
<style>
body
{
	color:#fff;
}
</style>
</head>
<body>
<div class="container-fluid">
<div class="row bg-info">
	<h1 class="text-center mx-auto mt-3">Ask Questions</h1>
</div>
<div class="row mx-auto">
<form  action="question.php" target="question" method="post" class="form-group">
<textarea name="ques" class="form-control mx-auto my-4 w-75" cols="100" style="font-size:30px;" placeholder="Ask your Questions and doubts here...">
</textarea>
<input type="submit" value="Add" class="btn btn-success btn-lg align-items-center w-50" style="margin-left:25%;"/>
</form>

<button class="btn btn-info btn-lg mx-auto ">Show Answers Below</button> 
</div>
</div>
</div>
<br/><br/>
<div class="row h-75">
<iframe src="showquestion.php" height="100%" width="60%" name="question" style="margin-left:2%;" ></iframe>
<iframe src="view.php" height="100%" width="35%" name="answer" style=""></iframe>
</div>
</body>
</html>
<?php 
include("footer2.php"); 
}
?>