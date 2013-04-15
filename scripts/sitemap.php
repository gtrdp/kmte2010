

<?php include("header.php"); ?>

<?php include("department.php"); ?>

	<div id="content" class="left">
		<div id="main">
		<img src="<?php echo HOME;?>/images/arrow.jpg" /><span id="subtitle">sitemap website kmte ft ugm</span><br class="clear" /><br class="clear" />
		
		<span id="home">HOME</span>
			<ul>
				<li><a href="<?php echo HOME;?>/profil/">Profil</a>
				  <ul>
				    <li><a href="<?php echo HOME;?>/profil/view/">View</a></li>
			        <li><a href="<?php echo HOME;?>/profil/struktur/">Struktur</a></li>
				    <li><a href="<?php echo HOME;?>/profil/departmen/">Departmen</a>
						<ul>
							<?php
								$query = mysql_query("select * from post where title LIKE '%departemen%'");
								while ($result = mysql_fetch_object($query)) {
									$link = HOME."/".permalink($result->id);
									echo "<li><a href='$link'>$result->title</a></li>";
								}
							?>
						</ul>
					</li>
				  </ul>
				</li>
			    <li><a href="<?php echo HOME;?>/member/">Member</a>
			      <ul>
			        <li><a href="<?php echo HOME;?>/member/login/">Login (Masuk ke Admin Area)</a></li>
		            <li><a href="<?php echo HOME;?>/member/register/">Register</a></li>
			        <li><a href="<?php echo HOME;?>/member/profil/">Profile</a></li>
			      </ul>
			    </li>
			    <li><a href="<?php echo HOME;?>/event/">Event</a>
					<ul>
						<?php
							$query = mysql_query("select * from post where category='event' ");
							while ($result = mysql_fetch_object($query)) {
								$link = HOME."/".permalink($result->id);
								echo "<li><a href='$link'>$result->title</a></li>";
							}
						?>
					</ul>
				</li>
			    <li><a href="<?php echo HOME;?>/gallery/">Gallery</a></li>
			    <li><a href="<?php echo HOME;?>/news/">News</a>
			      <ul>
			        <li><a href="<?php echo HOME;?>/news/KM/">KM</a>
						<ul>
							<?php
								$query = mysql_query("select * from post where category='km' ");
								while ($result = mysql_fetch_object($query)) {
									$link = HOME."/".permalink($result->id);
									echo "<li><a href='$link'>$result->title</a></li>";
								}
							?>
						</ul>
					</li>
		            <li><a href="<?php echo HOME;?>/news/seminar/">Seminar</a>
						<ul>
							<?php
								$query = mysql_query("select * from post where category='seminar' ");
								while ($result = mysql_fetch_object($query)) {
									$link = HOME."/".permalink($result->id);
									echo "<li><a href='$link'>$result->title</a></li>";
								}
							?>
						</ul>
					</li>
			        <li><a href="<?php echo HOME;?>/news/lowongan/">Lowongan</a>
						<ul>
							<?php
								$query = mysql_query("select * from post where category='lowongan' ");
								while ($result = mysql_fetch_object($query)) {
									$link = HOME."/".permalink($result->id);
									echo "<li><a href='$link'>$result->title</a></li>";
								}
							?>
						</ul>
					</li>
			        <li><a href="<?php echo HOME;?>/news/infolomba/">Info Lomba</a>
						<ul>
							<?php
								$query = mysql_query("select * from post where category='infolomba' ");
								while ($result = mysql_fetch_object($query)) {
									$link = HOME."/".permalink($result->id);
									echo "<li><a href='$link'>$result->title</a></li>";
								}
							?>
						</ul>
					</li>
			        <li><a href="<?php echo HOME;?>/news/beasiswa/">Beasiswa</a>
						<ul>
							<?php
								$query = mysql_query("select * from post where category='beasiswa' ");
								while ($result = mysql_fetch_object($query)) {
									$link = HOME."/".permalink($result->id);
									echo "<li><a href='$link'>$result->title</a></li>";
								}
							?>
						</ul>
					</li>
			      </ul>
			    </li>
			    <li><a href="<?php echo HOME;?>/tutorial/">Tutorial</a>
			      <ul>
			        <li><a href="<?php echo HOME;?>/tutorial/stl/">Sistem Tenaga Listrik (STL)</a>
						<ul>
							<?php
								$query = mysql_query("select * from post where category='stl' ");
								while ($result = mysql_fetch_object($query)) {
									$link = HOME."/".permalink($result->id);
									echo "<li><a href='$link'>$result->title</a></li>";
								}
							?>
						</ul>
					</li>
		            <li><a href="<?php echo HOME;?>/tutorial/ski/">Sistem Komputer dan Informasi (SKI)</a>
						<ul>
							<?php
								$query = mysql_query("select * from post where category='ski' ");
								while ($result = mysql_fetch_object($query)) {
									$link = HOME."/".permalink($result->id);
									echo "<li><a href='$link'>$result->title</a></li>";
								}
							?>
						</ul>
					</li>
			        <li><a href="<?php echo HOME;?>/tutorial/sie/">Sistem Isyarat dan Elektronis (SIE)</a>
						<ul>
							<?php
								$query = mysql_query("select * from post where category='sie' ");
								while ($result = mysql_fetch_object($query)) {
									$link = HOME."/".permalink($result->id);
									echo "<li><a href='$link'>$result->title</a></li>";
								}
							?>
						</ul>
					</li>
			      </ul>
			    </li>
			    <li><a href="<?php echo HOME;?>/infokuliah/">Info Kuliah</a>
			      <ul>
			        <li><a href="<?php echo HOME;?>/infokuliah/soal/">Soal-soal</a>
						<ul>
							<?php
								$query = mysql_query("select * from post where category='soal' ");
								while ($result = mysql_fetch_object($query)) {
									$link = HOME."/".permalink($result->id);
									echo "<li><a href='$link'>$result->title</a></li>";
								}
							?>
						</ul>
					</li>
		            <li><a href="<?php echo HOME;?>/infokuliah/infonilai/">Info Nilai</a>
						<ul>
							<?php
								$query = mysql_query("select * from post where category='infonilai' ");
								while ($result = mysql_fetch_object($query)) {
									$link = HOME."/".permalink($result->id);
									echo "<li><a href='$link'>$result->title</a></li>";
								}
							?>
						</ul>
					</li>
			        <li><a href="<?php echo HOME;?>/infokuliah/infopraktikum/">Info Praktikum</a>
						<ul>
							<?php
								$query = mysql_query("select * from post where category='infopraktikum' ");
								while ($result = mysql_fetch_object($query)) {
									$link = HOME."/".permalink($result->id);
									echo "<li><a href='$link'>$result->title</a></li>";
								}
							?>
						</ul>
					</li>
			        <li><a href="<?php echo HOME;?>/infokuliah/daftardosen/">Daftar Dosen</a>
						<ul>
							<?php
								$query = mysql_query("select * from post where category='daftardosen' ");
								while ($result = mysql_fetch_object($query)) {
									$link = HOME."/".permalink($result->id);
									echo "<li><a href='$link'>$result->title</a></li>";
								}
							?>
						</ul>
					</li>
			      </ul>
			    </li>
			    <li><a href="http://kmte-ugm.co.cc/">Forum</a></li>
				<li><a href="<?php echo HOME;?>/subscribe/">Subscribe</a>
					<ul>
						<li><a href="<?php echo HOME;?>/subscribe/infokuliah/">Info Kuliah</a></li>
						<li><a href="<?php echo HOME;?>/subscribe/news/">News</a></li>
						<li><a href="<?php echo HOME;?>/subscribe/event/">Event</a></li>
						<li><a href="<?php echo HOME;?>/subscribe/tutorial/">Tutorial</a></li>
					</ul>
				</li>
				<li><a onclick="contactus()" style="cursor:pointer">Contact Us</a></li>
				<li><a href="#">Notifikasi</a>
					<ul>
						<li><a href="#">E-mail</a></li>
						<li><a href="#">SMS</a></li>
					</ul>
				</li>
		    </ul>
			<br class="clear" />
	  </div>		


		
		<?php include("sidebar.php"); ?>
		
	<br class="clear" />
	
	<?php include("footer.php"); ?>
</div>
</div>
</body>
</html>