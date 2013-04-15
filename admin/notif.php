<?php include("admin/header.php");?>

<?php
if ($_POST["massmail"]<>"") {
	$subject = $_POST["subject"];
	$body = $_POST["body"];
	$query = mysql_query("select * from feedback order by email");
	while ($result = mysql_fetch_object($query)) {
		mailto($result->email,$subject,$body);
	}
	$query = mysql_query("select * from user order by email");
	while ($result = mysql_fetch_object($query)) {
		mailto($result->email,$subject,$body);
	}
	alert("Mass mail has been sent");
}
if ($_POST["sms"]<>"") {
	$body = $_POST["body"];
	$query = mysql_query("select * from user order by email");
	while ($result = mysql_fetch_object($query)) {
		sms($result->hape,$body);
	}
	alert("Mass SMS has been sent");
}
if ($_POST["del"]<>"") {
	$id = $_POST["id"];
	$query = mysql_query("DELETE FROM feedback WHERE id=$id");
	
	alert("Pesan sudah dihapus.");
}
?>
	<div id="notifikasi">
		<h2>Contact Us</h2>
		<hr />
		<p>Daftar pesan dari pengunjung yang menghubungi melalui fitur "Contact Us".</p>
		<table>
			<tr><th>Nama</th><th>e-mail</th><th>Pesan</th></tr>
		<?php
			$query = mysql_query("select * from feedback where type='contactus'");
			while ($contact = mysql_fetch_object($query)) {
				$id = $contact->id;
				echo "<form method='post'>";
				echo "<tr>";
				echo "<td>$contact->author</td>";
				echo "<td>$contact->email</td>";
				echo "<td>$contact->content</td>";
				echo "<td><input type='hidden' value='$id' name='id' /><input id='tombol' type='submit' value='hapus' name='del' /></td>";
				echo "</tr></form>\n";
			}
		?>
		</table>
		<br class="clear" />
		
		<h2>Mass Mail</h2>
		<hr />
		<form method="post">
		
		<p>Subject<br /><input name="subject" size="62"/></p>
		<p>Content<br /><textarea name="body" cols="90%" rows="10"></textarea></p>
		<p><input name="massmail" type="submit" value="Send to All"/></p>
		</form>
		<br class="clear" />
		
		<h2>Mass SMS</h2>
		<hr />
		<form method="post">
		<p>Content<br /><textarea name="body" cols="90%" rows="5"></textarea></p>
		<p><input name="sms" type="submit" value="Send SMS"/></p>
		</form>
		
	
		<br class="clear" />
	</div>
		</div>
	</div>
</div>



<br class="clear"/>

</body>
</html>
