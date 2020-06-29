<?php

//masukkan koneksi db
include 'config.php';

$nisn=$_POST['nisn'];
$nama=addslashes($_POST['nama']);
$tempat_lahir=addslashes($_POST['tempat_lahir']);
$tanggal_lahir=$_POST['tanggal_lahir'];
$alamat=addslashes($_POST['alamat']);
$jk=$_POST['jk'];
$kelas=$_POST['kelas'];
$nama_ayah=addslashes($_POST['nama_ayah']);
$nama_ibu=addslashes($_POST['nama_ibu']);

//masukkan data ke dalam tabel
mysqli_query($koneksi,"insert into tbl_siswa values('$nisn','$nama','$jk','$tempat_lahir','$tanggal_lahir','$alamat','$kelas','$nama_ayah','$nama_ibu')");

header("location:../index.php?page=datasiswa&id=$kelas");