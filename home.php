

<?php include("scripts/header.php");?>


	
<?php include("scripts/department.php"); ?>
	
	<div id="content" class="left">
	
		<div id="post">
			<img src="<?php echo HOME;?>/images/news-content.jpg" />
			<br class="clear" />
			<?php
				$query2 = mysql_query("select * from post where category='KM' limit 2");
				while ($post = mysql_fetch_object($query2)):
				$link = permalink($post->id);
				?>
				
				<div class="left" id="post-content">
				<a href="<?php echo $link;?>"><img src="<?php echo thumb($post->title);?>" class="thumb" /></a>
				<a href="<?php echo $link;?>"><h2><?php echo $post->title;?></h2></a>
				<span id="date"><?php echo $post->date;?></span><br class="clear" />
				<p><?php echo excerpt($post->content);?></p>
				<br class="clear" />
				<a href="<?php echo $link;?>"><span id="read">read &raquo;</span></a>
				</div>
				
			<?php endwhile;?>			
			<br class="clear" />
		</div>
	
	<?php
		$query = mysql_query("select * from post WHERE category='infokuliah' or category='event' group by category");
		while($cat = mysql_fetch_object($query)):?>
		
		<div id="post">
			<img src="<?php echo HOME."/images/".$cat->category."-content.jpg";?>" />
			<br class="clear" />
			<?php
				$query2 = mysql_query("select * from post where category='$cat->category' limit 2");
				while ($post = mysql_fetch_object($query2)):
				$link = permalink($post->id);
				?>
				
				<div class="left" id="post-content">
				<a href="<?php echo $link;?>"><img src="<?php echo thumb($post->title);?>" class="thumb" /></a>
				<a href="<?php echo $link;?>"><h2><?php echo $post->title;?></h2></a>
				<span id="date"><?php echo $post->date;?></span><br class="clear" />
				<p><?php echo excerpt($post->content);?></p>
				<br class="clear" />
				<a href="<?php echo $link;?>"><span id="read">read &raquo;</span></a>
				</div>
				
			<?php endwhile;?>
		
			
			<br class="clear" />
		</div>
	<?php endwhile;?>
		
		<div id="post">
			<img src="<?php echo HOME;?>/images/tutorial-content.jpg" />
			<br class="clear" />
			<?php
				$query2 = mysql_query("select * from post where category='SKI' OR category='STL' OR category='SIE' limit 2");
				while ($post = mysql_fetch_object($query2)):
				$link = permalink($post->id);
				?>
				
				<div class="left" id="post-content">
				<a href="<?php echo $link;?>"><img src="<?php echo thumb($post->title);?>" class="thumb" /></a>
				<a href="<?php echo $link;?>"><h2><?php echo $post->title;?></h2></a>
				<span id="date"><?php echo $post->date;?></span><br class="clear" />
				<p><?php echo excerpt($post->content);?></p>
				<br class="clear" />
				<a href="<?php echo $link;?>"><span id="read">read &raquo;</span></a>
				</div>
				
			<?php endwhile;?>			
			<br class="clear" />
		</div>
		
	</div>
	
<?php include("scripts/sidebar.php"); ?>
	
	<br class="clear" />
	
<?php include("scripts/footer.php"); ?>	

</div>
</div>
</body>
</html>
