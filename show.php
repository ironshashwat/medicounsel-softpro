<?php 
session_start();
if($_SESSION['doctor']=="")
{
	header("Location:login.php");
}
else
{
include("Connect.php");
$email=$_SESSION['doctor'];
$query="select * from tbl_doctor where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$did=$row['doc_id'];
}
$query2="select * from tbl_appointment where doc_id='$did'";
$res2=mysql_query($query2);
?>
<?php include("dheader.php"); ?>
<html>
<head>
<title>View Appointment</title>
</head>
<body>
<div class="container">
<h2 class="text-center h1 bg-info mt-2">Appointments</h2>
<table border="5" class="table table-bordered jumbotron table-stripped">
<tr class="warning bg-info">
	<th>S.No.</th>
	<th>Patient Name</th>
	<th>Date</th>
</tr>
<?php
$a=1;
while($row2=mysql_fetch_array($res2,MYSQL_BOTH))
{
	?>
<tr>
	<td><?php echo $a ?></td>
	<?php 
		$pid=$row2['pat_id']; 
		$query3="select * from tbl_patient where pat_id='$pid'";
		$res3=mysql_query($query3);
		if($row3=mysql_fetch_array($res3,MYSQL_BOTH))
		{
			$pname=$row3['name'];
		}
	?>
	<td><?php echo $pname; ?></td>
	<td><?php echo $row2['date']; ?></td>
</tr>	
	<?php
	$a++;
}
 ?>
 </table>
</div>
</body>
</html>
<?php
}
?>