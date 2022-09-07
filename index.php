<?php
session_start();
session_destroy();
include("header.php"); 
include("connect.php");
$query="select * from tbl_feedback";
$res=mysql_query($query);
?>
<html>
<head>
	<title>MediCounsel</title>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css" rel="stylesheet"/>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css" rel="stylesheet"/>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
	<style>
	
	</style>
</head>
<body>

<div class="container-fluid">
	<div class="row sliderr">
		<div id="demo" class="carousel slide" data-ride="carousel">

		<!-- Indicators -->
			<ul class="carousel-indicators">
				<li data-target="#demo" data-slide-to="0" class="active"></li>
				<li data-target="#demo" data-slide-to="1"></li>
				<li data-target="#demo" data-slide-to="2"></li>
			</ul>
  
			<!-- The slideshow -->
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="images/MediCounsel_BC.jpg" alt="Medicounsel" class="img-responsive">
				</div>
				<div class="carousel-item">
					<img src="images/one_medical_brochure.jpg" alt="broucher">
				</div>
				<div class="carousel-item">
					<img src="images/hero1.jpg" alt="Doctor">
				</div>
			</div>
		</div>
	</div>
	<div class="row slidetxt">
		<div class="col-md-12">
			<img src="images/logo.png" alt="Logo" height="50" width="80">
			<h3 class="h3 text-info">Medicounsel</h3><br/>
			<h1 class="h1 text-info">Search your Doctor,<br/>Make an appointment</h1><br/>
			<h3 class="h3 text-info">A new and modern way to approach your Doctor.</h3><br/>
			<a href="login.php" class="btn btn-success rounded joom">Book Appointment</a>
		</div>
	</div>
	<div class="row" style="background:#fff; margin-top:-30%;">
		<div class="col-sm-6 panel panel-body mt-5">
			<img src="images/customer-bubble.png" class="img-responsive img-thumbnail"/>
		</div>
	
		<div class="col-sm-6 panel panel-body mt-5"  >
			<h3 class="text text-uppercase text-info text-center mt-5">A 24/7 support team that's got your back</h3>
			<h4 class="text-justify text-dark h5 pl-1 px-3 pr-5 mt-5">
				Our team of support specialists is available around the clock to ensure continued access to your appointment calendar. Need help or have a question?
			</h4>
		</div>
	</div>
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
		<div class="about mt-1" style="background:#fff;">
			<div  class="col-md-4" id="labout">
				<h1 class="text-center p-3"><u style="color:#fb7922;">About</u></h1>
				<h4 class="text-center text-dark">Medicounsel is a plateform for Doctors and Patient to make their work easier, and saves time. Here you can book your appointment from your fevourite doctors. Discuss with other pateints and give feedback.</h4>
				&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="about.php" class="btn btn-success">Read More</a>
				<p>
					
				</p>
			</div>
			<div class="col-md-8" id="rabout">
				<h1 class="text-center"><u style="color:#fb7922;">Feedbacks</u></h1>
				<div class="feed-slider" style="height:340px;border:0;">
					<?php
					while($row=mysql_fetch_array($res,MYSQL_BOTH))
					{
					?>
					<div>
					<?php 
					$pid=$row['pat_id'];
					$query2="select name from tbl_patient where pat_id='$pid'";
					$res2=mysql_query($query2);
					if($row2=mysql_fetch_array($res2,MYSQL_BOTH))
					{
					?>
					<h1 class="text-center text-dark"><?php echo $row2['name'] ?></h1>
					<hr style="border:2px solid black;"/>
					<hr style="border:2px solid black;"/>
					<?php } ?>
					<h1 class="text-center text-dark"><span class="icon fa fa-quote-left text-warning"></span></h1>
					<h3 class="text-center text-dark"><?php echo $row['feedback'] ?></h3>
					</div>
					<?php
					}
					?>
				</div>
			</div>
		
		</div>
	</div>
	
	<script type="text/javascript">
    $(document).ready(function() {
        $(".feed-slider").owlCarousel({
             items : 8,
            itemsTablet : [900,2],
            itemsMobile : [680,1],
			singleItem:true,
            navigation: true,
			autoplay:true
          });
        $(".feed-slider").owlCarousel({
            items : 4,
            itemsTablet : [900,2],
            itemsMobile : [680,1],
			navigation:true,
			pagination:true,
			autoplay:true
          });
    });

	</script>

	<div class="row" style="background:#fff;">
		<div id="" class="col-md-12">
			<div class="specc" style="background-image:url('images/sur.png');text-align:center;"><br/><br/><h2>Surgon</h2></div>
			<div class="specc" style="background-image:url('images/neuro.png');text-align:center;" ><br/><br/><h2>Neuro</h2></div>
			<div class="specc" style="background-image:url('images/ortho.png');text-align:center;" ><br/><br/><h2>Ortho</h2></div>
			<div class="specc" style="background-image:url('images/heart (1).png');text-align:center;" ><br/><br/><h2>Physician</h2></div>
			<div class="specc" style="background-image:url('images/eye.png');text-align:center;" ><br/><h2>Eye Specialist</h2></div>
		</div>
	</div>
	<div class="row" style="background:#00a5cb;">
	<div class="col-sm-12">
		<h1 class="text-center">Book appointments in and out of the clinic</h1>
		<h5 class="text-center text-dark py-5 ">Here you can book appointment of your Doctors from our websites. We provide a great platform for doctors and as well as patients to communicate them. Patients can contact with doctors and take their appointment. They can easily print their Recipts without waiting in the que. </h5>
	</div>
	</div>
	
	<!-- <div class="row" style="background:#7986cb; height:80%;"> -->
		<!-- <div class="h1 text-warning mb-4"style="text-align:center;">Our Facility</div> -->
		<!-- <div class=" card-deck card-column"> -->
		<!-- <div class="card h-50 bg-primary faccard" style="width:400px;"> -->
			<!-- <!-- <img class="card-img-top h-100" src="images/sm.jpg" alt="Card image" style="height:250px;width:100%"> --> -->
			<!-- <div class="card-img" style="height:600px;width:100%;background:url('images/sm.jpg');background-size:100% 100%;background-repeat:no-repeat;"></div> -->
			<!-- <div class="card-body"> -->
				<!-- <h4 class="card-title">Shashwat</h4> -->
				<!-- <p class="card-text">Some example text some example text. Shashwat is an engineer</p> -->
				<!-- <a href="#" class="btn btn-warning joom">See Profile</a> -->
			<!-- </div> -->
		<!-- </div> -->
		<!-- <div class="card h-50 bg-primary faccard" style="width:400px;"> -->
			<!-- <!-- <img class="card-img-top" src="images/hero1.jpg" alt="Card image" style="width:100%"> --> -->
			<!-- <div class="card-img" style="height:600px;width:100%;background:url('images/sm.jpg');background-size:100% 100%;background-repeat:no-repeat;"></div> -->
			<!-- <div class="card-body"> -->
				<!-- <h4 class="card-title">Anuj</h4> -->
				<!-- <p class="card-text">Some example text some example text. Shashwat is an architect and engineer</p> -->
				<!-- <a href="#" class="btn btn-warning joom">See Profile</a> -->
			<!-- </div> -->
		<!-- </div> -->
		<!-- <div class="card h-50 bg-primary faccard" style="width:400px;"> -->
			<!-- <!-- <img class="card-img-top" src="images/2.jpg" alt="Card image" style="height:70%;width:100%"> --> -->
			<!-- <div class="card-img" style="height:600px;width:100%;background:url('images/2.jpg');background-size:100% 100%;background-repeat:no-repeat;"></div> -->
			<!-- <div class="card-body"> -->
				<!-- <h4 class="card-title">Priya</h4> -->
				<!-- <p class="card-text">Some example text some example text. Shashwat is an architect and engineer</p> -->
				<!-- <a href="#" class="btn btn-warning joom">See Profile</a> -->
			<!-- </div> -->
		<!-- </div> -->
		<!-- <div class="card h-50 bg-primary" style="width:400px;"> -->
			<!-- <!-- <img class="card-img-top" src="images/hero1.jpg" alt="Card image" style="width:100%"> --> -->
			<!-- <div class="card-body"> -->
				<!-- <h4 class="card-title">Suraj</h4> -->
				<!-- <p class="card-text">Some example text some example text. Shashwat is an architect and engineer</p> -->
				<!-- <a href="#" class="btn btn-warning joom">See Profile</a> -->
			<!-- </div> -->
		<!-- </div> -->
	<!-- </div> -->
	<!-- </div> -->
	
</div>
</body>
</html>
<?php include("footer.php"); ?>
