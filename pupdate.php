<?php
session_start();
if($_SESSION['patient']=="")
{
	header("Location:login.php");
}
else
{
include("connect.php");
$email=$_SESSION['patient'];
include("pheader.php");
$query="select * from tbl_patient where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
<html>
<head>
<title>Profile Update</title>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<style>
.regbox
{
	height:95%;
	width:70%;
	color:#fff;
	margin:0px auto;
	background:rgba(16,16,16,0.9);
}
.rregbox
{
	height:100%;
	width:100%;
	color:#fff;
}
.boxreg
{
	height:50px;
	width:95%;
	margin:5%;
	margin-left:15%;
	padding:16px;
	color:#fff;
	background:transparent;
}
</style>
</head>
<body>
<div class="container-fluid">
	<form action="pupcode.php" method="post" class="form-group">

	<div class="row">
	<div class="col-sm-2"></div>
		<div class="col-sm-4">
			<input type="text" name="name" value="<?php echo $row['name'] ?>" placeholder="Name" class="boxreg bg-dark text-white"/>
			<input type="text" name="fname" placeholder="Father's Name" value="<?php echo $row['fname'] ?>" class="boxreg bg-dark"/>
			<input type="email" name="email" value="<?php echo $row['email'] ?>" placeholder="Email" class="boxreg bg-dark"/>
			<input type="number" class="boxreg bg-dark" value="<?php echo $row['mobile'] ?>" name="mobile" placeholder="Enter mobile no."/>
		</div>
		<div class="col-sm-4">
			<select class="boxreg bg-dark" name="gender"> 
						<option class="form-control"><?php echo $row['gender'] ?></option>
						<option class="form-control">male</option> 
						<option class="form-control">female</option> 
			 </select>
			 <input type="number" class="boxreg bg-dark " name="pin" value="<?php echo $row['pin'] ?>" placeholder="Enter PIN code"/>
			 <textarea class="boxreg bg-dark" name="address"  placeholder="Enter Address"><?php echo $row['address'] ?></textarea>
			 <input type="number" class="boxreg bg-dark" name="age" value="<?php echo $row['age'] ?>" placeholder="Enter Your Age"/>
		</div>
		<div class="col-sm-2"></div>
		<input type="submit" value="Update" class="btn btn-primary form-control mx-auto w-25 mt-2 rounded h1"/>
	</div>
	</form>
</div>
</body>
</html>
</body>
</html>
<?php 
}
include("footer2.php");
}
?>