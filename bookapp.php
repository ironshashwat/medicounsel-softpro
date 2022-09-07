<?php
session_start();
if($_SESSION['patient']=="")
{
	header("Location:index.php");
}
else
{
 include("pheader.php"); ?>
<html>
<head>
<style>
.inbox
{
	width:60%;
	border:0;
	outline:0;
	background:transparent;
	border-bottom:2px solid red;
	font-size:25px;
	padding:10px;
	margin:4%;
}
</style>
</head>
<body>
<?php
	include("connect.php");
	$did=$_REQUEST['did'];
	// echo $did;
	$query="select * from tbl_doctor where doc_id='$did'";
	$res=mysql_query($query);
	if($row=mysql_fetch_array($res,MYSQL_BOTH))
	{
	?>
<div class="container">
	<div class="row">
	<div class="card mx-auto my-5 w-50 " style="background:#00838f;box-shadow:10px 10px #777;">
		<form action="booknow.php?docid=<?php echo $row['doc_id'] ?>" method="post" class="form-group" >
			<center><input type="hidden" name="did" class="form-control" value="<?php echo $row['doc_id']; ?>"/>
			Doctor : <input type="text" class="inbox" name="name" value="<?php echo $row['name'] ?>" readonly/><br/><br/>
			Email : <input type="email" class="inbox" name="email" value="<?php echo $row['email']?>" readonly/><br/><br/>
			Date  : <input type="date" class="form-control w-75" name="date" required/><br/><br/>
			<input type="submit" value="Book Now" class="btn btn-info"/>
			</center>
		</form>
	</div>
	</div>
	<div class="row">
		
	</div>
</div>
<?php
	}
?>
</body>
</html>

<?php
include("footer.php"); 
}
?>