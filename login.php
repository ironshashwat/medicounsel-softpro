<?php include("header.php");?>

<html>
<head>
	<title>::Login::</title>
	<style>
	</style>
	<script>
		$(document).ready(function(){
		$(".close").click(function(){
		$("#myAlert").alert("close");
		});
		});
</script>
</head>
<body>
<div class="container">
<div class="row mx-auto">
<?php
error_reporting(0); 
$msg=$_REQUEST['msg'];
if($msg==3)
{
?>
  <div class="alert alert-warning alert-dismissible" style="margin-left:30%;" id="myAlert">
    <button type="button" class="close">&times;</button>
    <strong class="text-warning">Warning! </strong>Incorrect Email or Password.
  </div>
<?php
}
?>
</div>
	<div class="row mt-2 card-deck log">
		<div class="card col-sm-6 m-5 bg-primary logincard"  style="margin:10%;">
			<img class="card-image h-10 w-50 mx-auto rounded-circle pt-1" src="images/log.jpg" />
			<!-- <h1 class="text-center m-5"><i class="fas fa-user-md"></i></h1> -->
			<div class="card-body card-image-overlay h-10">
				<h1 class="card-title text-center text-white">Doctor</h1>
				<p class="card-text text-white text-center h-4">Login for doctors click below</p>
				<button class="btn btn-warning joom w-75 mx-5 " data-toggle="modal" area-pressed="false" data-target="#doctorModal" >Login</button>
			</div>
		</div>
		<div class="card col-sm-6 m-5 bg-primary logincard" style="margin:10%;">
			<!-- <h1 class="text-center m-5"><i class="fas fa-user-plus"></i></h1> -->
			<img class="card-image h-10 w-50 mx-auto rounded-circle pt-1" src="images/pf4.jpg"/>
			<div class="card-body card-image-overlay h-10">
				<h1 class="card-title text-center text-white">Patient</h1>
				<p class="card-text text-white h-4 text-center">Login for doctors click below</p>
				<button class="btn btn-warning joom w-75 mx-5 " data-toggle="modal" area-pressed="false" data-target="#patientModal">Login</button>
			</div>
		</div>
		
	</div>
</div>
<div class="modal fade" id="patientModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
						<form action="logcode.php?msg=1" method="post">
							<div class="form-group">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text"><b class="text-success">@</b></span>
									</div>
									<input type="email" class="form-control" placeholder="Email" name="email" area-describedby="basic-addon1" required/>
								</div>
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text">
											<i class="fas fa-key text-success"></i>
										</span>
									</div>
									<input type="password" class="form-control"  placeholder="Enter password" name="password" required>
								</div>
								<br/>
								<input type="submit" class="btn btn-primary" value="submit"/>
								</div>
						</form>
                </div>
            </div>
        </div>
    </div>
</div>
	<div class="modal fade" id="doctorModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
						<form action="logcode.php?msg=2" class="was-validated p-4" method="post">
							<div class="form-group">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text"><b class="text-success">@</b></span>
									</div>
									<input type="email" class="form-control" placeholder="Email" name="email" area-describedby="basic-addon1" required/>
								</div>
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text">
											<i class="fas fa-key text-success"></i>
										</span>
									</div>
									<input type="password" class="form-control"  placeholder="Enter password" name="password" required>
								</div>
								<input type="submit" class="btn btn-primary" value="submit"/>
							</form>
                </div>
            </div>
        </div>
    </div>

<body>
<?php include("footer.php"); ?>
</html>
