

<?php include("header.php"); ?>



<?php include("department.php"); ?>
	
	
<?php
if ($_POST["register"]<>"") {
	$username = $_POST["username"];
	$pass = $_POST["password"];
	$password = crypt($_POST["password"],64);
	$email = $_POST["email"];
	$hape = $_POST["hape"];
	$nama = $_POST["nama"];
	$alamat = $_POST["alamat"];
	$lahir = $_POST["tempat"].",".$_POST["tanggal"]." ".$_POST["bulan"]." ".$_POST["tahun"];
	$nim = $_POST["th"]."/".$_POST["univ"]."/TK/".$_POST["jur"];
	$foto = "";
	$about = "";
	
	if (strlen($username)<5) alert("Username minimal 5 karakter");
	elseif ($_POST["password"]<>$_POST["password2"]) alert("Password tidak sama");
	elseif (strlen($pass)<5) alert("Password minimal 5 karakter");
	elseif (strlen($email)<7) alert("Invalid email");
	elseif (strlen($hape)<7) alert("Invalid phone number");
	elseif (count_db("select * from user where username = '$username' ")<>0) alert("Username already taken");
	else {
	
		mysql_query("insert into user values (null,null,'$username','$password','$email','$hape','$nama','$alamat','$lahir','$nim','$foto','$about')");
	
		alert("Registrasi Berhasil");
		redirect(HOME);
	}
}
?>

	<div id="content" class="left">
		<div id="main">
			<img src="<?php echo HOME;?>/images/registrasi-user.jpg" /><br  />
			<p>Silakan isi form di bawah ini untuk bergabung menjadi member di Portal KMTE FT UGM. User yang terdaftar tidak sesuai dengan peraturan
			yang berlaku akan dihapus oleh admin.</p>
			<form method="post">
			<table class="register" cellspacing="5px">
				<tr>
				  <td>Username</td>
				  <td><input name="username" type="text" id="username" size="50" /></td>
			  </tr>
				<tr><td>Nama Lengkap</td><td><input name="nama" type="text" id="nama" size="50" /></td></tr>
				<tr><td>Tempat Lahir</td><td><input name="tempat" type="text" id="tempat" size="30" /></td></tr>
				<tr><td>Tanggal Lahir</td>
					<td><select name="tanggal">
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
				<tr><td>No. HP/Telp.</td>
				  <td>+62&nbsp;
				    <input name="hape" type="text" id="hape" size="12" /></td></tr>
				<tr><td>e-mail</td><td><input name="email" type="text" id="email" size="30" /></td></tr>
				<tr>
				  <td>Password</td>
				  <td><input name="password" type="password" id="password" size="30" /></td>
			  </tr>
				<tr>
				  <td>Confirm Password</td>
				  <td><input name="password2" type="password" id="password2" size="30" /></td>
			  </tr>
				<tr><td>Alamat</td><td><textarea name="alamat" cols="50" rows="3" id="alamat" ></textarea></td></tr>
				<tr><td>Nomor Induk Mahasiswa</td>
				  <td><input name="th" type="text" id="th" size="5" />
				    /
			      <input name="univ" type="text" id="univ" size="5" />/TK/<input name="jur" type="text" id="jur" size="4" /></td></tr>
			</table>
			<div id="separator" align="center"> <img src="<?php echo HOME;?>/images/content-dash.jpg" /></div>
			<table class="register">
				<tr><td><input type="checkbox" id="yes" name="yes" /></td>
					<td><p><label for="yes">Dengan ini saya menyatakan bahwa informasi yang saya masukkan dalam form di atas adalah benar.</label></p></td>
				</tr>
			</table>
			<div align="center"><input type="submit" name="register" value="Submit" /></div>
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