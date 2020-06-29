<?php

    $tanggal=$_POST['tanggal'];
    $kelas=$_POST['kelas'];

    header("location:../index.php?page=laporan_mingguan&tanggal=$tanggal&ik=$kelas");


?>