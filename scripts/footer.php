<div id="bottom">
	<ul>
		<li class="parent">
			<img src="<?php echo HOME;?>/images/beasiswa-bottom.jpg" />
			<ul>
				<?php
					$query = mysql_query("select * from post where content like '%beasiswa%' order by date desc limit 3");
					while ($result = @mysql_fetch_object($query)) {
						$link = permalink($result->id);
						echo "<li><a href='$link'>$result->title</a></li>";
					}
				?>
			</ul>
		</li>
		<li class="parent">
			<img src="<?php echo HOME;?>/images/lowongan-bottom.jpg" />
			<ul>
				<?php
					$query = mysql_query("select * from post where content like '%lowongan%' order by date desc limit 3");
					while ($result = @mysql_fetch_object($query)) {
						$link = permalink($result->id);
						echo "<li><a href='$link'>$result->title</a></li>";
					}
				?>
			</ul>
		</li>
		<li class="parent">
			<img src="<?php echo HOME;?>/images/seminar-bottom.jpg" />
			<ul>
				<?php
					$query = mysql_query("select * from post where content like '%seminar%' order by date desc limit 3");
					while ($result = @mysql_fetch_object($query)) {
						$link = permalink($result->id);
						echo "<li><a href='$link'>$result->title</a></li>";
					}
				?>
			</ul>
		</li>
		<li	class="parent">
			<img src="<?php echo HOME;?>/images/lomba-bottom.jpg" />
			<ul>
				<?php
					$query = mysql_query("select * from post where content like '%lomba%' order by date desc limit 3");
					while ($result = @mysql_fetch_object($query)) {
						$link = permalink($result->id);
						echo "<li><a href='$link'>$result->title</a></li>";
					}
				?>
			</ul>
		</li>
		<li class="parent end">
			<img src="<?php echo HOME;?>/images/kmte-bottom.jpg" />
			<ul>
				<?php
					$query = mysql_query("select * from post where content like '%kmte%' order by date desc limit 3");
					while ($result = @mysql_fetch_object($query)) {
						$link = permalink($result->id);
						echo "<li><a href='$link'>$result->title</a></li>";
					}
				?>
			</ul>
		</li>
	</ul>
</div>
	
	<div id="contactus">
	<div class="back">
	<form action="<?php echo HOME;?>/contact" method="post">
		<h3>Contact Us</h3>
		<hr />
		<p>Nama Anda<br/><input name="nama"/></p>
		<p>Email Anda<br/><input name="email"/></p>
		<p>Komentar Anda<br/><textarea name="komentar"></textarea></p>
		<div align="right"><input type="submit" name="kirim" class="button" value="Kirim"/><input type="button" class="button" onclick="cancelcontact()" value="Batal"/></div>
	</form>
	</div>
	</div>	
<span id="footer">&copy; Copyright 2010 | <a href="http://www.kmte-ugm.org">Keluarga Mahasiswa Teknik Elektro Fakultas Teknik UGM</a> | <a title="Click Here to Contact Us" onclick="contactus()">Contact Us</a> | <a href="<?php echo HOME;?>/sitemap/">Site Map</a> | <a href="<?php echo HOME;?>/subscribe/">Subscribe Us</a> | <a href="<?php echo HOME;?>">made by -autis-</a></span>	<br class="clear" />