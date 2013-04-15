<?php include("admin/header.php");?>

<?php
if ($_POST["newpic"]<>"") {
	$tmp = $_FILES["pic"]["tmp_name"];
	$name = $_FILES["pic"]["name"];
	$desired = "gambar/$name";
	move_uploaded_file($tmp,$desired);
	alert("New picture uploaded, not published. Your photo need to be approved by super administrator to be published.");
}
if ($_POST["delpic"]<>"") {
	unlink("gambar/".$_POST["id"]);
	alert("Picture removed");
}
if ($_POST["editpic"]<>"") {
	$pic = $_POST["editpic"];
	$caption = $_POST["caption"];
	$author = userID();
	$count = count_db("select * from gallery where url='$pic'");
	if ($count==0) mysql_query("insert into gallery values (null,null,$author,'$caption','$pic')");
	else mysql_query("update gallery set caption='$caption' where url='$pic'");
}
?>

<h2>Gallery</h2>
		
		
		<form method="post" enctype="multipart/form-data">
		<input type="file" name="pic" /><input type="submit" name="newpic" value="Upload"/>
		</form>
		
		
		<?php
		$dir = dir("content");
		$home = HOME;
		while ($file = $dir->read()) :
			if($file<>"." && $file<>".."):
			$link = "$home/content/$file";
			?>
			
			<div class="gallery">
			<form method="post" style="text-align:right">
			<input type="submit" name="delpic" value="x"/><br/>
			<input type="hidden" name="id" value="<?php echo $file;?>"/>
			</form>
			<img src='<?php echo $link;?>' height='150' width='150'/>
			<span>
				<form method="post">
					<input name="caption" value="<?php echo get_db("select * from gallery where url='$link'")->caption;?>"/>
					<input type="hidden" name="editpic" value="<?php echo $link;?>"/>
				</form>
			</span>
			</div>
			
			
		<?php endif;endwhile;?>
		
		<br class="clear" />
		
		</div>
	</div>
</div>



<br class="clear"/>

</body>
</html>
