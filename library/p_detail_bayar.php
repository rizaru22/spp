<?php
    include "config.php";

    $id_bayar=$_POST['id_bayar'];
    $id_bulan=$_POST['bulan'];
    $id_tahun=$_POST['id_tahun'];
    $nisn=$_POST['nisn'];
    $tanggal=date('Y-m-d');
    $nominal=$_POST['nominal'];
    
   $q_nominal_p=mysqli_query($koneksi,"SELECT nominal FROM tbl_tahun_pelajaran WHERE id='$id_tahun'");
    $nominal_p=mysqli_fetch_array($q_nominal_p);
    $nom=mysqli_query($koneksi,"SELECT SUM(tbl_detail_bayar.nominal) as nominal FROM tbl_detail_bayar INNER JOIN tbl_bayar ON tbl_bayar.id=tbl_detail_bayar.id_bayar WHERE tbl_detail_bayar.id_bulan='$id_bulan' AND tbl_bayar.nisn='$nisn' AND tbl_detail_bayar.id_tahun='$id_tahun'");
    $nomi=mysqli_fetch_array($nom);
    $total=$nomi['nominal']+$nominal;
    if($total>$nominal_p['nominal']){
        echo "<script>confirm('Nominal yang dimasukkan tidak sesuai');window.location.href='../index.php?page=detail_pembayaran&id=$nisn&tahun=$id_tahun'</script>";
    }else{
    mysqli_query($koneksi,"insert into tbl_detail_bayar values('','$id_bayar','$id_tahun','$id_bulan','$tanggal','$nominal')");

    
    echo"<script>window.open('../index.php?page=cetak_detail_p&idb=$id_bayar&tanggal=$tanggal&id_bulan=$id_bulan');
    window.location.href='../index.php?page=detail_pembayaran&id=$nisn&tahun=$id_tahun'</script>";
    //header("location:../index.php?page=detail_pembayaran&id=$nisn&tahun=$id_tahun");
}

?>
