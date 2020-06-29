<?php

include 'config.php';
include 'konversi_bulan.php';

$tahun=$_POST['tahun'];

$q_t=mysqli_query($koneksi,"SELECT id FROM tbl_tahun_pelajaran where tahun_pelajaran=$tahun");
while($r_t=mysqli_fetch_array($q_t)){
    $id_tahun=$r_t['id'];
}

$sql_tahun=mysqli_query($koneksi,"select * from tbl_bulan where id_tahun='$id_tahun' order by bulan");

echo'<option value="" required disabled selected>--- Pilih Bulan ---</option>';
while($row_bulan=mysqli_fetch_array($sql_tahun)){
   echo'<option value="'.$row_bulan['bulan'].'">'.konversi_bulan($row_bulan['bulan']).'</option>';
}