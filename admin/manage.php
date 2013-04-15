<?php include("admin/header.php");?>

<?php
global $url;
if ($url[3]<>""):
?>

<?php
if ($_POST["edit"]<>"") {
	$content = $_POST["content"];
	$title = $_POST["title"];
	$cat = $_POST["cat"];
	$postid = $_POST["postid"];
	
	mysql_query("update post set title='$title' where id=$postid");
	mysql_query("update post set content='$content' where id=$postid");
	mysql_query("update post set category='$category' where id=$postid");
	alert("Post updated");
}
$id = $url[3];
$post = get_db("select * from post where id=$id");
?>
		
		<div id="postingan">
		<form method="post" action="">
			<div id="posttitle">
				<h3>Post Title</h3>
				<input name="title" type="text" id="title" size="50" value="<?php echo $post->title;?>"/>
			</div>
			
		  <div id="categ">
				<h3>Category</h3>
			   <select name="cat">
					<option value='' selected="selected" disabled="disabled">-select category-</option>
					<option value='KM' >KM</option>
					<option value='seminar' >seminar</option>
					<option value='lowongan' >lowongan</option>
					<option value='infolomba' >infolomba</option>
					<option value='beasiswa' >beasiswa</option>
					<option value='SKI' >SKI</option>
					<option value='STL' >STL</option>
					<option value='SIE' >SIE</option>
					<option value='soal' >soal</option>
					<option value='infonilai' >infonilai</option>
					<option value='infopraktikum' >infopraktikum</option>
					<option value='daftardosen' >daftardosen</option>
				</select>

		  </div>
			<br class="clear" />
			<div><p><textarea cols="90%" rows="15" name="content"><?php echo $post->content;?></textarea></p></div>
		  <div id="post-button">
		    <input name="edit" type="submit" class="publish" id="publish" value="Save"/>
			<input name="postid" type="hidden" value="<?php echo $post->id;?>"/>
		  </div>
		</form>
		</div>
	</div>
</div>

<script type="text/javascript" src="<?php echo HOME;?>/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
	tinyMCE.init({
		// General options
		mode : "textareas",
		elements : "elm2",
		theme : "advanced",
		skin : "o2k7",
		plugins : "pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,inlinepopups,autosave",

		// Theme options
		theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
		theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
		theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
		theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",

		// Example content CSS (should be your site CSS)
		content_css : "css/content.css",

		// Drop lists for link/image/media/template dialogs
		template_external_list_url : "lists/template_list.js",
		external_link_list_url : "lists/link_list.js",
		external_image_list_url : "lists/image_list.js",
		media_external_list_url : "lists/media_list.js",
	});

</script>
<?php else:?>
	<form action="<?php echo HOME;?>/member/post/add"?>
		<input id="tombol" value="New Post" type="submit" size="30"/>
	</form>
<br class="clear" /><br class="clear" />

<table>
	<tr><th>Post</th><th>Category</th><th>Action</th></tr>
<?php
$query = mysql_query("select * from post");
while ($post=mysql_fetch_object($query)) {
	$info = "<strong>$post->title</strong><br/>".substr(strip_tags($post->content),0,150);
	$edit = HOME ."/member/post/manage/$post->id";
	echo "<tr>";
	echo "<td>$info</td>";
	echo "<td>$post->category</td>";
	echo "<td><a href='$edit'>Edit</a></td>";
	echo "</tr>";
}
?>
</table>

<?php endif;?>

<br class="clear"/>

</body>
</html>
