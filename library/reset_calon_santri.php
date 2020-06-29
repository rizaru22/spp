<?php
    include 'config.php';
    $jk=$_GET['jk'];
    $reset_data=mysqli_query($koneksi,"DELETE FROM tbl_calon_santri");
    $reset_id=mysqli_query($koneksi,"ALTER TABLE tbl_calon_santri AUTO_INCREMENT=1");

    header("location:../index.php?page=calon_santri&id=$jk");