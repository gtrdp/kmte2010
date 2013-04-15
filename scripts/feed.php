<?php
global $url;
if ($url[1]=="") {
	include("showfeed.php");
	exit();
}
?>
<?php echo '<?xml version="1.0" encoding="UTF-8"?>';?>
<rss version="2.0"
	xmlns:content="http://purl.org/rss/1.0/modules/content/"
	xmlns:wfw="http://wellformedweb.org/CommentAPI/"
	xmlns:dc="http://purl.org/dc/elements/1.1/"
	xmlns:atom="http://www.w3.org/2005/Atom"
	xmlns:sy="http://purl.org/rss/1.0/modules/syndication/"
	xmlns:slash="http://purl.org/rss/1.0/modules/slash/"
	>

<channel>
	<title><?php echo JUDUL." - Subscribe ".ucwords($url[1]);?></title>
	<atom:link href="<?php echo HOME."/feed/";?>" rel="self" type="application/rss+xml" />
	<link><?php echo HOME;?></link>
	<description><?php echo DESKRIPSI;?></description>
	<lastBuildDate><?php echo date('D, d M Y h:m:s');?> +0000</lastBuildDate>
	<generator>Julian Widya Perdana</generator>
	<language>en</language>
	<sy:updatePeriod>hourly</sy:updatePeriod>
	<sy:updateFrequency>1</sy:updateFrequency>
	<?php
		$cat = $url[1];
		if ($cat == "news") {
			$query = mysql_query("SELECT * FROM post WHERE category='KM' OR category='seminar' OR category='beasiswa' OR category='lowongan' OR category='infolomba'");
		} elseif ($cat == "tutorial") {
			$query = mysql_query("SELECT * FROM post WHERE category='SKI' OR category='SIE' OR category='STL'");
		} elseif ($cat == "event"){
			$query = mysql_query("SELECT * FROM post WHERE category='event'");
		} else {
			$cat = "info kuliah";
			$query = mysql_query("SELECT * FROM post WHERE category='infonilai' OR category='infopraktikum' OR category='soal' OR category='daftardosen'");
		}
		while($post = mysql_fetch_object($query)) {
			$title = $post->title;
			$link = HOME."/".permalink($post->id);
			$date = $post->date;
			$description = "<![CDATA[".substr(strip_tags($post->content),0,250)."...]]>";
			echo "\n\n<item><title>$title</title><link>$link</link><pubDate>$date</pubDate><description>$description</description></item>";
		}
	
	?>
	</channel>
</rss>
