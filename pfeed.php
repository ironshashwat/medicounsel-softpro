<?php 
session_start();
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
<title>Feedback</title>
<style>
body
{
	color:#fff;
}
textarea
{
	font-size:50px;
	font-weight:200;
	letter-spacing:2px;
}
</style>
</head>
<body>
<div class="container">
<div class="row">
<form action="feedcode.php" method="post" class="form-group mx-auto my-5">
	<h1 class="text-center">Feedback </h1> 
	<textarea name="feed" class="form-control mt-5" rows="8" cols="40" style="outline:2px;box-shadow:5px 5px 15px #4989f4"></textarea><br/><br/>
	<input type="submit" value="Send" class="btn btn-success btn-lg clearfix w-50 float-right" />
</form>
</div>
</div>
</body>
</html>
<?php include("footer2.php");
}
?>