<?php
session_start();
if($_SESSION['admin']=="")
{
	header("Location:index.php");
}
else
{
?>
<html>
<head>
	<title>Change Password</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link type="text/css" rel="stylesheet" href="../css/adstyle.css" />
	<link href="//fonts.googleapis.com/css?family=Abel" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Lora:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext,vietnamese"
        rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800&amp;subset=latin-ext" rel="stylesheet">
	<style>
	.chbox
	{
		height:60%;
		width:50%;
		margin:0px auto;
		padding:5%;
		padding-left:6%;
		margin-top:8%;
		background:rgba(10,01,10,0.7);
	}
	.chb
	{
	 height:48px;
	 width:80%;
	 padding:4%;
	 margin:2%;
	 border:0;
	 outline:0;
	 color:#fff;
	 border-bottom:2px solid red;
	 background:transparent;
	 text-align:center;
	 margin-left:6%;
	 margin-top:1%;
	}
	.chb:active
	{
	border:0px;
	}
	.chbtn
	{
	margin-left:28%;
	margin-top:3%;
	}
	</style>
</head>
<body>
<nav class="navbar bg-dark navigation">
  <ul class="navbar-nav">
  <li><div class="navbar-brand"><a href="adminprofile.php"><i class="fas fa-user-tie"></i></a></div></li>
    <li class="nav-item p-2">
      <a class="nav-link text-center" href="vdoctor.php">View All Doctors</a>
    </li>
    <li class="nav-item p-2">
      <a class="nav-link text-center" href="vpatient.php">View All Patients</a>
    </li>
    <li class="nav-item p-2">
      <a class="nav-link text-center" href="vcontact.php">View All Contacts</a>
    </li>
	<li class="nav-item p-2">
		<a class="nav-link text-center" href="#">View Discussion Board</a>
	</li>
	<li class="nav-item p-2">
		<a class="nav-link text-center" href="vfeed.php">View All Feedback</a>
	</li>
	<li class="nav-item p-2">
		<a class="nav-link text-center" href="vapp.php">View All Appointments</a>
	</li>
	<li class="nav-item p-2">
		<a class="nav-link text-center" href="changepwd.php">Change Password</a>
	</li>
	<li class="nav-item p-2">
		<a class="nav-link text-center" href="logout.php">Logout</a>
	</li>
  </ul>
</nav>
		<div class="container-fluid contents">
		<div class="row bg-success">
			<h1 class="text-center" style="margin-left:34%;">Change Password</h1>
		</div>
<div class="container">
<div class="chbox">
	<form class="form-group" action="changecode.php" method="post">
		<div class="input-group">
		<input type="password" name="op" class="chb" placeholder="Old Password"/>
		</div>
		<br/>
		<div class="input-group">
		<input type="password" name="np" class="chb" placeholder="New Password"/>
		</div>
		<br/>
		<div class="input-group">
		<input type="password" name="cnp" class="chb" placeholder="Confirm New Password"/>
		</div>
		<input type="submit" value="Change Password"class="btn btn-success chbtn"/>
	</form>
</div>
</div>
		</div>
	</div>

</body>
</html>
<?php
}
?>