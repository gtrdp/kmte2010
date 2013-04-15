<html>
<head>
<title>Show Post</title>
<style>
body {font-family:"Trebuchet MS";}
th {
	background:#efefef;
}
a {
	text-decoration:none;
	color:#000;
}
</style>
<script type="text/javascript">
	function redir(str){
		location=str;
	}
</script>
</head>
<body>

<?php
if ($_POST["delete"]<>"") {
	$postid = $_POST["postid"];
	mysql_query("delete from post where id=$postid");
	alert("Post deleted");
}
?>


<h3>Artikel dalam kategori: <?php echo $url[2];?></h3>
<hr>
<table>
<tr><th>Judul</th><th colspan="2">Action</th></tr>
<?php
global $url;
if ($url[2]=="") $query = mysql_query("select * from post");
else $query = mysql_query("select * from post where category = '$url[2]' ");
while ($post=@mysql_fetch_object($query)):
	$info = "<strong>$post->title</strong><br/>".substr(strip_tags($post->content),0,150);
	$edit = HOME ."/member/post/manage/$post->id";
	echo "<tr><form method='post'>";
	echo "<td>$info</td>";?>
	<td><a href="<?php echo $edit;?>"><button>Edit</button></a></td>
<?php	
	echo "<td><input type='submit' name='delete' value='Delete'/></td>";
	echo "<td><input type='hidden' name='postid' value='$post->id'/></td>";
	echo "</form></tr>\n";
endwhile;
?>
</table>

<br class="clear"/>

</body>
</html>
