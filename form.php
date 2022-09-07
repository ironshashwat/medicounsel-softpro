<?php 
include("header.php");
?>
<html>
<head>
<title>Register</title>
<style>
.inbox
{
height:40px;
width:60%;
border:0;
background:transparent;
color:#fff;
border-bottom:2px solid red;
text-align:center;
padding:10px;
margin:5%;
}
</style>
</head>
<body>
<div class="container">
<div class="row bg-dark m-5">
	<form action="doctorcode.php" method="post" enctype="multipart/form-data">
	<div class="col-sm-6 float-left bg-dark">
		<input type="text" name="name" placeholder="Name" class="bg-dark inbox"/><br/>
		<input type="text" name="fname" placeholder="Father's Name" class="bg-dark inbox"/><br/>
		<input type="email" name="email" placeholder="Email" class="bg-dark inbox"/><br/>
		<input type="password" name="password" placeholder="Password" class="bg-dark inbox"/><br/>
		<select name="gender" class="bg-dark inbox">
			<option value="">--Select Gender--</option>
			<option>male</option></option>
			<option>female</option>
		</select>
		<input type="number" class="inbox bg-dark" name="mobile" placeholder="Enter mobile no."/>
	</div>
	<div class="col-sm-6 float-right bg-dark">
		<input type="text" class="bg-dark inbox" placeholder="Enter Timing" name="timing" required/>
		<select class="bg-dark inbox" name="specialty">
			<option class="" value="">--Select Speciality--</option>
			<option>Surgeon</option>
			<option>Physician</option>
			<option>Eye Specialist</option>
			<option>Neuro Surgon</option>
			<option>Ortho Physician</option>
		</select>
		<textarea class="bg-dark inbox" name="address" placeholder="Enter Address"></textarea>
		<input type="file" name="photo" value="Upload Photo" class="bg-dark inbox" style="width:;"/>
		<input type="number" class="bg-dark inbox" placeholder="Enter your Fees" name="fees" required><br/>
	</div>
	<input type="submit" value="Register" class="btn btn-warning form-control mx-auto mt-2
				rounded h1 w-25"/>
	</form>
</div>
</div>
</body>
</html>