<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pendaftaran Calon Santri</title>
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="../assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="../assets/vendor/chartist/css/chartist-custom.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="../assets/css/main.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <style>
        body{
            background: #F3F5F8;
            color: #676a6d;
        }
    </style>
</head>
<body>
<?php 
include '../library/config.php';
$no_hp=$_GET['id'];
$query=mysqli_query($koneksi,"SELECT nama FROM tbl_calon_santri WHERE no_hp='$no_hp'");
$data=mysqli_fetch_row($query);
?>
    <div class="container">
        <h1 class="text-center"> Pendaftaran Calon Santri</h1>
        <div class="col-md-12">
            <div class="panel panel-headline">
                
                <div class="panel-heading">
                    <h4>Unggah Berkas Calon Santri <?=strtoupper($data[0])?></h4>
                </div>
               
            
        

                <div class="panel-body">
                <p>Unggah seluruh file (JPG) yang dibutuhkan, jika anda tidak memilikinya, silahkan klik tombol lewati dan silahkan lakukan perbaikan data pada menu UPDATE DATA</p>
                <form action="../library/upload_berkas_psb.php" method="post" enctype="multipart/form-data">
                <input type="hidden" id="no_hp" name="no_hp" value="<?=$no_hp?>">
                    <label for="">KK</label>
                    <input type="file" class="form-control" name="kk"><br>
                    <label for="">Ijazah</label>
                    <input type="file" class="form-control" name="ijazah"><br>
                    <label for="">KTP Wali</label>
                    <input type="file" class="form-control" name="ktp_wali"><br>
                    <label for="">NISN</label>
                    <input type="file" class="form-control" name="f_nisn"><br>
                    <label for="">BPJS</label>
                    <input type="file" class="form-control" name="bpjs"><br>
                    <input type="submit" name="" class="btn btn-primary" id="" value="Simpan Data">
                    <a href="after_daftar.php?id=<?=$no_hp?>" class="btn btn-success">Lewati</a>
                </form>
                </div>
            </div>
        </div>
        </div>
  
    <script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="assets/vendor/chartist/js/chartist.min.js"></script>
	<script src="assets/scripts/klorofil-common.js"></script>
</body>
</html>