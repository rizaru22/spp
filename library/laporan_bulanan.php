<?php

include 'config.php';
$tahun=$_POST['tahun'];
//$lb=$_POST['lb'];
$kelas=$_POST['kelas'];
$bulan=$_POST['bulan'];
header("location:../index.php?page=laporan_b&id=$tahun&ik=$kelas&ib=$bulan");