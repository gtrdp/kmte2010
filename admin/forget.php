<?php
if ($_POST["forget"]<>"") {
	$email = $_POST["email"];
	$new = substr(md5(microtime()),0,10);
	$count = count_db("select * from user where email = '$email' ");
	if ($count==0) alert("Email not registered");
	else {
		$newpw = crypt($new,64);
		mysql_query("update user set password = '$newpw' where email='$email' ");
		mailto($email,"New Password ".HOME,"Hello, your new password is $new");
		alert("New Password has been emailed to you ...");
	}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>KMTE | Log In</title>
	<link rel="stylesheet" type="text/css" href="<?php echo HOME;?>/admin/admin-skin.css" />
	<link rel="icon" type="image/x-icon"href="<?php echo HOME;?>/images/favicon.png" />
</head>

<body>

<div class="box" align="center" id="login">
	<a href="<?php echo HOME;?>"><img style="border:none" src="<?php echo HOME;?>/admin/images/kmte-logo.jpg" id="login-header"/></a>
	<form method="post" action="">
		<p>Your Email : <input name="email"/></p>
		<p><input name="forget" type="submit" value="Reset"/></p>
	</form>
	<br class="clear" /><br class="clear" />
</div>

</body>
</html>
