<?php
function get_db($str) {
	$query = mysql_query($str);
	$result = @mysql_fetch_object($query);
	return $result;
}
function count_db($str) {
	mysql_query($str);
	return mysql_affected_rows();
}
function excerpt($str) {
	echo substr(strip_tags($str),0,300)."...";
}
function permalink($id) {
	$result = get_db("select * from post where id=$id");
	$id = $result->id;
	$cat = $result->category;
	$urlize = str_replace(" ","-",strtolower($result->title));


	if ($cat == "KM" || $cat == "seminar" || $cat == "lowongan" || $cat == "infolomba" || $cat == "beasiswa") {
		$maincat = "news";
		$url = "$maincat/$cat/$id/$urlize/";
		return $url;
	} elseif ($cat == "SKI" || $cat == "STL" || $cat == "SIE"){
		$maincat = "tutorial";
		$url = "$maincat/$cat/$id/$urlize/";
		return $url;
	} elseif ($cat == "daftardosen" || $cat == "infopraktikum" || $cat == "infonilai" || $cat == "soal"){
		$maincat = "infokuliah";
		$url = "$maincat/$cat/$id/$urlize/";
		return $url;
	} elseif ($cat == "event"){
		$url = "$cat/$id/$urlize/";
		return $url;
	} else {
		$url = "profil/departemen/$urlize/";
		return $url;
	}
}
function userlink($id) {
	$user = get_db("select * from user where id=$id");
	$username = $user->username;
	$link = HOME . "/member/profil/$id/$username/";
	return $link;
}
function gallelink($id) {
	$link = HOME . "/galleries/$id/";
	return $link;
}
function post_count() {
	echo count_db("select * from post");
}
function cat_count($cat) {
	echo count_db("select * from post where category = '$cat'");
}
function cat_dash($cat){
	return count_db("select * from post where category = '$cat'");
}
function is_login() {
	$username = $_SESSION["username"];
	$password = $_SESSION["password"];
	if (count_db("select * from user where username='$username' and password='$password'")==0) return false;
	elseif ($name = "") return false;
	else return true;
}
function username() {
	if (!is_login()) return;
	$username = $_SESSION["username"];
	$password = $_SESSION["password"];
	$user = get_db("select * from user where username='$username' and password='$password'");
	return $user->username;
}
function userID() {
	if (!is_login()) return;
	$username = $_SESSION["username"];
	$user = get_db("select * from user where username='$username'");
	return $user->id;
}
function redirect_back() {
	echo "<script>setTimeout(function () {history.go(-1);},1000)</script>";
}
function alert($msg) {
	echo "<script>alert('$msg')</script>";
}
function redirect($loc) {
	echo "<script>location = '$loc'</script>";
}
function mailto($to,$subject,$msg) {
	$from = "Autis <autis@kmte-ugm.org>";
	$header = "From: $from \r\n";
	$header .= "Reply-to: $from \r\n";
	$header .= "Content-type: text/plain";
	mail($to,$subject,$msg,$header);
}
function post_notif($id) {
	$post = get_db("select * from post where id=$id");
	$link = permalink($id);
	$query = mysql_query("select * from user");
	$content = $post->content."\n ======================== \n".$link;
	while ($result = mysql_fetch_object($query)) {
		mailto($result->email,$post->title,$content);
	}
}
function comment_notif($id) {
	$comm = get_db("select * from feedback where postid=$id order by date desc");
	$post = get_db("select * from post where id=$id");
	$link = permalink($id);
	$query = mysql_query("select * from feedback where postid=$id");
	$content = $post->title."\n ====================== \n".$feed->content."\n ======================== \n".$link;
	while ($result = mysql_fetch_object($query)) {
		mailto($result->email,$post->title,$content);
	}
}
function title () {
	global $url;
	$home = HOME;
	$judul = JUDUL;
	if ($url[0]<>"") {
		$i = 0;
		while ($url[count($url)-$i]=="") {
			$i++;
		}
		$last = str_replace("-"," ",$url[count($url)-$i]);
		if (strlen($last) == 3) $last = strtoupper($last); else $last = ucwords($last);
	}
	else $last = DESKRIPSI; 
	$title = $judul . " | " . $last;
	echo $title;
}
function thumb ($str) {
	$home = HOME;
	$str = explode(" ",strtolower($str));
	if ($str[1]=="") $str = "http://img.hokya.com/$str[0]/";
	else $str = "http://img.hokya.com/$str[1]/";
	echo $str;
}
function gravatar ($email) {
	$grav_url = "http://www.gravatar.com/avatar/" . md5( strtolower( trim( $email ) ) ) . "?d=monsterid&s=50";
	return $grav_url;
}
function sms ($to,$text) {
	$user = "user";
	$password = "password";
	$api_id = "xxxx";
	$baseurl ="http://api.clickatell.com";
	$text = urlencode($text);
	// auth call
	$url = "$baseurl/http/auth?user=$user&password=$password&api_id=$api_id";
	// do auth call
	$ret = file($url);
	// split our response. return string is on first line of the data returned
	$sess = split(":",$ret[0]);
	if ($sess[0] == "OK") {
		$sess_id = trim($sess[1]); // remove any whitespace
		$url = "$baseurl/http/sendmsg?session_id=$sess_id&to=$to&text=$text";
		// do sendmsg call
		$ret = file($url);
		$send = split(":",$ret[0]);
	}
}

?>