<?php
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
<div class="card-header bg-dark w-100 text-white" style="border-bottom:20px double #dd5044;"><h5 class="w-100 text-center">Admin</h5></div>
<div class="container">
		<div class="outer bg-dark">
			<div id="ls">
				<div class="company">
				
				</div>
			</div>
			<div id="rs">
				<div class="adm"><i class="fas fa-user-tie h1 adminn"></i></div>
				<form class="form-group" action="logcode.php" method="post">
					<div class="input-group my-4 mx-5 w-75" >
						<div class="input-group-prepend inputbox">
							<span class="input-group-text"><i class="fas fa-at"></i></span>
						</div>
						<input type="email" name="email" class="form-control" placeholder="Email">
					</div>
					<div class="input-group my-4 mx-5 w-75">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-unlock-alt"></i></span>
						</div>
						<input type="password" name="password" placeholder="Password" class="form-control w-50"/>
					</div>
					<input type="submit" value="login" class="btn btn-lg btn-success w-75 ml-5"/>
				</form>
				<h5 class="text-center"><a href="../index.php">Back To Home</a></h5>
			</div>
		</div>
	</div>
</body>
</html>
<?php include("../footer2.php"); ?>