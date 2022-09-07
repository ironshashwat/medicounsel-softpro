<?php
session_start();
if($_SESSION['patient']=="")
{
	header("Location:login.php");
}
else
{
include("connect.php");
//$did=$_POST['did'];
// echo $did;
//$doa = $_POST['date'];
// echo $doa;
$email=$_SESSION['patient'];
$doc_id=$_REQUEST['did'];
$query = "select * from tbl_patient where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$pid=$row['pat_id'];
	$age=$row['age'];
	$g=$row['gender'];
}
//$query2="insert into  tbl_appointment(doc_id,pat_id,doa,status,date) values ('$did','$pid','$doa','N',curdate())";
//mysql_query($query2);
//header("Location:pprofile.php");
?>
<html>
<head>
<style>
#outer
{
height:auto;
width:800px;
}
#content
{
height:500px;
width:100%;
border-bottom:3px solid;
}
</style>
<script>
window.print();
</script>
</head>
<body>
<img src="images/logo.png" height="100px" width="120px"/>
<img src="images/download.jpg" height="100px" width="120px" style="float:right;"/>
<h1 style="text-align:center">Medicounsel Print Reciept</h1>
<div class="container">
		<?php
			$query3="select * from tbl_doctor where doc_id='$doc_id'";
			$res3=mysql_query($query3);
			while($row3=mysql_fetch_array($res3,MYSQL_BOTH))
			{	
			?>
	<center>
		<div id="outer">
		<table cellpadding="5" align="center" cellspacing="30" width="800px" style="border-bottom:4px solid;">
		<tr>
		<td><b>Reciept No. : </b><?php echo rand(10000,99999); ?></td>
		<td><b>Date : </b><?php echo date('d/m/y'); ?></td>
		<td><b>Time : </b><?php date_default_timezone_set('Asia/Kolkata'); echo date('h:m:s'); ?></td>
		</tr>
		<tr>
		<td><b>Age : </b><?php echo $age; ?></td>
		<td><b>Sex : </b><?php echo $g; ?></td>
		<td><b>Doctor : </b><?php echo $row['name']; ?></td>
		</tr>
		</table>
		<p>Received with thanks of Sum of 1/- from <?php echo $row['name']; ?></p>
		<div id="content"></div>
		<h4>Total Fees : <?php echo $row3['fees'] ?>/- </h4>
		<h3 style="float:right;"><u>Signature</u></h3>
		</div>
	</center>
	<?php } ?>
</div>
</body>
</html>
<?php
}
?>