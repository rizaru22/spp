<?php

include 'config.php';

$tahun_pelajaran=$_POST['tahun_pelajaran'];
$status=$_POST['status'];
$nominal=$_POST['nominal'];


mysqli_query($koneksi,"insert into tbl_tahun_pelajaran values('','$tahun_pelajaran','1','$status','$nominal')");
$query=mysqli_query($koneksi,"select id from tbl_tahun_pelajaran where tahun_pelajaran='$tahun_pelajaran' AND semester='1' AND status='$status' AND nominal='$nominal'");

$result=mysqli_fetch_array($query);
$id_tahun=$result['id'];
$bulan=1;
while($bulan<13){
$bln=mysqli_query($koneksi,"INSERT INTO tbl_bulan values('','$id_tahun',$bulan)");
$bulan++;
}
header('location:../index.php?page=pengaturan');

?>