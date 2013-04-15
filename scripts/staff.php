

<?php include("scripts/header.php"); ?>


<?php include("scripts/department.php"); ?>
	
	<?php
		global $url;
		if ($url[2]<>""):
		
		$name = get_db("select * from user where id=$url[2] ");
	?>
	
	<div id="content" class="left">
		<div id="main">
			<img src="<?php echo HOME;?>/images/profil-staff.jpg" /><br class="clear" />
			<div id="separator" align="center"> <img src="<?php echo HOME;?>/images/content-dash.jpg" /></div>
			<img width="100" src="<?php echo $name->foto;?>" class="images" />
			<table>
				<tr><td>Nama</td><td>: <?php echo $name->nama;?></td></tr>
				<tr><td>NIM</td><td>: <?php echo $name->nim;?></td></tr>
				<tr><td>Tempat Tanggal Lahir</td><td>: <?php echo $name->lahir;?></td></tr>
				<tr><td>Alamat</td><td>: <?php echo $name->alamat;?></td></tr>
				<tr><td>Nomor HP</td><td>: <?php echo $name->hape;?></td></tr>
			</table>
			<br class="clear" />
			<p><strong>Bio:</strong></p>
			<p><?php if ($name->about == '') echo "None."; else echo $name->about;?></p>
			<br class="clear" />
			<div id="separator" align="center"> <img src="<?php echo HOME;?>/images/content-dash.jpg" /></div>
			<br class="clear" />
		</div>
		<?php include("feedback.php"); ?>
<?php else:?>

<div id="content" class="left">
<div id="main">
			<img src="<?php echo HOME;?>/images/profil-staff.jpg" /><br class="clear" />
			<div id="separator" align="center"> <img src="<?php echo HOME;?>/images/content-dash.jpg" /></div>
<ul class="staff">
<?php
$query = mysql_query("select * from user");
while ($user = mysql_fetch_object($query)) {
	$link = userlink($user->id);
	echo "<li><a href='$link'><img width='150' height='150' src='$user->foto'/><br/>$user->nama<br/>$user->nim</a></li>";
}
?>
<br class="clear"/>
</ul>
		</div>

<?php endif;?>
				

		
		
		<?php include("scripts/sidebar.php"); ?>
		
	<br class="clear" />
	
	<?php include("scripts/footer.php"); ?>

</div>
</div>
</body>
</html>