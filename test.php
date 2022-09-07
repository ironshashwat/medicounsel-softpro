<?php
session_start();
session_destroy();
include("header.php"); 
include("connect.php");
$query="select * from tbl_feedback";
$res=mysql_query($query);
?>
<!Doctype html>
<html>
<head>
	<title>MediCounsel</title>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css" rel="stylesheet"/>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css" rel="stylesheet"/>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
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
					<div class="carousel-item" style="width:100%;">
						<img src="images/one_medical_brochure.jpg" alt="broucher" class="img-responsive">
					</div>
					<div class="carousel-item" style="width:100%;">
						<img src="images/hero1.jpg" alt="Doctor" class="img-responsive">
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
		<div class="row">
		<div class="about">
			<div  class="col-md-4" id="labout">
				<h1 class="text-center p-3"><u style="color:#fb7922;">About</u></h1>
				<h4 class="text-center">Medicounsel is a plateform for Doctors and Patient to make their work easier, and saves time. Here you can book your appointment from your fevourite doctors. Discuss with other pateints and give feedback.</h4>
				&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="about.php" class="btn btn-success">Read More</a>
				<p>
					
				</p>
			</div>
			<div class="col-md-8" id="rabout">
				<h1 class="text-center"><u style="color:#fb7922;">Feedbacks</u></h1>
				<div class="feed-slider" style="height:340px;width:100%;margin-left:;">
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
					<h1 class="text-center"><?php echo $row2['name'] ?></h1>
					<hr style="border:5px solid black;"/>
					<hr style="border:5px solid black;"/>
					<?php } ?>
					<h1 class="text-center"><span class="icon fa fa-quote-left"></span></h1>
					<h3 class="text-center"><?php echo $row['feedback'] ?></h3>
					</div>
					<?php
					}
					?>
				</div>
			</div>
		
		</div>
	</div>
		<div class="row">
		<div id="" class="col-md-12">
			<div class="specc" style="background-image:url('images/sur.png');text-align:center;"><br/><br/><h2>Surgon</h2></div>
			<div class="specc" style="background-image:url('images/neuro.png');text-align:center;" ><br/><br/><h2>Neuro</h2></div>
			<div class="specc" style="background-image:url('images/ortho.png');text-align:center;" ><br/><br/><h2>Ortho</h2></div>
			<div class="specc" style="background-image:url('images/heart (1).png');text-align:center;" ><br/><br/><h2>Physician</h2></div>
			<div class="specc" style="background-image:url('images/eye.png');text-align:center;" ><br/><h2>Eye Specialist</h2></div>
		</div>
	</div>
		<div class="row">
			<div class="col-sm-3">
				<img src="images/doc11.jpg" alt="image" class="img-responsive"/>
			</div>
			<div class="col-sm-3">
				<img src="images/bp.jpg" alt="image" class="img-responsive"/>
			</div>
			<div class="col-sm-3"></div>
			<div class="col-sm-3"></div>
		</div>
	
	</div>
</body>
</html>
<?php include("footer.php"); ?>
