 <?php
	session_start();
	if($_SESSION['admin']=="")
	{
		header("Location:index.php");
	}
	else
	{
	error_reporting(0);
	$msg=$_REQUEST['msg'];
	if($msg=='1')
	{
?>
 <div class="alert alert-warning alert-dismissible" id="myAlert">
    <button type="button" class="close">&times;</button>
    <strong class="text-warning text-center">Deleted Successful</strong>
  </div>
<?php
}
	include("../connect.php");
	$query="select * from tbl_question order by date desc";
	$res=mysql_query($query);
	
?>
<html>
<head>
	<title>Discussion Board</title>
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
<div>
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
			<table class="table table-striped bg-warning">
				<tr class="bg-success">
					<th>S.No.</th>
					<th>Question</th>
					<th>Date</th>
					<th>Name</th>
					<th>Show Answer</th>
					<th>Delete</th>
				</tr>
				<?php
				$a=1;
				while($row=mysql_fetch_array($res,MYSQL_BOTH))
				{
				?>
				<tr>
					<td><?php echo $a; ?></td>
					<td><?php echo $row['question']; ?></td>
					<td><?php echo $row['date'] ?></td>
					<?php
					$pid=$row['pat_id'];
					$query2="select name from tbl_patient where pat_id='$pid'";
					$res2=mysql_query($query2);
					if($row2=mysql_fetch_array($res2,MYSQL_BOTH))
					{
						$pn=$row2['name'];
					}
					?>
					<td><?php echo $pn; ?></td>
					<td><a href="sans.php?qid=<?php echo $row['qid'] ?>"><i class="fas fa-eye"></i></a></td>
					<td><a href="delq.php?qid=<?php echo $row['qid'] ?>"><i class="fas fa-trash-alt"></i></a></td>
				</tr>
				<?php
				$a++;
				}
				
				?>
			</table>
			<h1 class="text-center">Total Questions :  <?php echo $a-1; ?></h1>
		</div>
	</div>
</body>
</html>
<?php
	}
?>