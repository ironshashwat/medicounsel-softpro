<?php
session_start();
if($_SESSION['patient']=="")
{
	header("Location:login.php");
}
else
{
include("pheader.php");
include("connect.php");
$query="select distinct specialty from tbl_doctor";
$res=mysql_query($query);
?>
<html>
<head>
<title>Search Doctor</title>
<script>
var i = 0;
var txt = 'Search Your Doctor Here .............'; 
var speed = 100; /* The speed/duration of the effect in milliseconds */

function typeWriter() {
  if (i < txt.length) {
    document.getElementById("text").innerHTML += txt.charAt(i);
    i++;
	if(i==txt.length)
	{
		i=0;
		document.getElementById("text").innerHTML ="";
	}
    window.setTimeout("typeWriter()", speed);
  }
}
</script>
</head>
<body onload="typeWriter()" style="background:url('images/crush.jpg');background-size:100% 100%;">
<div class="container">
<div id="text"></div>
<div class="row">
<div class="col-sm-8 mx-auto" style="margin-top:40px;">
<form action="book.php" class="form-inline" method="post">
<select name="spec" class="form-control w-75" id="sb">
	<option value="">--Select Speciality--</option>
	<?php 
	while($row=mysql_fetch_array($res,MYSQL_BOTH))
	{
	?>
	<option class="form-control"> <?php echo $row['specialty']; ?></option>
	<?php
	}
	?>
		
</select>
<button type="submit" class="btn btn-success w-25" style="height:60px;border-radius:0px 5px 5px 0px;box-shadow:0px 0px 20px #00838f;font-size:20px;">Search Doctor <i class="fab fa-searchengin"></i></button>
</form>
</div>
</div>
<p style="margin-top:250px;"></p>
</div>
</body>
</html>
<?php 
include("footer.php"); 
}
?>