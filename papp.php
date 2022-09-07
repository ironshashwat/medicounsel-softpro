<?php
session_start();
if($_SESSION['patient']=="")
{
	header("Location:login.php");
}
else
{
include("connect.php");
include("pheader.php");
$email = $_SESSION['patient'];
$query="select * from tbl_patient where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
		$pid=$row['pat_id'];
}
$query2="select * from tbl_appointment where pat_id='$pid'";
$res2=mysql_query($query2);
?>
<html>
<title>My Appointments</title>
<body>
<div class="container">
<table border="5" class="table bg-warning">
<tr class="bg-info ">
	<th>S.NO.</th>
	<th>Pateint Name</th>
	<th>Doctor's Name</th>
	<th>Date</th>
	<th>Status</th>
	<th>Print Recipt</th>
</tr>
<?php
$a=1;
while($row2=mysql_fetch_array($res2,MYSQL_BOTH))
{
?>
<tr>
<td><?php echo $a; ?></td>
<?php 
$ppid=$row2['pat_id']; 
$query3="select * from tbl_patient where pat_id='$ppid'";
$res3=mysql_query($query3);
if($row3=mysql_fetch_array($res3,MYSQL_BOTH))
{

?>
<td><?php echo $row3['name']; ?></td>
<?php
}
?>
<?php 
$ddid=$row2['doc_id']; 
$query4="select * from tbl_doctor where doc_id='$ddid'";
$res4=mysql_query($query4);
if($row4=mysql_fetch_array($res4,MYSQL_BOTH))
{

?>
<td><?php echo $row4['name']; ?></td>
<?php
}
?>
<td><?php echo $row2['date']; ?></td>
<td><?php if($row2['status']=='Y'){ echo "<p class='text-success h4'>"."Approved."."</p>"; }
if($row2['status']=='N'){echo "<p class='text-danger h4'>"."Pending"."</p>";}
 ?></td>
 <td><?php if($row2['status']=='Y'){?><a href="print.php?did=<?php echo $ddid; ?>">Print</a><?php } if($row2['status']=='N'){ echo "Please wait for Approval"; } ?></td>
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
include("footer2.php");
}
?>