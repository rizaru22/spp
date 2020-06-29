<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title class="print">Lapoaran Pembayaran SPP</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        @media print{

        
        .print{
            display: none
        }
    }
    </style>
</head>
<body>
<div class="container">
    <div class="text-center">
        <h2>Laporan Pembayaran SPP</h2>
    </div>
    <table class="table table-bordered table-striped mt-5">
        <tr>
            <td>NO</td>
            <td>NISN</td>
            <td>Nama Siswa</td>
            <td>Kelas</td>
            <td>Bulan</td>
            <td>Tanggal Pembayaran</td>
        </tr>
        <?php 
        include '../library/konversi_bulan.php';
        include '../library/config.php';
        $bulan=$_GET['id']; 
        ?>
        <?php 
        $laporan_bulanan=mysqli_query($koneksi,"SELECT tbl_siswa.nis,tbl_siswa.nama AS nama_siswa,tbl_kelas.nama AS kelas,tbl_bulan.bulan,tbl_detail_bayar.tanggal_pembayaran
        FROM tbl_bayar
        INNER JOIN tbl_detail_bayar ON tbl_bayar.id=tbl_detail_bayar.id_bayar
        INNER JOIN tbl_siswa ON tbl_bayar.nisn=tbl_siswa.nis
        INNER JOIN tbl_kelas ON tbl_siswa.id_kelas=tbl_kelas.id
        INNER JOIN tbl_bulan ON tbl_bulan.id=tbl_detail_bayar.id_bulan
        WHERE tbl_detail_bayar.tanggal_pembayaran LIKE '$bulan%'"); 
        $no=1;                                    
        ?>
         <?php foreach($laporan_bulanan as $lb):?>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $lb['nis'] ?></td>
                <td><?= $lb['nama_siswa'] ?></td>
                <td><?= $lb['kelas'] ?></td>
                <td><?= konversi_bulan($lb['bulan']) ?></td>
                <td><?= date('d F Y',strtotime($lb['tanggal_pembayaran'])) ?></td>
            </tr>
            <?php
            $no++;
            ?>
            <?php endforeach;?>
    </table>
</div>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
    window.print();
</script>
</body>
</html>