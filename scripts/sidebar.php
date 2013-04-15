<?php global $url; if($url[0]<>""):?>
	</div>
	<div id="sidebar" class="right">
		<div id="rss">
			<a href="<?php echo HOME;?>/subscribe/kuliah/"><img src="<?php echo HOME;?>/images/info-kuliah.jpg" class="left" /></a>
			<a href="<?php echo HOME;?>/subscribe/event/"><img src="<?php echo HOME;?>/images/event.jpg" class="right"/></a> <br class="clear"/>
			<a href="<?php echo HOME;?>/subscribe/tutorial/"><img src="<?php echo HOME;?>/images/tutorial.jpg" class="left"/></a>
			<a href="<?php echo HOME;?>/subscribe/news/"><img src="<?php echo HOME;?>/images/news.jpg" class="right"/></a>
		</div>
	</div>
	
<?php endif;?>


<div id="sidebar" class="right">
		<div id="upper" class="left"><a href="<?php echo HOME;?>/member/register-maba/"><img src="<?php echo HOME;?>/images/registrasi.jpg" class="right" /></a></div>
		<div id="upper" class="right"><a href="#"><img src="<?php echo HOME;?>/images/statistik.jpg" class="left" /></a></div>
		<br class="clear" /><br class="clear" />
		
		<div id="inner" class="left">
			<div id="sidebar-head-left"><img src="<?php echo HOME;?>/images/latest.png" /></div>
			<ul>
				<?php
					$query = mysql_query("SELECT * FROM post ORDER BY date DESC LIMIT 3");
					while ($list = mysql_fetch_object($query)){
						$link = permalink($list->id);
						echo "<li><a href='$link'>$list->title</a></li>";
					}
				?>
			</ul>
		</div>
		<div id="inner" class="right">
			<div id="sidebar-head"><img src="<?php echo HOME;?>/images/online-support.png" /></div>
			<ul>
				<li>Management<br /><a href="ymsgr:sendIM?gtrdp"><img src="http://opi.yahoo.com/online?u=gtrdp&m=g&t=1" /></a></li>
				<li>IT Support<br /><a href="ymsgr:sendIM?julianwidper"><img src="http://opi.yahoo.com/online?u=julianwidper&m=g&t=1" /></a></li>
				<li>Web Master<br /><a href="ymsgr:sendIM?libendigkeit"><img src="http://opi.yahoo.com/online?u=libendigkeit&m=g&t=1" /></a></li>
			</ul>
		</div>
		<br class="clear" />
		
		<div id="inner" class="left">
			<div id="sidebar-head-left"><img src="<?php echo HOME;?>/images/archives.png" /></div>
			<ul>
				<?php
					$query = mysql_query("SELECT * FROM post ORDER BY date ASC LIMIT 3");
					while ($list = mysql_fetch_object($query)){
						$link = permalink($list->id);
						echo "<li><a href='$link'>$list->title</a></li>";
					}
				?>
			</ul>
		</div>
		<div id="inner" class="right">
			<div id="sidebar-head"><img src="<?php echo HOME;?>/images/featured.png" /></div>
			<ul>
				<?php
					$query = mysql_query("SELECT * FROM post WHERE category='infolomba' ORDER BY date DESC LIMIT 3");
					while ($list = mysql_fetch_object($query)){
						$link = permalink($list->id);
						echo "<li><a href='$link'>$list->title</a></li>";
					}
				?>
			</ul>
		</div>
		<br class="clear" />
		
		<div id="inner" class="left">
			<div id="sidebar-head-left"><img src="<?php echo HOME;?>/images/links.png" /></div>
			<ul>
				<li><a href="http://gemastik.its.ac.id/">Gemastik</a></li>
			    <li><a href="http://www.gemastik.its.ac.id/article/home/lomba_desain_web">Web Desain Gemastik</a></li>
			    <li><a href="http://www.kmte-ugm.org/">KMTE FT UGM</a></li>
				<li><a href="http://www.kmte-ugm.co.cc/">Forum KMTE FT UGM</a></li>
			    <li><a href="http://www.fakultas-teknik.ugm.ac.id/">Fakultas Teknik UGM</a></li>
			</ul>
		</div>
		<div id="inner" class="right">
			<div id="sidebar-head"><img src="<?php echo HOME;?>/images/contact-us.png" /></div>
			<p>
				Lower Ground<br />
				Jurusan Teknik Elektro dan Teknologi Informasi<br />
				Fakultas Teknik<br />
				UGM<br /><br />
				Jalan Grafika No 2<br />
				Yogyakarta 55281<br />
				Telp. (0274) 552305, 902202<br />
				Fax. (0274) 552305
			</p>
		</div>
		<br class="clear" />
		<div id="social">
			<img src="<?php echo HOME;?>/images/find.jpg" />
			<br class="clear" />
			<a target="_blank" href="http://www.facebook.com/group.php?gid=127721173939831"><img src="<?php echo HOME;?>/images/facebook.jpg" class="left" /></a>
			<a target="_blank" href="http://www.twitter.com/kmteugm"><img src="<?php echo HOME;?>/images/twitter.jpg" class="right" /></a>
			<br class="clear" /><br class="clear" />
			<div align="center"><a target="_blank" href="http://www.plurk.com/"><img src="<?php echo HOME;?>/images/plurk.jpg" /></a></div>
			<br class="clear" />
		</div>
		<br class="clear" />
</div>