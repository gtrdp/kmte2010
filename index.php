<?php
session_start();
include("scripts/config.php");
include("scripts/function.php");
mysql_connect(DBHOST,DBUSER,DBPASS);
mysql_select_db(DBTABLE);

global $url;
$url = explode("/",$_GET["url"]);
$redir = $url[0];

if ($redir=="") include("home.php");
elseif ($redir=="profil") include("profil.php");
elseif ($redir=="member") include("member.php");
elseif ($redir=="gallery") include("gallery.php");
elseif ($redir=="event") include("agenda.php");
elseif ($redir=="news" || $redir=="tutorial" || $redir=="infokuliah") include("post.php");

elseif ($redir=="contact") include("scripts/contact.php");
elseif ($redir=="subscribe") include("scripts/feed.php");
elseif ($redir=="sitemap") include("scripts/sitemap.php");
elseif ($redir=="search") include("scripts/search.php");
else echo "<html><head><title>404 - Not Found.</title></head><body><h1>404 - Not Found.</h1></body></html>";;
?>