<?php
include 'config.php';
$penerima=$_POST['penerima'];
//$tanggal=date()
mysqli_query($koneksi,"INSERT INTO tbl_pengeluaran SET tanggal=CURDATE(), penerima='$penerima'");
$query=mysqli_query($koneksi,"SELECT id_pengeluaran FROM tbl_pengeluaran ORDER BY id_pengeluaran DESC LIMIT 1");
$data=mysqli_fetch_row($query);
$id=$data[0];
header("location:../index.php?page=detail_pengeluaran&id=$id");
?>