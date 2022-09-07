<?php 
session_start();
session_destroy();
include("header.php");
?>
<html>
<head>
<title>Patient Register</title>
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
outline:0;
}
</style>
</head>
<body>
<div class="container">
<div class="row bg-dark m-5 w-75 mx-auto">
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
	</div>
	<div class="col-sm-6 float-right bg-dark">
		<input type="number" class="bg-dark inbox" placeholder="Enter Pin Code" name="pin" required/>
		<textarea class="bg-dark inbox" name="address" placeholder="Enter Address"></textarea>
		<input type="number" class="bg-dark inbox" placeholder="Enter your Age" name="age" required><br/>
		<input type="number" class="inbox bg-dark" name="mobile" placeholder="Enter mobile no."/>
	</div>
	 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Register" class="btn btn-warning form-control mx-auto mt-2
				rounded h1 " style="width:30%;"/>
	</form>
</div>
</div>
</body>
</html>
<?php include("footer.php");
 ?>