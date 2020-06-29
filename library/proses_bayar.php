<?php

include 'config.php';

$nisn=$_POST['siswa'];
$tahun=$_POST['tahun'];

$cek_pembayaran=mysqli_query($koneksi,"SELECT tbl_bayar.nisn
FROM tbl_bayar
INNER JOIN tbl_detail_bayar ON tbl_detail_bayar.id_bayar=tbl_bayar.id
INNER JOIN tbl_tahun_pelajaran ON tbl_detail_bayar.id_tahun=tbl_tahun_pelajaran.id
WHERE tbl_tahun_pelajaran.id=$tahun AND tbl_bayar.nisn=$nisn");
mysqli_query($koneksi,"insert into tbl_bayar values('','$nisn')");
$jml_brs=mysqli_num_rows($cek_pembayaran);
if($jml_brs==0){
    $query=mysqli_query($koneksi,"INSERT INTO tbl_bayar values ('','$nisn','$tahun')");
}
header("location:../index.php?page=detail_pembayaran&id=$nisn&tahun=$tahun");