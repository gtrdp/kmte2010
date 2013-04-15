<?php
global $url;

$term = strtolower($url[1]);
$term = str_replace(".jpg","",$term);
$term = str_replace("-","+",$term);
$term = str_replace(" ","+",$term);

function baca ($alamat) {
	$curl = curl_init();
	curl_setopt($curl,CURLOPT_URL,$alamat);
	curl_setopt($curl,CURLOPT_CONNECTTIMEOUT,2);
	curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
	$content = curl_exec($curl);
	curl_close($curl);
	return $content;
}

$content = file_get_contents("http://www.google.com/m/search?site=images&q=".$term);
preg_match('/img class="c1" src="([^-]+)" width="/',$content,$part);

$img = $part[1];
header("Location: $img");
?>