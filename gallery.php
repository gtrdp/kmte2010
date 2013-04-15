<?php include("scripts/header.php");?>
	
<?php include("scripts/department.php"); global $url;?>
	
	<script type="text/javascript" src="<?php echo HOME;?>/scripts/js/gallery.js"></script>
	<div id="content" class="left">
		<div id="main">
			<img src="<?php echo HOME;?>/images/arrow.jpg" /><span id="subtitle"><?php echo "KMTE &raquo; Gallery";?></span><br class="clear" />
			<h1>Dokumentasi Kegiatan KMTE</h1>
			<span class="date">[ Friday, July 15 2010 | by KMTE ]</span><br /><br />
			<div id="separator" align="center"> <img src="<?php echo HOME;?>/images/content-dash.jpg" /></div>
			
			<div id="slide" align="center">
				<ul id="one">
					<li><img src="<?php echo HOME;?>/content/photo1-thumb.jpg" /></li>
					<li><img src="<?php echo HOME;?>/content/photo3-thumb.jpg" /></li>
					<li><img src="<?php echo HOME;?>/content/photo2-thumb.jpg" /></li>
				</ul>
				<ul id="two" style="border:1px solid #000;">
					<li><img src="<?php echo HOME;?>/content/photo2-thumb.jpg" /></li>
					<li><img src="<?php echo HOME;?>/content/photo1-thumb.jpg" /></li>
					<li><img src="<?php echo HOME;?>/content/photo3-thumb.jpg" /></li>
				</ul>
				<ul id="three">
					<li><img src="<?php echo HOME;?>/content/photo3-thumb.jpg" /></li>
					<li><img src="<?php echo HOME;?>/content/photo2-thumb.jpg" /></li>
					<li><img src="<?php echo HOME;?>/content/photo1-thumb.jpg" /></li>
				</ul>
			</div>
			<div class="mask-left"><img src="<?php echo HOME;?>/images/mask-left.png" alt="Previous Image" /></div>
			<div class="mask-right"><img src="<?php echo HOME;?>/images/mask-right.png" alt="Next Image" /></div>
			
			<div align="center" >
				<ul id="mainslide">
					<li><img src="<?php echo HOME;?>/content/photo2.jpg" style="padding:5px; border:2px solid #000; margin-top:5px;" /></li>
					<li><img src="<?php echo HOME;?>/content/photo1.jpg" style="padding:5px; border:2px solid #000; margin-top:5px;" /></li>
					<li><img src="<?php echo HOME;?>/content/photo3.jpg" style="padding:5px; border:2px solid #000; margin-top:5px;" /></li>
				</ul>
			</div>
			
			<br class="clear" />
			<div id="separator" align="center"> <img src="<?php echo HOME;?>/images/content-dash.jpg" /></div>
			<br class="clear" />
		</div>

		
<?php include("scripts/feedback.php");?>
<?php include("scripts/sidebar.php"); ?>
	
	<br class="clear" />
	
<?php include("scripts/footer.php"); ?>	

</div>
</div>
</body>
</html>
