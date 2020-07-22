<?php

//masukkan koneksi db
include 'config.php';

$nama=$_POST['nama'];
$wali_kelas=$_POST['wali_kelas'];

//masukkan data ke dalam tabel
mysqli_query($koneksi,"insert into tbl_kelas values('','$nama','$wali_kelas','Aktif')");

header('location:../index.php?page=datakelas');