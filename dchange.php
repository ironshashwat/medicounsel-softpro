<?php
include("dheader.php");
?>
<html>
<head>
<title>Change password</title>
</head>
<body>
<form action="dchangecode.php" method="POST">
Old Password
<input type="text" name="op"/>
<br/><br/>
New Password
<input type="text" name="np"/>
<br/><br/>
Confirm Password
<input type="text" name="cnp"/>
<br/><br/>
<input type="submit" value="Change Password"/>
</form>
</body>
</html>
