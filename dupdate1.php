<?php
session_start();
if($_SESSION['doctor']=="")
{
	header("Location:login.php");
}
else
{
include("dheader.php");
include("connect.php");
$email=$_SESSION['doctor'];
$query="select * from tbl_doctor where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
<html>
<body>
<div class="container-fluid mx-auto p-0">
	<div class="row my-5">
		<div class="col-sm-8 form-group rounded clearfix mx-auto" >
		<div class="card-group" style="">
			<div class="card">
				<img src="images/dd.jpg" />
			</div>
			<div class="card" style="background:#00838f;">
			<form action="doctorcode.php" method="post" class="form-horizontal" enctype="multipart/form-data">
				<div class="form-group h5 p-4">
					<label for="name ">Name : </label>
					<input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" value="<?php echo $row['name'] ?>" required>
				<!-- </div> -->
				<!-- <div class="form-group"> -->
					<label for="fname" >F'Name : </label>
					<input type="text" value="<?php echo $row['fname'] ?>" class="form-control" id="fname" placeholder="Enter Father's Name" name="fname" required>
				<!-- </div> -->
				<div class="form-group pt-3 h4">
					<label for="gender">Gender : </label>
					<input type="radio" name="gender" class="form-group" value="male" <?php if($row['gender']=='male'){ echo "checked";}?>/> Male
					<input type="radio" name="gender" class="form-group" value="female" <?php if($row['gender']=='female'){ echo "checked";}?>/> Female
				</div>
				<!-- <div class="form-group"> -->
					<label for="email" >Email : </label>
					<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
					<input type="email" value="<?php echo $row['email'] ?>" class="form-control" id="email" placeholder="Enter Your Email" name="email" required>
				<!-- </div> -->
				<!-- <div class="form-group"> -->
					<label for="password">Password : </label>
					<input type="text" value="<?php echo $row['password'] ?>" class="form-control" id="pass" placeholder="Enter Password" name="password" required>
				<!-- </div> -->
				<!-- <div class="form-group"> -->
					<label for="fees">Fees : </label>
					<input type="number" class="form-control" value="<?php echo $row['fees'] ?>" placeholder="Enter your Fees" name="fees" required>
					<label for="timing">Timing : </label>
					<input type="text" class="form-control" placeholder="Select Timing" value="<?php echo $row['timing'] ?>" name="timing"/>
					<label for="specialty">Specialty</label>
					<select class="form-control" name="specialty">
						<option class="form-control" ><?php echo $row['specialty']; ?></option>
						<option class="form-control">Surgeon</option>
						<option class="form-control">Physician</option>
						<option class="form-control">Eye Specialist</option>
						<option class="form-control">Neuro Surgon</option>
						<option class="form-control">Ortho Physician</option>
					</select>
					<label for="address">Address : </label>
					<textarea class="form-control" name="address"><?php echo $row['address'] ?></textarea>
					<label for="mobile">Mobile : </label>
					<input type="number" class="form-control" name="mobile" value="<?php echo $row['mobile'] ?>" placeholder="Enter mobile no."/>
					<label for="photo">Upload Photo : </label>
					<input type="file" name="photo" value="Upload Photo" class="btn btn-default py-2"/>
					<input type="submit" value="Update" class="btn btn-warning form-control mt-4 rounded h1"/>
				</div>
			</form>		
			</div>
		</div>
		</div>
	</div>
</div>
<?php
}
?>
</body>
</html>
<?php
}
?>