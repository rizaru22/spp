<?php
include 'config.php';
$id_pengeluaran=$_GET['id'];
$nominal=$_GET['nominal'];
mysqli_query($koneksi,"DELETE FROM tbl_detail_pengeluaran WHERE id_pengeluaran='$id_pengeluaran' AND nominal='$nominal'");
header("location:../index.php?page=detail_pengeluaran&id=$id_pengeluaran");
?>