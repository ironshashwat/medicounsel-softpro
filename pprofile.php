<?php 
session_start();
if($_SESSION['patient']=="")
{
	header("Location:index.php");
}
else
{
?>
<html>
<head>
	<title>Patient Profile</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style2.css"/>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link href="//fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Abel" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-md sticky-top text-center  navbar-dark navbar-fixed-top">
        <!-- Logo Area  -->
        <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="Logo" height="50" width="80"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#medicounselMenu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
		<!--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#medicounselMenu" aria-expanded="false"><span class="navbar-toggler-icon btntoggle"></span></button>-->
		<div class="collapse navbar-collapse" id="medicounselMenu">
        <!-- Menu Area -->
        <ul class="navbar-nav ml-auto">
			<li class="nav-item active">
				<a class="nav-link " href="pprofile.php">PROFILE <i class="fas fa-address-card"></i><span class="sr-only">(current)</span></a>
			</li>
            <li class="nav-item ">
                <a class="nav-link" href="#changepwd" data-toggle="modal" data-target="#changepwd">CHANGE PASSWORD <i class="fas fa-edit"></i></a>
            </li>
			<li class="nav-item">
                <a class="nav-link" href="plogout.php">LOGOUT <i class="fas fa-sign-out-alt"></i></a>
            </li>
        </ul>
        <!-- Appointment Button -->
        <!-- <a href="#" class="btn btn-danger ml-30">For <span>emergencies</span> Click here</a> -->
        </div>
    </nav>
	<div class="container-fluid">
	<div class="row my-5">
		<div class="col-sm-8 offset-2">
				<div class="card-deck">
					<div class="card p-3 dash">
					<a href="pbook.php">
						<div class="card-img text-center"><i class="fas fa-book-medical" style="color:#000;"></i></div>
						<div class="card-body">
							<h3 class="text-center">Book Appointment</h3>
						</div>
					</a>
					</div>
					<div class="card dash p-3">
					<a href="papp.php">
						<div class="card-img"><i class="fas fa-eye" style="color:#000;"></i></div>
						<div class="card-body">
							<h3 class="text-center">My Appointment</h3>
						</div>
					</a>
					</div>
				
					<div class="card p-3 dash">
					<a href="discuss.php">
						<div class="card-img"><i class="fas fa-chalkboard-teacher" style="color:#000;"></i></div>
						<div class="card-body">
							<h3 class="text-center">Discussion Board</h3>
						</div>
					</a>
					</div>
				</div>
		</div>
	</div>
	<div class="row my-4">
		<div class="col-sm-8 offset-2">
			<div class="card-deck">
					<div class="card p-3 dash">
					<a href="pupdate.php">
						<div class="card-img"><i class="fas fa-id-card-alt" style="color:#000;"></i></div>
						<div class="card-body">
							<h3 class="text-center">Update Profile</h3>
						</div>
					</a>
					</div>
					<div class="card p-3 dash">
					<a href="pfeed.php">
						<div class="card-img" style="height:100px;width:100%;" style="color:#000;"><i class="fas fa-comments" style="color:#000;"></i></div>
						<div class="card-body">
							<h3 class="text-center">Feedback</h3>
						</div>
					</a>
					</div>
				</div>
		</div>
	</div>
	<!-- change pwd -->
	<div class="modal fade" id="changepwd">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header bg-info">
          <h4 class="modal-title">Modal Heading</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form action="pchangecode.php" method="post">
							<div class="form-group">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text"><b class="text-success">@</b></span>
									</div>
									<input type="password" class="form-control" placeholder="Old Password" name="op" area-describedby="basic-addon1" required/>
								</div>
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text">
											<i class="fas fa-key text-success"></i>
										</span>
									</div>
									<input type="password" class="form-control"  placeholder="New password" name="np" required>
								</div>
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text">
											<i class="fas fa-key text-success"></i>
										</span>
									</div>
									<input type="password" class="form-control"  placeholder="Confirm New password" name="cnp" required>
								</div>
								<br/>
								<input type="submit" class="btn btn-primary" value="submit"/>
								</div>
						</form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary bg-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
</div>
</body>
</html>
<?php
 include("footer.php"); 
}
?>
