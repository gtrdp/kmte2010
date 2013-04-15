<?php include("scripts/header.php"); ?>

<?php include("scripts/department.php"); ?>
<div id="content" class="left">
<?php 
global $url;

if (is_numeric($url[2])) $postid = $url[2];
elseif ($url[1] <> "") $cat = $url[1];
else $cat = $url[0];?>

<?php
if ($postid <> ""):
	$post = get_db("select * from post where id = $postid");
	$author = get_db("select * from user where id = $post->author ")->username;
	?>
		
		
			<div id="main">
				<img src="<?php echo HOME;?>/images/arrow.jpg" /><span id="subtitle"><?php echo $url[0];?></span><br class="clear" />
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



<?php elseif ($url[1] == ""):?>
	<img src="<?php echo HOME;?>/images/arrow.jpg" /><span id="subtitle"><?php echo "artikel dalam category ".$cat;?></span><br class="clear" />
	<?php
		if ($cat == "news") {
			$query = mysql_query("SELECT * FROM post WHERE category='KM' OR category='seminar' OR category='beasiswa' OR category='lowongan' OR category='infolomba'");
		} elseif ($cat == "tutorial") {
			$query = mysql_query("SELECT * FROM post WHERE category='SKI' OR category='SIE' OR category='STL'");
		} else {
			$cat = "info kuliah";
			$query = mysql_query("SELECT * FROM post WHERE category='infonilai' OR category='infopraktikum' OR category='soal' OR category='daftardosen'");
		}
		
		while ($result = @mysql_fetch_object($query)):
		$postid = $result->id;
		$post = get_db("select * from post where id = $postid");
		$author = get_db("select * from user where id = $post->author ")->username;
		$link = permalink($post->id);
	?>
			<div id="main">
					<img src="<?php echo HOME;?>/images/arrow.jpg" />
					<span id="subtitle"><?php echo $cat;?></span>
					<img src="<?php echo HOME;?>/images/arrow.jpg" />
					<span id="subtitle"><?php echo $post->category;?></span>
					<br class="clear" />
				<h3><a href="<?php echo $link;?>"><?php echo $post->title;?></a></h3>
				<span class="date">[ <?php echo $post->date;?> | by <?php echo $author;?> ]</span><br /><br />
				<div id="separator" align="center"> <img src="<?php echo HOME;?>/images/content-dash.jpg" /></div>
				<img src="<?php echo thumb($post->title);?>" class="images" />
				
				<p><?php echo excerpt($post->content);?></p>
				<a href="<?php echo $link;?>"><span id="read" style="margin-right:20px;">read more &raquo;</span></a>
				
				<br class="clear" />
				<div id="separator" align="center"> <img src="<?php echo HOME;?>/images/content-dash.jpg" /></div>
				<br class="clear" />
			</div>
	<?php endwhile;else:?>
	
	<img src="<?php echo HOME;?>/images/arrow.jpg" /><span id="subtitle"><?php echo "artikel dalam category ".$cat;?></span><br class="clear" />
	<?php
		$query = mysql_query("SELECT * FROM post WHERE category='$cat'");
		
		while ($result = @mysql_fetch_object($query)):
		$postid = $result->id;
		$post = get_db("select * from post where id = $postid");
		$author = get_db("select * from user where id = $post->author ")->username;
		$link = permalink($post->id);
	?>
			<div id="main">
					<img src="<?php echo HOME;?>/images/arrow.jpg" />
					<span id="subtitle"><?php echo $cat;?></span>
					<br class="clear" />
				<h3><a href="<?php echo $link;?>"><?php echo $post->title;?></a></h3>
				<span class="date">[ <?php echo $post->date;?> | by <?php echo $author;?> ]</span><br /><br />
				<div id="separator" align="center"> <img src="<?php echo HOME;?>/images/content-dash.jpg" /></div>
				<img src="<?php echo thumb($post->title);?>" class="images" />
				
				<p><?php echo excerpt($post->content);?></p>
				<a href="<?php echo $link;?>"><span id="read" style="margin-right:20px;">read more &raquo;</span></a>
				
				<br class="clear" />
				<div id="separator" align="center"> <img src="<?php echo HOME;?>/images/content-dash.jpg" /></div>
				<br class="clear" />
			</div>	
	
	<?php endwhile;endif;?>
		<?php include("scripts/sidebar.php"); ?>
		
	<br class="clear" />
	
	<?php include("scripts/footer.php"); ?>

</div>
</div>
</body>
</html>
