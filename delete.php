<?php
include "config/koneksi.php";
$id=$_GET['id'];
$query=mysql_query("delete from peminjaman where id_buku='$id'") or die (mysql_error());
if ($query){
	echo"<script>window.alert('Data Berhasil Dihapus !');
	window.location=('index.php')</script>";
}
?>