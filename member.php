<?php
global $url;
$file = $url[1];
if ($url[1]=="profil") {
	include("scripts/staff.php");
	exit();
}
if ($url[1]=="register") {
	include("scripts/register.php");
	exit();
}
if ($url[1]=="forget") {
	include("admin/forget.php");
	exit();
}

if ($_POST["login"]<>"") {
	$username = $_POST["username"];
	$password = crypt($_POST["password"],64);
	$_SESSION["username"] = $username;
	$_SESSION["password"] = $password;
}

if ($url[1]=="register-maba") {
	include("scripts/registrasi.php");
	exit();
}

if (!is_login()) {
	include("admin/login.php");
	exit();
}
elseif (file_exists("admin/$file.php")) include("admin/$file.php");
elseif ($file=="") header ("Location: ".HOME."/member/dashboard/");
?>