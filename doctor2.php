<?php include("header.php"); ?>
<html>
<head>
  <title>Register</title>
  <link href="style.css" rel="stylesheet"/>
</head>
<body style="background:url('images/crush.jpg');background-repeat:no-repeat;background-size:100% 100%;background-attachment:fixed;">
<div class="container">
	<div class="regbox mx-auto my-4">
		<div class="lregbox">
			<div id="iml"></div>
		</div>
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
				<span class="boxreg bg-dark" style="box-shadow:none;">
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
					<textarea class="boxreg bg-dark" name="address" placeholder="Enter Address"></textarea>
					<input type="number" class="boxreg bg-dark" name="mobile" placeholder="Enter mobile no."/>
				</div>
				<div class="input-group regin">
					<input type="file" name="photo" value="Upload Photo" class="boxreg bg-dark" style="width:80%;"/>
				</div>
				<input type="submit" value="Register" class="btn btn-warning form-control mx-auto mt-2
				rounded h1 w-25"/>
				<br/>
			</form>
		</div>
	</div>
</div>
</body>
</html>
<?php include("footer.php"); ?>