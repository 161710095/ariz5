<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1 align="center">Input Biodata Wali</h1>
	<fieldset style="width: 50%; margin: auto;">
		<legend>Form Input Biodata Wali</legend>
		<form action="simpanwali.php" method="post">
			<p>
				Nama Lengkap <br/>
				<input type="text" name="nama" required />
			</p>
			<p>
				<input type="submit" value="Simpan">
				<input type="reset" value="Reset" onclick="return confirm('hapus data yang telah diinput?')">
			</p>
		</form>
	</fieldset>
	<br/>
	<center><a href="lihatdatawali.php">&Lt; Tabel Biodata</a></center>
</body>
</html>