<?php
$nama = $_POST["nama"];
$email = $_POST["email"];
$komentar = $_POST["komentar"];
if (strlen($nama)<3) alert("Nama Anda terlalu pendek");
elseif (strlen($email)<3) alert("Email tidak valid");
elseif (strlen($komentar)<5) alert("Tolong tulis komentar Anda");
else {
	mysql_query("insert into feedback values (null,null,0,'contactus','$nama','$email','$komentar') ");
	alert("Pesan Anda berhasil terkirim");
	redirect(HOME);
}
?>