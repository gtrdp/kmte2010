<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>KMTE | Log In</title>
	<link rel="stylesheet" type="text/css" href="<?php echo HOME;?>/admin/admin-skin.css" />
	<link rel="icon" type="image/x-icon"href="<?php echo HOME;?>/images/favicon.png" />
	<style type="text/css">
		#forgot {
			margin-left:20px; margin-top:10px;
			font-size:11px;
		}
	</style>
</head>

<body>

<div class="box" align="center" id="login">
	<a href="<?php echo HOME;?>"><img style="border:none" src="<?php echo HOME;?>/admin/images/login-header.jpg" id="login-header"/></a>
	<form method="post" action="">
		<table>
			<tr>
				<td><img src="<?php echo HOME;?>/admin/images/username.jpg" alt="username"/></td>
			</tr>
			<tr>
				<td><input type="text" name="username"/></td>
			</tr>
			
			<tr>
				<td><img src="<?php echo HOME;?>/admin/images/password.jpg" alt="password"/></td>
			</tr>
			<tr>
				<td><input type="password" name="password"/></td>
			</tr>
			<tr style="display:none">
				<td><input type="submit" value="Login" class="box" name="login"/></td>
			</tr>
		</table>
		<div align="left" id="forgot"><a href="<?php echo HOME;?>/member/forget/">Forget password?</a></div>
	</form>
	<br />
</div>

</body>
</html>
