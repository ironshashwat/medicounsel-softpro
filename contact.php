<?php
include("header.php");
?>
<html>
<head>
<title>Contact US</title>
<style>

.intext
{
	border:0;
	border-radius:0;
	background: transparent;
    border-bottom: 1px solid #00838f;
	outline:0;
	width:80%;
	color:#00838f;
	padding:20px;font-size:25px;
	text-align:center;
}
.intext:active
{
	background:transparent;
}
h4
{
	color:#00838f;
}
</style>
</head>
<body style="color:#000;background:url('images/bg1.jpg');background-attachment:fixed;background-size:100% 100%;color:#00838f;">
<div class="container-fluid">
<div class="row">
<div class="col-sm-7">
	<form action="contactcode.php" method="post" class="form-group mx-auto text-info p-5">
		<h4>Name: </h4><input type="name" name="name" class="intext" />
		<h4>Email: </h4><input type="email" name="email" class="intext" />
		<h4>Mobile: </h4><input type="number" name="mobile" class=" intext"/>
		<h4>Message :</h4> <textarea name="message" class=" intext"></textarea>
		<br/>
		<input type="submit" class="btn btn-info w-25" value="send">
	</form>
</div>
<div class="col-sm-4">
	<div class="card m-4 mt-5">
		<div class="card-body">
			<div class="card-header bg-info"><h2>Contact-Us</h2></div>
			<div class="card-text text-success">
				<address class="form-control"><i class="fas fa-address-card text-info"></i> Address : Softpro India</address>
				<address class="form-control"><i class="fas fa-phone-volume text-info"></i> Mobile : +91 97690 76456  </address>
				<address class="form-control"> <i class="fas fa-envelope text-info"></i> Email :  info@medicounsel.com</address>
				<address class="form-control"><i class="fab fa-facebook text-info"></i> Facebook:<a class="text-info" href="https://www.facebook.com/stark2602">Like Us on Facebook</a></address>
			</div>
		</div>
	</div>
</div>
</div>
<div class="row">
<div class="col-sm-12">
	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14234.67795370525!2d80.94821!3d26.88224!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x730fe46201abc68a!2sSoftpro+India!5e0!3m2!1sen!2sin!4v1411887056855" width="100%" height="60%"></iframe>
</div>
</div>
</div>
</body>
</html>
<?php include("footer.php"); ?>