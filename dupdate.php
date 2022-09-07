<?php
session_start();
include("dheader.php");
include("connect.php");
$email=$_SESSION['doctor'];
$query="select * from tbl_doctor where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
<html>
<head>
<title>
Update Profile
</title>
<style>
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
<div class="container">
<form action="dupcode.php" method="post" class="form-group" enctype="multipart/form-data">
	<div class="row" style="background:#00838f;">
			
				<div class="col-sm-2"></div>
				<div class="col-sm-4">
					<input type="text" class="boxreg bg-dark" id="name" placeholder="Enter Name" name="name" value="<?php echo $row['name'] ?>" required/>
					<input type="text" value="<?php echo $row['fname'] ?>" class="boxreg bg-dark" id="fname" placeholder="Enter Father's Name" name="fname" required>
					<select class="boxreg bg-dark" name="gender"> 
						<option class="boxreg"><?php echo $row['gender'] ?></option>
						<option class="boxreg">male</option> 
						<option class="boxreg">female</option> 
					</select>
					<input type="email" value="<?php echo $row['email'] ?>" class="boxreg bg-dark" id="email" placeholder="Enter Your Email" name="email" required>
					<input type="text" value="<?php echo $row['password'] ?>" class="boxreg bg-dark" id="pass" placeholder="Enter Password" name="password" required>
				</div>
				<div class="col-sm-4">
					<input type="number" class="boxreg bg-dark" value="<?php echo $row['fees'] ?>" placeholder="Enter your Fees" name="fees" required>
					<input type="text" class="boxreg bg-dark" placeholder="Select Timing" value="<?php echo $row['timing'] ?>" name="timing"/>
					<select class="boxreg bg-dark" name="specialty">
						<option class="boxreg" ><?php echo $row['specialty']; ?></option>
						<option class="boxreg">Surgeon</option>
						<option class="boxreg">Physician</option>
						<option class="boxreg">Eye Specialist</option>
						<option class="boxreg">Neuro Surgon</option>
						<option class="boxreg">Ortho Physician</option>
					</select>
					<textarea class="boxreg bg-dark" name="address"><?php echo $row['address'] ?></textarea>
					<input type="number" class="boxreg bg-dark" name="mobile" value="<?php echo $row['mobile'] ?>" placeholder="Enter mobile no."/>
					<input type="file" name="photo" value="Upload Photo" class=" boxreg bg-dark btn btn-default py-2"/>
					
				</div>
				<div class="col-sm-2"></div>
				<input type="submit" value="Update" class="btn btn-warning form-control mt-4 rounded h1"/>
			</form>		
			</div>
		</div>
<?php
}
?>
</body>
</html>
