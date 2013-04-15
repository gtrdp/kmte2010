<?php global $url;?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title><?php title();?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo HOME;?>/skin.css" />
	<link rel="icon" type="image/x-icon" href="<?php echo HOME;?>/images/favicon.png" />
	<link rel="alternate" type="application/rss+xml" href="<?php echo HOME;?>/subscribe/" />
	<meta name="robots" content="all, follow" />
	<meta http-equiv="pragma" content="no-cache" />
	<meta name="author" content="autis" />
	
	<script type="text/javascript" src="<?php echo HOME;?>/scripts/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo HOME;?>/scripts/js/jquery.cycle.all.min.js"></script>
	<script type="text/javascript" src="<?php echo HOME;?>/scripts/js/function.js"></script>
</head>

<body>

<div id="top">
	<div class="top-container">
		<img src="<?php echo HOME;?>/images/kmte-top.jpg" class="head"/>
		<form action="<?php echo HOME;?>/member">
			<input type="image" src="<?php echo HOME;?>/images/login-top.jpg" alt="login"/>
			<input type="password" tabindex="2" class="input"/>
			<img src="<?php echo HOME;?>/images/password.jpg" />
			<input type="text" tabindex="1" class="input"/>
			<img src="<?php echo HOME;?>/images/username.jpg" />
		</form>
	</div>
</div>

<br class="clear" />
<div id="big-container">
<div id="logo">
	<a href="<?php echo HOME;?>/" title="Home" ><img src="<?php echo HOME;?>/images/kmte-logo.jpg" /></a>
</div>

<div id="nav">
	<form method="post" action="<?php echo HOME;?>/search/">
	<ul>
		<li ><a <?php if($url[0]=="") echo "class='active'";?> href="<?php echo HOME;?>" title="Home" target="_self">Home</a></li>
		<li ><a <?php if($url[0]=="profil") echo "class='active'";?> href="<?php echo HOME;?>/profil/view/" title="Profil" target="_self">Profil</a>
			<ul>
				<li><a href="<?php echo HOME;?>/profil/view/" title="View Profil KMTE" target="_self">KMTE</a></li>
				<li><a href="<?php echo HOME;?>/profil/struktur" title="Struktur KMTE" target="_self">Struktur</a></li>

				<li><a href="<?php echo HOME;?>/profil/departemen" title="Departemen KMTE" target="_self">Departemen</a></li>
			</ul>
		</li>
	    <li ><a <?php if($url[0]=="member") echo "class='active'";?> href="<?php echo HOME;?>/member" title="Member" target="_self">Member</a>
			<ul>
				<li><a href="<?php echo HOME;?>/member/login" title="Log In" target="_self">Log In</a></li>
				<li><a href="<?php echo HOME;?>/member/register" title="Register" target="_self">Register</a></li>

				<li><a href="<?php echo HOME;?>/member/profil" title="Profil" target="_self">Profil</a></li>
			</ul>
		</li>
		<li ><a <?php if($url[0]=="tutorial") echo "class='active'";?> href="<?php echo HOME;?>/tutorial" title="Tutorial" target="_self">Tutorial</a>
			<ul>
				<li><a href="<?php echo HOME;?>/tutorial/sie" title="Sistem Isyarat dan Elektronis" >Sistem Isyarat dan Elektronis</a></li>
				<li><a href="<?php echo HOME;?>/tutorial/stl" title="Sistem Tenaga Listrik" >Sistem Tenaga Listrik</a></li>
				<li><a href="<?php echo HOME;?>/tutorial/ski" title="Sistem Komputer dan Informasi" >Sistem Komputer dan Informasi</a></li>
			</ul>
		</li>
		<li ><a <?php if($url[0]=="event") echo "class='active'";?> href="<?php echo HOME;?>/event/" title="Event" target="_self">Event</a></li>
		<li ><a <?php if($url[0]=="gallery") echo "class='active'";?> href="<?php echo HOME;?>/gallery/" title="Gallery" target="_self">Gallery</a></li>
		<li ><a <?php if($url[0]=="news") echo "class='active'";?> href="<?php echo HOME;?>/news/" title="News" target="_self">News</a>
			<ul>
				<li><a href="<?php echo HOME;?>/news/" title="Berita Seputar KM" >KM</a></li>
				<li><a href="<?php echo HOME;?>/news/seminar" title="Seminar" >Seminar</a></li>
				<li><a href="<?php echo HOME;?>/news/lowongan" title="Lowongan" >Lowongan</a></li>
				<li><a href="<?php echo HOME;?>/news/infolomba" title="Lomba" >Lomba</a></li>
				<li><a href="<?php echo HOME;?>/news/beasiswa" title="Beasiswa" >Beasiswa</a></li>
			</ul>
		</li>
		<li ><a <?php if($url[0]=="infokuliah") echo "class='active'";?> href="<?php echo HOME;?>/infokuliah/" title="Info Kuliah" target="_self">Info Kuliah</a>
			<ul>
				<li><a href="<?php echo HOME;?>/infokuliah/soal" title="Soal-soal" >Soal-soal</a></li>
				<li><a href="<?php echo HOME;?>/infokuliah/infopraktikum" title="Info Praktikum" >Info Praktikum</a></li>
				<li><a href="<?php echo HOME;?>/infokuliah/infonilai" title="Info Nilai" >Info Nilai</a></li>
				<li><a href="<?php echo HOME;?>/infokuliah/daftardosen" title="Daftar Dosen" >Daftar Dosen</a></li>
			</ul>
		</li>
		<li ><a href="http://kmte-ugm.co.cc" title="Forum" target="_self">Forum</a></li>
		
		<li id="search">Find <input type="text" name="search" size="7"/><input type="image" src="<?php echo HOME;?>/images/search.png" id="searchsubmit"/></li>
		<br class="clear"/>
	</ul></form>
