<?php include("scripts/header.php"); ?>

<?php include("scripts/department.php"); ?>
<div id="content" class="left">
<?php 
global $url;

$event = $url[2];

if ($event <> ""):
$event = explode("-",$event);
$post = get_db("select * from post where title like '%$event[1]%' ");
$author = get_db("select * from user where id = $post->author ")->username;
?>
		<div id="main">
			<img src="<?php echo HOME;?>/images/arrow.jpg" /><span id="subtitle">Agenda KMTE FT UGM</span><br class="clear" /><br class="clear" />
			<h1><?php echo $post->title;?></h1>
			<span class="date">[ <?php echo $post->date;?> | by <?php echo $author;?> ]</span><br /><br />
			<div id="separator" align="center"> <img src="<?php echo HOME;?>/images/content-dash.jpg" /></div>
			<img src="<?php echo thumb($post->title);?>" class="images" />
			
			<p><?php echo $post->content;?></p>
			
			<br class="clear" />
			<div id="separator" align="center"> <img src="<?php echo HOME;?>/images/content-dash.jpg" /></div>
			<br class="clear" />
		</div>
		
<?php include("scripts/feedback.php"); ?>





<?php else:?>
<img src="<?php echo HOME;?>/images/arrow.jpg" /><span id="subtitle">Agenda KMTE FT UGM</span><br class="clear" /><br class="clear" />
<?php 
	$query = mysql_query("select * from post where category = 'event' ");
	while ($result = @mysql_fetch_object($query)):
	$postname = $result->id;
	$post = get_db("select * from post where id = $postname");
	$author = get_db("select * from user where id = $post->author ")->username;
	$link = "".$postname."/".str_replace(" ","-",strtolower($post->title));
?>
		<div id="main">
			<h3><a href="<?php echo $link;?>"><?php echo $post->title;?></a></h3>
			<span class="date">[ <?php echo $post->date;?> | by <?php echo $author;?> ]</span><br /><br />
			<img src="<?php echo thumb($post->title);?>" class="images" />
			
			<p><?php echo excerpt($post->content);?></p>
			<a href="<?php echo $link;?>"><span id="read" style="margin-right:20px;">read more &raquo;</span></a>
			
			<br class="clear" />
		</div>
		<div id="separator" align="center"> <img src="<?php echo HOME;?>/images/content-dash.jpg" /></div>
			<br class="clear" />
<?php endwhile;endif;?>
		
		
		<?php include("scripts/sidebar.php"); ?>
		
	<br class="clear" />
	
	<?php include("scripts/footer.php"); ?>

</div>
</div>
</body>
</html>
