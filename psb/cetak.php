<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak</title>
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="../assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="../assets/vendor/chartist/css/chartist-custom.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="../assets/css/main.css">
	<!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <style>
    	@page {
  size: A4;
  border: 0;
  margin: 0mm 10mm 0mm 10mm;
  
}
    @media print{
        .btn{
            display: none;
        }
        .panel{
            border: 1px solid black;
        }
    }
    .panitia{
        padding-bottom: 80px;
        float: right;
        border-bottom: 1px solid black;
        width: 100px;
    }
    .panitia h5{
        text-align: center;
    }
    
    
    </style>
</head>
<body>
    <br>
    <div class="container panel panel-headline">
        <div class="panel-heading">
            <img src="../assets/img/logo.png" style="width:100px; float:left">
            <h3 class="text-center">BUKTI DAFTAR CALON SANTRI</h3>
            <h4 class="text-center">DAYAH TERPADU MADINATUDDINIYAH JABAL NUR PALOH LADA</h4>
            <h4 class="text-center">Kec. Dewantara Kab. Aceh Utara</h4>
        </div>
        
        <?php 
            include '../library/enkripsi.php';
            include '../library/config.php';
            include '../library/function_date.php';
            $id=$_GET['id'];
            $sql=("SELECT * FROM tbl_calon_santri where no_hp=$id");
            $ex=mysqli_query($koneksi,$sql);
            $data=mysqli_fetch_array($ex);
        ?>
        <div class="panel-body">
                <img src="../assets/img/paspoto.jpg" width="20%" alt="" style="float:right">
            <table class="tabel">
            <tr>
                <td><h5>No. Pendaftaran</h5></td>
                <td class="col-md-3 text-right"><h5>:</h5></td>
                <td><h5><?= $data['id'].' / '.date('Y') ?></h5></td>
            </tr>
            <tr>
                <td><h5>NISN</h5></td>
                <td class="col-md-3 text-right"><h5>:</h5></td>
                <td><h5><?= $data['nisn'] ?></h5></td>
            </tr>
            <tr>
                <td><h5>NIK</h5></td>
                <td class="col-md-3 text-right"><h5>:</h5></td>
                <td><h5><?= $data['no_nik'] ?></h5></td>
            </tr>
            <tr>
                <td><h5>Nama Lengkap</h5></td>
                <td class="col-md-3 text-right"><h5>:</h5></td>
                <td><h5><?= $data['nama'] ?></h5></td>
            </tr>
            <tr>
                <td><h5>Tempat/Tanggal Lahir</h5></td>
                <td class="col-md-3 text-right"><h5>:</h5></td>
                <td><h5><?= $data['tempat_lahir'] ?>, <?=tgl_indonesia($data['tanggal_lahir'])?></h5></td>
            </tr>
            <tr>
                <td><h5>Asal Sekolah</h5></td>
                <td class="col-md-3 text-right"><h5>:</h5></td>
                <td><h5><?= $data['asal_sekolah'] ?></h5></td>
            </tr>
            <tr>
                <td><h5>Alamat</h5></td>
                <td  class="col-md-3 text-right"><h5>:</h5></td>
                <td><h5><?= $data['alamat'] ?></h5></td>
            </tr>
            <tr>
                <td><h5>No HP</h5></td>
                <td class="col-md-3 text-right"><h5>:</h5></td>
                <td><h5><?= $data['no_hp'] ?></h5></td>
            </tr>
            <tr>
                <td><h5>Nama Wali</h5></td>
                <td class="col-md-3 text-right"><h5>:</h5></td>
                <td><h5><?= $data['nama_wali'] ?></h5></td>
            </tr>
            <tr>
                <td><h5>Tanggal Pendaftaran</h5></td>
                <td class="col-md-3 text-right"><h5>:</h5></td>
                <td><h5><?= tgl_indonesia($data['tanggal_daftar']) ?></h5></td>
            </tr>
            <tr>
                <td><h5>Jadwal Ujian</h5></td>
                <td class="col-md-3 text-right"><h5>:</h5></td>
                <td><input type="text" class="form-control" disabled></td>
            </tr>
        </table>
        <div class="panitia">
            <h5>Panitia</h5>
        </div>
        </div>
        
        <div class="btn btn-success pull-right" style="margin-bottom: 30px;margin-top:30px;" onclick="window.print();"><i class="fa fa-print"></i> Cetak</div>
        
    </div>
</body>
</html>