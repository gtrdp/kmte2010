<?php include("admin/header.php");?>

<?php
global $url;

if (isset($_POST["delfeed"])){
	$id = $_POST["id"];
	mysql_query("DELETE FROM feedback WHERE id=$id");
	alert("Feedback sudah dihapus.");
}
?>

<table>
	<tr><th>Author</th><th>Feedback</th><th>action</th></tr>
<?php
$query = mysql_query("select * from feedback");
while ($post=mysql_fetch_object($query)):
	$info = "<strong>".$post->author."</strong>";
	$content = substr(strip_tags($post->content),0,150);
	echo "<tr>";
	echo "<td>$info</td><td>$content</td>";
?>
	<td>
		<form method="post">
			<input type="hidden" value="<?php echo $post->id;?>" name="id" />
			<input type="submit" value="delete" name="delfeed" />
		</form>
	</td>
	</tr>
<?php endwhile;?>

</table>

<br class="clear"/>

</body>
</html>
