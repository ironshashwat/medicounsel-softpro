<?php
session_start();
if($_SESSION['doctor']=="")
{
	header("Location:login.php");
}
else
{
include("connect.php");
$aid=$_REQUEST['aid'];
$query="update tbl_appointment set status='N' where appid='$aid' ";
mysql_query($query);
header("Location:cancelapp.php");
}
?>