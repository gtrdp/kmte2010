<?php include("header.php"); ?>

<?php include("department.php"); ?>
	
<?php
if ($_POST["registermaba"]<>"") {
	$namalengkap = $_POST["namalengkap"];
	$tempatlahir = $_POST["tempatlahir"];
	$tanggal = $_POST["tanggal"]."-".$_POST["bulan"]."-".$_POST["tahun"];
	$hape = $_POST["hape"];
	$email = $_POST["email"];
	$gender = $_POST["gender"];
	$agama = $_POST["agama"];
	$darah = $_POST["darah"];
	$alamat = $_POST["alamat"];
	$kendaraan = $_POST["kendaraan"];
	$nim = "2010/".$_POST["NIM"]."/TK/".$_POST["NIF"];
	$sma = $_POST["sma"].", ".$_POST["kotasma"].", ".$_POST["propinsisma"];
	$tahunlulus = $_POST["tahun_lulus"];
	$jalurmasuk = $_POST["jalur_masuk"];
	$prestasiaka = $_POST["prestasiaka"];
	$prestasinonaka = $_POST["prestasinonaka"];
	
	
	if (strlen($email)<7) alert("Invalid email");
	elseif (strlen($hape)<7) alert("Invalid phone number");
	else {
		mysql_query("insert into maba values ('$namalengkap','$tempatlahir','$tanggal','$hape','$email','$gender','$darah','$alamat','$agama','$kendaraan','$nim','$sma','$tahunlulus','$jalurmasuk','$prestasiaka','$prestasinonaka')");
		alert("Terimakasih. Registrasi Berhasil");
		redirect(HOME);
	}
}
?>	

	<div id="content" class="left">
		<div id="main">
			<img src="<?php echo HOME;?>/images/ospek.jpg" /><br  />
			<p>Isilah Form di bawah ini dengan benar, data yang adik-adik masukkan akan digunakan untuk database angkatan kalian.</p>
			<form method="post">
			<table class="register" cellspacing="5px">
				<tr><td>Nama Lengkap</td><td>&emsp;<input name="namalengkap" type="text" size="50" /></td></tr>
				<tr><td>Tempat Lahir</td><td>&emsp;<input name="tempatlahir" type="text" size="30" /></td></tr>
				<tr><td>Tanggal Lahir</td>
					<td>&emsp;
						<select name="tanggal">
                	<option value="" disabled="disabled" selected="selected">--tgl--</option><option value=1>1</option><option value=2>2</option><option value=3>3</option><option value=4>4</option><option value=5>5</option><option value=6>6</option><option value=7>7</option><option value=8>8</option><option value=9>9</option><option value=10>10</option><option value=11>11</option><option value=12>12</option><option value=13>13</option><option value=14>14</option><option value=15>15</option><option value=16>16</option><option value=17>17</option><option value=18>18</option><option value=19>19</option><option value=20>20</option><option value=21>21</option><option value=22>22</option><option value=23>23</option><option value=24>24</option><option value=25>25</option><option value=26>26</option><option value=27>27</option><option value=28>28</option><option value=29>29</option><option value=30>30</option><option value=31>31</option>
						</select>
						&nbsp;/&nbsp;
						<select name="bulan">
							<option value="" disabled="disabled" selected="selected">--Bulan--</option>
							<option value="JANUARI">Jan</option>
							<option value="FEBRUARI">Feb</option>
							<option value="MARET">Mar</option>
							<option value="APRIL">Apr</option>
	
							<option value="MEI">Mei</option>
							<option value="JUNI">Jun</option>
							<option value="JULI">Jul</option>
							<option value="AGUSTUS">Agust</option>
							<option value="SEPTEMBER">Sept</option>
							<option value="OKTOBER">Okt</option>
	
							<option value="NOVEMBER">Nov</option>
							<option value="DESEMBER">Des</option>
	              		</select>
						&nbsp;/&nbsp;
						<select name="tahun" id="tahun">
                			<option value="" disabled="disabled" selected="selected">--Tahun--</option><option value=1980>1980</option><option value=1981>1981</option><option value=1982>1982</option><option value=1983>1983</option><option value=1984>1984</option><option value=1985>1985</option><option value=1986>1986</option><option value=1987>1987</option><option value=1988>1988</option><option value=1989>1989</option><option value=1990>1990</option><option value=1991>1991</option><option value=1992>1992</option><option value=1993>1993</option><option value=1994>1994</option><option value=1995>1995</option>
						</select>					</td>
				</tr>
				<tr><td>No. HP/Telp.</td><td>&emsp;+62&nbsp;<input name="hape" type="text" size="12" /></td></tr>
				<tr><td>e-mail</td><td>&emsp;<input name="email" type="text" size="30" /></td></tr>
				<tr><td>Jenis Kelamin</td>
					<td>&emsp;
						<select name="gender" id="gender">
							<option value="" disabled="disabled" selected="selected">--Gender--</option>
							<option value="LAKI-LAKI">Laki-laki</option>
							<option value="PEREMPUAN">Perempuan</option>
						</select>					</td>
				</tr>
				<tr><td>Golongan Darah</td>
					<td>&emsp;
						<select name="darah" id="darah">
							<option value="" disabled="disabled" selected="selected">--Gol Darah--</option>
							<option value="A">A</option>
							<option value="B">B</option>
							<option value="AB">AB</option>
							<option value="O">O</option>
							<option value="X">Tidak Tau</option>
						</select>					</td>
				</tr>
				<tr><td>Agama</td>
					<td>&emsp;
						<select name="agama" id="agama">
							<option value="" disabled="disabled" selected="selected">--Agama--</option>
							<option value="ISLAM">Islam</option>
							<option value="KATHOLIK">Katholik</option>
							<option value="KRISTEN">Kristen</option>
							<option value="HINDU">Hindu</option>
							<option value="BUDHA">Budha</option>
							<option value="KONGHUCU">Konghucu</option>
						</select>					</td>
				</tr>
				<tr><td>Alamat</td><td>&emsp;<textarea name="alamat" rows="3" cols="50" ></textarea></td></tr>
				<tr><td>Kendaraan Pribadi</td>
					<td>&emsp;
						<select name="kendaraan" id="kendaraan">
							<option value="" disabled="disabled" selected="selected">--Kendaraan Pribadi--</option>
							<option value="SEPEDA">Sepeda</option>
							<option value="SEPEDA MOTOR">Sepeda Motor</option>
							<option value="MOBIL">Mobil</option>
						</select>					</td>
				</tr>
				<tr><td>Nomor Induk Mahasiswa</td><td>&emsp;2010/<input name="NIM" type="text" size="5" />/TK/<input name="NIF" type="text" size="4" /></td></tr>
				<tr><td>Asal SMA</td><td>&emsp;<input name="sma" type="text" size="20" /></td></tr>
				<tr><td>Kota / Kabupaten</td><td>&emsp;<input name="kotasma" type="text" size="30" /></td></tr>
				<tr><td>Propinsi</td><td>&emsp;<input name="propinsisma" type="text" size="30" /></td></tr>
				<tr><td>Tahun Lulus</td>
					<td>&emsp;
						<select name="tahun_lulus" id="tahun_lulus">
							<option selected="selected">2010</option>
							<option value="2009">2009</option>
							<option value="2008">2008</option>
           				</select>					</td>
				</tr>
				<tr><td>Jalur Masuk UGM</td>
					<td>&emsp;
						<select name="jalur_masuk" id="jalur_masuk">
                			<option value="" disabled="disabled" selected="selected">-jalur masuk-</option>
                			<option value="PBS">PBS</option>
                			<option value="PBUB">PBUB</option>
                			<option value="PBUPD">PBUPD</option>
                			<option value="PBOS">PBOS</option>
                			<option value="PBUTM">PBUTM</option>
                			<option value="UM UGM">UM-UGM</option>
                			<option value="SNMPTN">SNMPTN</option>
            			</select>					</td>
				</tr>
				<tr><td>Prestasi Akademis</td><td>&emsp;<textarea name="prestasiaka" rows="2" cols="50" ></textarea></td></tr>
				<tr><td>Prestasi Non-Akademis</td><td>&emsp;<textarea name="prestasinonaka" rows="2" cols="50" ></textarea></td></tr>
			</table>
			<div id="separator" align="center"> <img src="images/content-dash.jpg" /></div>
			<table class="register">
				<tr><td><input type="checkbox" id="yes" name="yes" /></td>
					<td><p>Dengan ini saya menyatakan bahwa informasi yang saya masukkan dalam form di atas adalah benar.</p></td>
				</tr>
			</table>
			<div align="center"><input type="submit" name="registermaba" value="Submit" /></div>
			</form>
			<br class="clear" />
		</div>		
	
		<?php include("sidebar.php"); ?>
		
	<br class="clear" />
	
	<?php include("footer.php"); ?>
</div>
</div>
</body>
</html>