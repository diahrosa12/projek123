<?php
include "config/koneksi.php";
$id_anggota=$_POST['id_anggota'];
$tgl_pinjam=$_POST['tgl_pinjam'];
$tgl_kembali=$_POST['tgl_kembali'];
$denda=$_POST['denda'];

$hoo="insert into peminjaman (id_anggota,tgl_pinjam,tgl_kembali,denda) values ('".$id_anggota."','".$tgl_pinjam."','".$tgl_kembali."','".$denda."')";
$haa=mysqli_query($db_link,$hoo);
if ($haa) {
	echo "<script>window.alert('Berhasil Menambah Data !');
	window.location=('index.php')</script>";
}else {
	echo "<script>alert ('gagal ditambahkan');
	document.location.href='tambah.php';</script>";
}
?>