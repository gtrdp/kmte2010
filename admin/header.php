<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>KMTE | Admin Area</title>
	<link rel="stylesheet" type="text/css" href="<?php echo HOME;?>/admin/admin-skin.css" />
	<link rel="icon" type="image/x-icon"href="<?php echo HOME;?>/images/favicon.png" />
	<script>
	function showpost(cat) {
		window.open('<?php echo HOME;?>/member/showpost/'+cat, 'popupwindow', 'scrollbars=yes,width=550,height=520');
	}
	</script>
</head>

<body>

<?php global $url;?>

<div id="container">
	<div>
		<div class="vertical-navi" id="one<?php if($url[1]=="dashboard") echo "-active";?>">
			<span id="tab-one" class="tab"><a href="<?php echo HOME;?>/member/dashboard/">Home</a></span>
		</div>
		<div class="vertical-navi" id="two<?php if($url[1]=="post") echo "-active";?>">
			<span id="tab-two" class="tab"><a href="<?php echo HOME;?>/member/post">Post</a></span>
		</div>
		<div class="vertical-navi" id="three<?php if($url[1]=="feedback") echo "-active";?>">
			<span id="tab-three" class="tab"><a href="<?php echo HOME;?>/member/feedback">Feedback</a></span>
		</div>
		<div class="vertical-navi" id="four<?php if($url[1]=="gallery") echo "-active";?>">
			<span id="tab-four" class="tab"><a href="<?php echo HOME;?>/member/gallery">Gallery</a></span>
		</div>
		<div class="vertical-navi" id="five<?php if($url[1]=="notif") echo "-active";?>">
			<span id="tab-five" class="tab"><a href="<?php echo HOME;?>/member/notif">Notif</a></span>	
		</div>
	</div>

	<div class="box" id="dashboard">
		<div id="info">
			<div id="photo">
				<img src="<?php echo HOME;?>/admin/images/wong.jpg"/>			</div>
			<div id="userinfo">
				<h3>Welcome!</h3>
				<img src="<?php echo HOME;?>/admin/images/hor-dash.jpg"/>
				<table>
					<tr>
						<td>username</td><td>: <?php echo $_SESSION["username"];?></td>
					</tr>
					<tr>
						<td>nim</td><td>: <?php $user = $_SESSION["username"]; echo get_db("select * from user where username='$user'")->nim;?></td>
					</tr>
				</table>
				<small><a href="<?php echo HOME;?>/member/logout">Logout</a></small>
			</div>
		</div>
		<a href="<?php echo HOME;?>"><img style="border:none" src="<?php echo HOME;?>/admin/images/kmte-logo.jpg" alt="logo KMTE" id="kmte-logo"/></a>
		<br class="clear"/>