<?php
session_start();
if($_SESSION['doctor']=="")
{
	header("Location:login.php");
}
else
{
include("dheader.php");
?>
<html>
<head>
	<title>Doctor's Profile</title>
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
<!-- Content  -->
<div class="container-fluid">
	<div class="row" style="background:#fff;">
		<div class="col-sm-3 panel panel-body mt-5">
			<img src="images/bg1.jpg" class="img-responsive img-thumbnail"/>
		</div>
		<div class="col-sm-6 panel panel-body mt-5"  >
			<h3 class="text text-uppercase text-info">Online Doctor Appointment Solutions</h3>
			<blockquote class="text-justify text-dark h5 p-4">
				If you are a patient seeking quality healthcare at affordable prices, then Medicounsel is the place to be in! Our team of highly qualified and experienced doctors is here to provide to you the best possible healthcare services and medical treatments. You can book an appointment online with our Specialist Consultants. It is simple and quick.
			</blockquote>
		</div>
		<div class="col-sm-3 panel panel-body mt-5">
			<img src="images/online.png" class="img-responsive img-thumbnail "/>
		</div>
	</div>
	<div class="row" style="background:#fff;">
		<div class="col-sm-6 panel panel-body mt-5">
			<img src="images/devices.png" class="img-responsive img-thumbnail"/>
		</div>
		<div class="col-sm-6 panel panel-body mt-5">
			<h2 class="text text-uppercase text-info">Smart scheduling for more personalized care</h2>
			<blockquote class="text-justify text-dark h3" style="padding:8%;">
				Incorporate modern medicine into your practice. Whether you need to bring online visitors into your office, or coordinate telemedicine via video conferences or calls, Set more makes connecting with your patients easy and effortless.
			</blockquote>
		</div>
	</div>
</div>
<!-- Content End -->

	<!-- change Modal -->
		<!-- change pwd -->
	<div class="modal fade" id="changepwd">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header bg-info">
          <h4 class="modal-title">Modal Heading</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form action="dchangecode.php" method="post">
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
</body>
</html>
<?php
include("footer2.php");
}
?>