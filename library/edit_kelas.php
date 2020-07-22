<?php

include 'config.php';

$kelas=$_POST['nama'];
$wali_kelas=$_POST['wali_kelas'];
$id=$_GET['id'];
$status=$_POST['status'];

mysqli_query($koneksi,"update tbl_kelas set nama='$kelas',wali_kelas='$wali_kelas',status='$status'  where id='$id'");
header('location:../index.php?page=datakelas');

?>