</div>
<div id="container">

<?php if ($url[0]==""):?>
	<div class="left">
	<div id="latest">
		<ul id="tab">
			<li id="satu" onclick="satu()">Latest News</li>
			<li id="dua" onclick="dua()">Latest Info</li>
		</ul>
		<div id="news-content">
			<ul>
				<?php
					$query = mysql_query("select * from post order by date desc limit 5");
					while ($post = mysql_fetch_object($query)) {
						$link = permalink($post->id);
						echo "<li><a href='$link'>$post->title</a></li>";
					}
				?>
			</ul>
		</div>
		<div id="info-content" style="display:none">
			<ul>
				<?php
					$query = mysql_query("select * from post order by date asc limit 5");
					while ($post = mysql_fetch_object($query)) {
						$link = permalink($post->id);
						echo "<li><a href='$link'>$post->title</a></li>";
					}
				?>
			</ul>
		</div>
	</div>
	<div id="rss">
		<a href="<?php echo HOME;?>/subscribe/infokuliah/"><img src="<?php echo HOME;?>/images/info-kuliah.jpg" class="left" /></a>
		<a href="<?php echo HOME;?>/subscribe/event/"><img src="<?php echo HOME;?>/images/event.jpg" class="right"/></a> <br class="clear"/>
		<a href="<?php echo HOME;?>/subscribe/tutorial/"><img src="<?php echo HOME;?>/images/tutorial.jpg" class="left"/></a>
		<a href="<?php echo HOME;?>/subscribe/news/"><img src="<?php echo HOME;?>/images/news.jpg" class="right"/></a>
	</div>
	</div>
	<div id="pic">
		<div id="slideshow">
			<ul id="slideshowhead">
				<li><img src="content/head1.jpg" alt="header1" /></li>
				<li><img src="content/head2.jpg" alt="header2" /></li>
				<li><img src="content/head3.jpg" alt="header3" /></li>
				<li><img src="content/head4.jpg" alt="header4" /></li>
				<li><img src="content/head5.jpg" alt="header5" /></li>
				<li><img src="content/head6.jpg" alt="header6" /></li>
			</ul>
		</div>
		<div id="caption">
			<a href="<?php echo HOME;?>/profil/digantiwoi!"><h3>Keluarga Mahasiswa Teknik Elektro FT UGM</h3></a>
			<a href="<?php echo HOME;?>/profil/digantiwoi!"><p>KMTE adalah sebuah komunitas bagi para mahasiswa S1 Jurusan Teknik Elektro dan Teknologi Informasi, yang mana komunitas ini bersifat resmi secara ke-organisasi-an namun memegang asas kekeluargaan di dalamnya.</p></a>
		</div>
	</div>
	<br class="clear" />
	
<?php endif;?>