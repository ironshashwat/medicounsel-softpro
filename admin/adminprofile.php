<?php 
session_start();
if($_SESSION['admin']=="")
{
	header("Location:index.php");
}
else
{
include("../connect.php");
$query="select * from tbl_doctor";
$res=mysql_query($query);
$d=0;
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
$d++;
}
$query2="select * from tbl_patient";
//$query2="select count(*) from tbl_patient";
$res2=mysql_query($query2);
$p=0;
while($row2=mysql_fetch_array($res2,MYSQL_BOTH))
{
$p++;
}
$query3="select * from tbl_contact";
//$query2="select count(*) from tbl_patient";
$res3=mysql_query($query3);
$c=0;
while($row3=mysql_fetch_array($res3,MYSQL_BOTH))
{
$c++;
}
$query4="select * from tbl_feedback";
$res4=mysql_query($query4);
$f=0;
while($row4=mysql_fetch_array($res4,MYSQL_BOTH))
{
$f++;
}
$query5="select * from tbl_appointment";
$res5=mysql_query($query5);
$a=0;
while($row5=mysql_fetch_array($res5,MYSQL_BOTH))
{
$a++;
}
?>
<html>
	<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link type="text/css" rel="stylesheet" href="../css/adstyle.css" />
	<link href="//fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Abel" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Lora:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext,vietnamese"
        rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800&amp;subset=latin-ext" rel="stylesheet">	
	</head>
	<body>
	<div class="container-fluid">
	<div class="row">
	<nav class="navbar bg-dark navigation" style="min-height:100%;">
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
		<a class="nav-link text-center" href="vdisboard.php">View Discussion Board</a>
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
			<h1 class="ml-5">Admin Dashboard</h1>
		</div>
			<div class="row text-success">
				<div class="card-deck m-3 caard">
					<div class="card boox">
					<a href="vdoctor.php">
						<div class="card-img text-center"><i class="fas fa-user-md h1 mt-5"></i></div>
						<div class="card-body">
							<div class="card-body">
								<h2 class="text-center"><?php echo $d; ?></h2>
								<h2 class="text-center">Doctor</h2>
							</div>
						</div>
					</a>
					</div>
					<div class="card boox">
					<a href="vpatient.php">
						<div class="card-img text-center"><i class="fas fa-users h1 mt-5"></i></div>
						<div class="card-body">
							<div class="card-body">
								<h2 class="text-center"><?php echo $p; ?></h2>
								<h2 class="text-center">Patient</h2>
							</div>
						</div>
					</a>
					</div>
					<div class="card boox">
					<a href="vcontact.php">
						<div class="card-img text-center"><i class="far fa-id-badge h1 mt-5"></i></div>
						<div class="card-body">
							<div class="card-body">
								<h2 class="text-center"><?php echo $c; ?></h2>
								<h2 class="text-center">Contacts</h2>
							</div>
						</div>
					</a>
					</div>
					<div class="card boox">
					<a href="vdisboard.php">
						<div class="card-img text-center"><i class="fas fa-comments h1 mt-5"></i></div>
						<div class="card-body">
							<div class="card-body">
								<h2 class="text-center">Discussion</h2>
							</div>
						</div>
					</a>
					</div>
				</div>
			</div>
			<div class="row m-3 text-success">
				<div class="card-deck caard">
					<div class="card boox">
					<a href="vfeed.php">
						<div class="card-img text-center"><i class="fas fa-clipboard-list h1 mt-5"></i></div>
						<div class="card-body">
							<div class="card-body">
								<h2 class="text-center"><?php echo $f; ?></h2>
								<h2 class="text-center">Feedback</h2>
							</div>
						</div>
					</a>
					</div>
					<div class="card boox">
					<a href="vapp.php">
						<div class="card-img text-center"><i class="fas fa-capsules h1 mt-3"></i></div>
						<div class="card-body">
							<div class="card-body">
								<h2 class="text-center"><?php echo $a; ?></h2>
								<h2 class="text-center">Appointments</h2>
							</div>
						</div>
					</a>
					</div>
					<div class="card boox">
					<a href="changepwd.php">
						<div class="card-img text-center"><i class="fab fa-keycdn h1 mt-5"></i></div>
						<div class="card-body">
							<div class="card-body">
								<h2 class="text-center">Change Password</h2>
							</div>
						</div>
					</a>
					</div>
					<div class="card boox">
					<a href="logout.php">
						<div class="card-img text-center"><i class="fas fa-sign-out-alt h1 mt-5"></i></div>
						<div class="card-body">
							<div class="card-body">
								<h1 class="text-center">Log out</h1>
							</div>
						</div>
					</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
</body>
</html>
<?php
}
?>