<?php
    include 'config.php';
    $id=$_GET['id'];
    if($query=mysqli_query($koneksi,"DELETE FROM tbl_kelas where id=$id")){
        header('location:../index.php?page=datakelas');
    }

?>