<?php
include('config/koneksi.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Halaman Utama</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<table width="1350" height="640" border="1">

<tr>
<td colspan="2" align="left" height="50">
<a href="#">Buku		|</a>
<a href="#">Anggota		|</a>
<a href="#">Peminjaman	|</a>
<a href="logout.php"><img src="image/admin.png" width="50px" height="50px" align="right"/></a>
</a></td>
</tr>

	<tr>
	<td width="800">
	<h1><center>Input Peminjaman</center></h1>
	<form name="input_Tarif" method="post" action="input_pinjam.php">
	<table align="center">
	  <tr>
		<td width="97" rowspan="5">&nbsp;</td>
		<td width="150" height="30">ID BUKU</td>
		<td width="11">:</td>
		<td width="272"><input type="text" name="id_buku" placeholder="masukkan ID buku" required="required" /></td>
		<td width="21"rowspan="5">&nbsp;</td>
	  </tr>
	  <tr>
		<td width="150" height="30">ID ANGGOTA</td>
		<td>:</td>
		<td><input type="text" name="id_anggota" placeholder="masukkan ID anggota" required="required" /></td>
	  </tr>
	  <tr>
		<td width="150" height="30">Tanggal Pinjam</td>
		<td>:</td>
		<td><input type="text" name="tgl_pinjam" placeholder="Tahun-Bulan-Tanggal" required="required" /></td>
	  </tr>
	  <tr>
		<td width="150" height="30">Tanggal Kembali</td>
		<td>:</td>
		<td><input type="text" name="tgl_kembali" placeholder="Tahun-Bulan-Tanggal" required="required" /></td>
	  </tr>
		<tr>
		<td width="150" height="30">Denda</td>
		<td>:</td>
		<td> <select name="denda" id="denda" > 
		<option value="Rp. 500,00" selected>1 Hari</option>
		<option value="Rp. 1000,00" selected>2 Hari</option>
		<option value="Rp. 1500,00" selected>3 Hari</option>
		<option value="Rp. 2000,00" selected>4 Hari</option>
		<option value="Rp. 2500,00" selected>5 Hari</option>
		<option value="Rp. 3000,00" selected>6 Hari</option>
		<option value="Rp. 3500,00" selected>1 Minggu</option>
		</select></td>
	  </tr>
	  <tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	
		<td><input type="submit" name="submit" value="Input" /></td>
		<td><input type="reset" name="reset" value="Reset" /></td>
		</tr>
	</form>
	</table>
	</td>
	</tr>

<tr>
<td colspan="2" align="center" height="50">&copyCreditCikita </td>
</tr>

</body>
</html>