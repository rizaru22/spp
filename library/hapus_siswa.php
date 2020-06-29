<?php

//koneksi
include 'config.php';

//menangkap data id  yang di kirim dari url
$nis=$_GET['id'];
$kelas=$_GET['k'];
$jk=$_GET['jk'];

//hapus data
mysqli_query($koneksi,"delete from tbl_siswa where nis='$nis'");

//mengalihkan ke halaman data siswa
if(!empty($kelas)){
    header("location:../index.php?page=datasiswa&id=$kelas");
}
if(!empty($jk)){
    header("location:../index.php?page=data_santri_jk&id=$jk");
}