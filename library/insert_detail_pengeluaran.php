<?php
include 'config.php';
$id_pengeluaran=$_POST['id_pengeluaran'];
$perihal=$_POST['perihal'];
$nominal=$_POST['nominal'];
mysqli_query($koneksi,"INSERT INTO tbl_detail_pengeluaran SET id_pengeluaran='$id_pengeluaran',perihal='$perihal',nominal='$nominal'");
header("location:../index.php?page=detail_pengeluaran&id=$id_pengeluaran");
?>