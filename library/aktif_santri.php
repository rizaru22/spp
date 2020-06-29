<?php 
    include '../library/config.php';
    $nisn=$_POST['nisn'];
    $ket=$_POST['ket'];
    $jk=$_GET['jk'];
    mysqli_query($koneksi,"UPDATE tbl_calon_santri set ket='$ket' where nisn=$nisn");
    header("Location:../index.php?page=calon_santri&id=$jk");
?>