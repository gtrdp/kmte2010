<?php include("header.php"); ?>

<?php include("department.php"); ?>
<div id="content" class="left">
<?php 
global $url;
if (isset($_POST["search"])) $tag = $_POST["search"];
?>

<img src="<?php echo HOME;?>/images/arrow.jpg" /><span id="subtitle"><?php echo $tag;?></span><br class="clear" />
<?php 
	$query = mysql_query("select * from post where content like '%$tag%' ");
	while ($result = @mysql_fetch_object($query)):
	$postid = $result->id;
	$post = get_db("select * from post where id = $postid");
	$author = get_db("select * from user where id = $post->author ")->username;
	$link = permalink($post->id);
?>

		<div id="main">
			
			<h3><a href="<?php echo $link;?>"><?php echo $post->title;?></a></h3>
			<span class="date">[ <?php echo $post->date;?> | by KMTE ]</span><br /><br />
			<div id="separator" align="center"> <img src="<?php echo HOME;?>/images/content-dash.jpg" /></div>
			<img src="<?php echo thumb($post->title);?>" class="images" />
			
			<p><?php echo excerpt($post->content);?></p>
			
			<br class="clear" />
			<div id="separator" align="center"> <img src="<?php echo HOME;?>/images/content-dash.jpg" /></div>
			<br class="clear" />
		</div>


<?php endwhile;?>

	
	
	<?php include("sidebar.php"); ?>
	
	<br class="clear" />
	
	<?php include("footer.php"); ?>
</div>
</div>
</body>
</html>
