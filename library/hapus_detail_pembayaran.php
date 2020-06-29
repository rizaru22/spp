<?php
include 'config.php';
$nis=$_GET['nisn'];
$id_bayar=$_GET['ib'];
$id_bulan=$_GET['id_b'];
$id_tahun=$_GET['idt'];
mysqli_query($koneksi,"DELETE FROM tbl_detail_bayar WHERE  id=$id_bayar");
header("location:../index.php?page=detail_transaksi_pembayaran&id=$nis&it=$id_tahun&idb=$id_bulan");
?>