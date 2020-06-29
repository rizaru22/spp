<?php
    include 'config.php';
    $id=$_GET['id'];
    if($query=mysqli_query($koneksi,"DELETE FROM tbl_tahun_pelajaran where id=$id")){
        $hapus_bulan=mysqli_query($koneksi,"DELETE FROM tbl_bulan WHERE id_tahun=$id");
        header('location:../index.php?page=pengaturan');
    }

?>