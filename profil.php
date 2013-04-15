<?php include("scripts/header.php"); ?>

<?php include("scripts/department.php"); ?>
<div id="content" class="left">
<?php 
global $url;

$postname = $url[2];
$postname = explode("-",$postname);
if ($postname[0]<>""):
$post = get_db("select * from post where title like '%$postname[1]%' ");
$author = get_db("select * from user where id = $post->author ")->username;
?>
		<div id="main">
			<img src="<?php echo HOME;?>/images/profil.jpg" /><br class="clear" />
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





<?php elseif ($url[1] == "departemen"):?>
<img src="<?php echo HOME;?>/images/arrow.jpg" /><span id="subtitle">KMTE FT UGM</span><br class="clear" />
<?php 
	$query = mysql_query("select * from post where title like '%departemen%' ");
	while ($result = @mysql_fetch_object($query)):
	$postname = $result->id;
	$post = get_db("select * from post where id = $postname");
	$author = get_db("select * from user where id = $post->author ")->username;
	$link = "departemen/".str_replace(" ","-",strtolower($post->title));
?>
		<div id="main">
			<h3><a href="<?php echo $link;?>"><?php echo $post->title;?></a></h3>
			<span class="date">[ <?php echo $post->date;?> | by KMTE ]</span><br /><br />
			<img src="<?php echo thumb($post->title);?>" class="images" />
			
			<p><?php echo excerpt($post->content);?></p>
			<a href="<?php echo $link;?>"><span id="read" style="margin-right:20px;">read more &raquo;</span></a>
			
			<br class="clear" />
		</div>
		<div id="separator" align="center"> <img src="<?php echo HOME;?>/images/content-dash.jpg" /></div>
			<br class="clear" />
<?php endwhile;?>








<?php else:?>
		<?php
			$kmte = mysql_fetch_object(mysql_query("SELECT * FROM post WHERE title LIKE '%BIG BLUE%' LIMIT 1"));
			$author = get_db("select * from user where id = $post->author ")->username;
		?>
		<div id="main">
			<img src="<?php echo HOME;?>/images/profil.jpg" /><br class="clear" />
			<h1><?php echo $kmte->title;?></h1>
			<span class="date">[ <?php echo $kmte->date;?> | by <?php echo $author;?> ]</span><br /><br />
			<div id="separator" align="center"> <img src="<?php echo HOME;?>/images/content-dash.jpg" /></div>
			<img src="<?php echo HOME;?>/content/kmte.jpg" class="images" />
			
			<p><?php echo $kmte->content;?></p>
			
			<br class="clear" />
			<div id="separator" align="center"> <img src="<?php echo HOME;?>/images/content-dash.jpg" /></div>
			<br class="clear" />
		</div>
		<?php endif;?>
		
		
		
		
		
		<?php include("scripts/sidebar.php"); ?>
		
	<br class="clear" />
	
	<?php include("scripts/footer.php"); ?>

</div>
</div>
</body>
</html>
