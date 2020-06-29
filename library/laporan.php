<?php

include 'config.php';
$data=$_POST['data'];
//$lb=$_POST['lb'];
$kelas=$_POST['kelas'];
header("location:../index.php?page=hasil_laporan&id=$data&ik=$kelas");