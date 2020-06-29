<?php

include 'config.php';

$id=$_GET['id'];
$jk=$_GET['jk'];

$gbr=mysqli_query($koneksi,"SELECT kk,ijazah,ktp_wali,file_nisn,bpjs from tbl_calon_santri");
$gambar=mysqli_fetch_array($gbr);
unlink("../assets/psb/$gambar[kk]");
unlink("../assets/psb/$gambar[ijazah]");
unlink("../assets/psb/$gambar[ktp_wali]");
unlink("../assets/psb/$gambar[file_nisn]");
unlink("../assets/psb/$gambar[bpjs]");
mysqli_query($koneksi,"DELETE FROM tbl_calon_santri WHERE id=$id");
header("location:../index.php?page=calon_santri&id=$jk");