 <?php
include("connect.php");
$n=$_POST['name'];
$fn=$_POST['fname'];
$g=$_POST['gender'];
$e=$_POST['email'];
$p=$_POST['password'];
$fee=$_POST['fees'];
$t=$_POST['timing'];
$s=$_POST['specialty'];
$a=$_POST['address'];
$m=$_POST['mobile'];
$filename=$_FILES['photo']['name'];
// echo $filename;
$tmp_name=$_FILES['photo']['tmp_name'];
$location="doctor/";
$query="update tbl_doctor name='$n',fname='$fn',gender='$g',email='$e',password='$p',fees=$fee,timing='$t',specialty='$s',address='$a',mobile='$m',photo='$filename'";
mysql_query($query);
move_uploaded_file($tmp_name,$location.$filename);
header("Location:login.php");
?>