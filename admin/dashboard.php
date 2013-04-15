<?php include("admin/header.php");?>

<?php
if ($_POST["chpw"]<>"") {
	$old = $_POST["oldpw"];
	$new1 = $_POST["newpw1"];
	$new2 = $_POST["newpw2"];
	$id = userID();
	if (crypt($old,64)<>$_SESSION["password"]) alert("Wrong Old Password");
	elseif (strlen($new1)<7) alert("Password too short");
	elseif ($new1<>$new2) alert("New Password Mismatch");
	else {
		$pass = crypt($new1,64);
		mysql_query("update user set password = '$pass' where id=$id ");
		alert("Password berhasil diganti");
	}
}
if ($_POST["changename"]<>"") {
	$new = $_POST["newname"];
	$id = userID();
	mysql_query("update user set username = '$new' where id=$id");
	alert("Username berhasil diganti");
}
if ($_POST["chpic"]<>"") {
	$temp = $_FILES["foto"]["tmp_name"];
	$name = $_FILES["foto"]["name"];
	$username = username();
	$desired = "content/$username.jpg";
	$photourl = HOME."content/$username.jpg";
	mysql_query("UPDATE user SET foto='$photourl'");
	move_uploaded_file($temp,$desired);
	alert("Foto uploaded");
}
?>

		<img src="<?php echo HOME;?>/admin/images/statistic.jpg"/>
		<br class="clear" />
		
		<div id="satu">
			<h3>Post</h3>
			<h4>>Total Post &emsp; <?php post_count();?></h4>
			
			<h5>Categories.....................................</h5>
			<h4>>News (<?php echo cat_dash("KM")+cat_dash("seminar")+cat_dash("lowongan")+cat_dash("infolomba")+cat_dash("beasiswa");?>)</h4>
			<table class="table-info" width="303px">
				<tr onclick="showpost('KM')"><td>*KM</td><td><?php echo cat_count("KM");?></td></tr>
				<tr onclick="showpost('seminar')"><td>*Seminar</td><td><?php echo cat_count("seminar");?></td></tr>
				<tr onclick="showpost('lowongan')"><td>*Lowongan</td><td><?php echo cat_count("lowongan");?></td></tr>
				<tr onclick="showpost('infolomba')"><td>*Lomba</td><td><?php echo cat_count("infolomba");?></td></tr>
				<tr onclick="showpost('beasiswa')"><td>*Beasiswa</td><td><?php echo cat_count("beasiswa");?></td></tr>
			</table>
			<h4>>Tutorial (<?php echo cat_dash("SIE")+cat_dash("STL")+cat_dash("SKI");?>)</h4>
			<table width="265px" class="table-info">
				<tr onclick="showpost('stl')"><td>*Sistem Tenaga Listrik</td><td><?php echo cat_count("stl");?></td></tr>
				<tr onclick="showpost('ski')"><td>*Sistem Komputer dan Informasi</td><td><?php echo cat_count("ski");?></td></tr>
				<tr onclick="showpost('sie')"><td>*Sistem Isyarat dan Elektronis</td><td><?php echo cat_count("sie");?></td></tr>
			</table>
			<h4>>Info Kuliah (<?php echo cat_dash("daftardosen")+cat_dash("infopraktikum")+cat_dash("infonilai")+cat_dash("soal");?>)</h4>
			<table width="275px" class="table-info">
				<tr onclick="showpost('soal')"><td>*Soal-soal</td><td><?php echo cat_count("soal");?></td></tr>
				<tr onclick="showpost('infokuliah')"><td>*Info Nilai Mata Kuliah</td><td><?php echo cat_count("infonilai");?></td></tr>
				<tr onclick="showpost('infopraktikum')"><td>*Info Praktikum</td><td><?php echo cat_count("infopraktikum");?></td></tr>
				<tr onclick="showpost('daftardosen')"><td>*Daftar Dosen</td><td><?php echo cat_count("daftardosen");?></td></tr>
			</table>
			<br class="clear" />
			
			<h5>Status.........................................</h5>
			<table width="275px" class="table-info">
				<tr><td><h4>>Published</h4></td><td><h4><?php post_count();?></h4></td></tr>
				<tr><td><h4>>Unpublished</h4></td><td><h4>-</h4></td></tr>
			</table>
			
			<div id="tombol"><a href="<?php echo HOME;?>/member/post/add/" target="_self" title="New Post">New Post</a></div>
		</div>
		<img src="<?php echo HOME;?>/admin/images/ver-dash.jpg" id="ver"/>
		
		<div id="dua">
			<h3>Feedback</h3>
				<h4>>Total Feedback &emsp;&emsp;&emsp; <?php $comm = count_db("select * from feedback"); echo $comm;?></h4>
				<br class="clear" />
				
				<h5>Status.........................................</h5>
				<h4>>Approved&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<?php echo $comm;?></h4>
				<h4>>Unapproved&emsp;&emsp;&emsp;&emsp;&emsp;0</h4>
				<h4>>Spam&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;0</h4>
				
				<div id="tombol"><a href="<?php echo HOME;?>/member/feedback/" target="_self" title="Edit Feedback">Edit Feedback</a></div>
				<br class="clear" />
			
			<h3 class="clear">Gallery</h3>
				<h4>>Total Photos&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; 3</h4>
				<br class="clear"/>
				
				<h5>Status..........................................</h5>
				<h4>>Published&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;-</h4>
				<h4>>Unpublished&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;-</h4>
				<br class="clear" />
				
				<div id="tombol"><a href="<?php echo HOME;?>/member/gallery/" title="Edit Gallery">Edit Gallery</a></div>
		</div>
		<img src="<?php echo HOME;?>/admin/images/ver-dash.jpg" id="ver"/>
		
		<div id="tiga">
			<h3>User Settings</h3>
			<h4>>Change Password</h4>
			<form method="post" action="">
				<table id="dashboard-input">
					<tr><td>old password</td></tr>
					<tr><td><input type="password" name="oldpw"/></td></tr>
					<tr><td>new password</td></tr>
					<tr><td><input type="password" name="newpw1"/></td></tr>
					<tr><td>re-type</td></tr>
					<tr><td><input type="password" name="newpw2"/></td></tr>
				</table>
				<input name="chpw" type="submit" id="tombol" value="change!"/>
			</form>
			
			<h4 class="clear">>Change Picture</h4>
			<form method="post" action="" enctype="multipart/form-data">
				<table id="dashboard-input">
					<tr><td>open file</td></tr>
					<tr><td><input name="foto" type="file" id="foto"/></td></tr>
				</table>
				<input type="submit" id="tombol" name="chpic" value="upload!"/>
			</form>			
			<h4 class="clear">>Change Name</h4>
			<form method="post">
				<table id="dashboard-input">
					<tr><td>new name</td></tr>
					<tr><td><input name="newname" type="text" id="newname" /></td></tr>
				</table>
				<input type="submit" id="tombol" value="change!" name="changename"/>
			</form>
		</div>
</div></div>
</body>
</html>
