<?php 
session_start();
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
<title>Cancel Appointment</title>
</head>
<body>
<div class="container">
<table border="5" class="table bg-warning">
<tr class="bg-info">
	<th>S.No.</th>
	<th>Patient Name</th>
	<th>Date</th>
	<th>Status</th>
	<th>Cancel</th>
	<th>Approve</th>
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
	<td><?php echo $row2['status']; ?></td>
	<td><a href="cancelcode.php?aid=<?php echo $row2['appid']; ?>"><i class="fas fa-times-circle text-danger text-center"></i></a></td>
	<td><a href="approvecode.php?aid=<?php echo $row2['appid']; ?>"><i class="fas fa-check-circle text-success text-center" ></i></a></td>
</tr>	
	<?php
	$a++;
}
 ?>
 </table>
</div>
 </body>
</html>