<?php
include 'config.php';

$id=$_GET['id'];
$tahunajaran=$_POST['tahunpelajaran'];
$semester=$_POST['semester'];
$status=$_POST['status'];
$nominal=$_POST['nominal'];

mysqli_query($koneksi,"update tbl_tahun_pelajaran set tahun_pelajaran='$tahunajaran',semester='$semester',status='$status',nominal='$nominal' where id='$id'");
header('location:../index.php?page=pengaturan');
?>