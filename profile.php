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
</td>
</tr>

<tr>
<td width="800">
<center>
<h1>Peminjaman</h1><br>
<a href="tambah.php?mod=tambah" class="tmbl tombol1">TAMBAH PINJAMAN</a>
<br><br><br>
<table width="700" border="1" cellpadding="2" cellspacing="2" align="center">
  <tr bgcolor="#666666" class="style1" align="center">
    <td width="226">ID BUKU</td>
    <td width="266">ID ANGGOTA</td>
	<td width="226">TANGGAL PINJAM</td>
    <td width="266">TANGGAL KEMBALI</td>
	<td width="226">DENDA</td>
    <td width="100">Edit</td>
    <td width="110">Hapus</td>
  </tr>
</center>
<?php
include "config/koneksi.php";
?>
<?php
$query="select * from peminjaman";
$row=mysqli_query($db_link,$query);
while ($data=mysqli_fetch_array($row)) {
?>

<tr align="center">
    <td width="226"><?php echo $data['id_buku'];?></td>
    <td width="266"><?php echo $data['id_anggota'];?></td>
	<td width="226"><?php echo $data['tgl_pinjam'];?></td>
    <td width="266"><?php echo $data['tgl_kembali'];?></td>
	<td width="226"><?php echo $data['denda'];?></td>
    <td width="100"><a href="edit.php?id=<?php echo $data['id_buku'];?>"><img src="image/button-edit.gif" /></a></td>
    <td width="110"><a href="delete.php?id=<?php echo $data['id_buku'];?>"><img src="image/button-cross.gif" /></a></td>
  </tr>
 <?php
}
?>
</table>
</td>
</tr>

<tr>
<td colspan="2" align="center" height="50">&copyCreditCikita</td>
</tr>
</table>

</body>
</html>