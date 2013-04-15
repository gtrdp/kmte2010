<?php
global $url;
if ($url[2]=="") header("Location: ".HOME."/member/post/manage");
elseif ($url[2]=="manage") include("manage.php");
elseif ($url[2]=="add") include("add.php");
?>