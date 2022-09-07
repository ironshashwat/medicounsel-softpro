<?php include("header.php"); ?>
<html>
<style>
.regbox
{
height:80%;
width:80%;
border:1px solid;
}
.lregbox
{
height:100%;
width:30%;
background:#6cafdf;
float:left;
}
.rregbox
{
height:100%;
width:70%;
float:left;
}
.boxreg
{
 height:40px;
 width:80%;
 margin:4%;
 font-size:30px
 display:inline-block;
 border-radius:5px;
 box-shadow:0 0 10px #0078d7;
}
.regin
{
width:100%;
}
</style>
<body>
<div class="container">
	<div class="regbox mx-auto my-4">
		<div class="lregbox"></div>
		<div class="rregbox">
			<form action="doctorcode.php" method="post" class="form-inline" enctype="multipart/form-data">
				<div class="input-group regin">
					<input type="text" name="name" placeholder="Name" class="boxreg bg-dark"/>
					<input type="text" name="fname" placeholder="Father's Name" class="boxreg bg-dark"/>
				</div>
				<div class="input-group regin">
					<input type="email" name="email" placeholder="Email" class="boxreg bg-dark"/>
					<input type="password" name="password" placeholder="Password" class="boxreg bg-dark"/>
				</div>
				<div class="input-group regin">
				<span class="boxreg" style="border:transparent;box-shadow:none;">
					<b>Gender :</b> Male <input type="radio" name="gender" value="male"/> Female
					 <input type="radio" name="gender" value="female"/>
				</span>
				<input type="number" class="boxreg bg-dark" placeholder="Enter your Fees" name="fees" required>
				</div>
				<div class="input-group regin">
					<input type="text" class="boxreg bg-dark" placeholder="Enter Timing" name="timing" required/>
					<select class="boxreg bg-dark" name="specialty">
						<option class="" value="">--Select Speciality--</option>
						<option class="form-control">Surgeon</option>
						<option class="form-control">Physician</option>
						<option class="form-control">Eye Specialist</option>
						<option class="form-control">Neuro Surgon</option>
						<option class="form-control">Ortho Physician</option>
					</select>
				</div>
				<div class="input-group regin">
					<textarea class="boxreg bg-dark" name="address"></textarea>
					<input type="number" class="boxreg bg-dark" name="mobile" placeholder="Enter mobile no."/>
				</div>
				<div class="input-group regin">
					<input type="file" name="photo" value="Upload Photo" class="btn btn-default bg-dark"/>
					<input type="hidden" class="boxreg"/>
				</div>
				<input type="submit" value="Register" class="btn btn-warning form-control mt-4 mx-auto w-50 rounded h1"/>
			</form>
		</div>
	</div>
</div>
</body>
</html>