 <?php
session_start();
if($_SESSION['patient']=="")
{
	header("Location:index.php");
}
else
{
include("pheader.php");
include("connect.php");
$spec=$_POST['spec'];
// echo $spec;
$query="select * from tbl_doctor where specialty='$spec'";
$res=mysql_query($query);
?>
<html>
<head>
<title>Book Appointment</title>
<style>
tr,td
{
background:#80ccff;
}
</style>
</head>
<body style="background:url('images/dd.jpg');background-attachment:fixed;background-size:100% 100%;color:#0565c9;">
<div class="container-fluid">
<div class="row bg-info">
	<h1 class="text-center" style="margin-left:35%;">Book Your Appointment.</h1>
</div>
	<?php
		$a=1;
		while($row=mysql_fetch_array($res,MYSQL_BOTH))
		{
	?>
<div class="row text-info">

	<table class="table table-striped table-hover ">
		<tr>
			<td>
				<img src="doctor/<?php echo $row['photo'] ?>" height="150px" width="150px" class="img-circle"/>
			</td>
			<td>
				<h2 class=""><?php echo $row['name']; ?></h2>
				<p class="h5">
					<b>Email : </b> <?php echo $row['email'] ?>
				</p>
				<p class="h5">
					<b>Mobile : </b> <?php echo $row['mobile'] ?>
				</p>
				<p class="h5">
					<b>Fees : </b> <?php echo $row['fees'] ?>
				</p>
				<p class="h5">
					<b>Timing : </b> <?php echo $row['timing'] ?>
				</p>
			</td>
			<td class="p-5"><a href="bookapp.php?did=<?php echo $row['doc_id'] ?>"><i class="fas fa-user-md h1"></i>Book Appointment</a></td> 
		</tr>
	</table>
</div>
<?php
		}
?>
</div>
</div>
</body>
</html>
<?php
 include("footer.php"); 
}
?>