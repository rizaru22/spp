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
$status=$_POST['status'];

//masukkan data ke dalam tabel
mysqli_query($koneksi,"update tbl_siswa set nama='$nama',jk='$jk',tempat_lahir='$tempat_lahir',tanggal_lahir='$tanggal_lahir',alamat='$alamat',id_kelas='$kelas',nama_ayah='$nama_ayah',nama_ibu='$nama_ibu',status='$status' where nis='$nisn'");

header("location:../index.php?page=datasiswa&id=$kelas");