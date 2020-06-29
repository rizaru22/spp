<!doctype html>
<html lang="en">

<head>
	<title>Pendaftaran Calon Santri</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="../assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="../assets/vendor/chartist/css/chartist-custom.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="../assets/css/main.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	
</head>
<?php
include '../library/config.php';
$no_hp=$_GET['id'];
$query=mysqli_query($koneksi,"SELECT nama FROM tbl_calon_santri WHERE no_hp='$no_hp'");
$data=mysqli_fetch_row($query);
?>
<body>
    <div class="container">
        <br>
        <div class="jumbotron text-center">
            <h2>PENDAFTARAN CALON SANTRI</h2>
            <h3> Selamat <u> <?=strtoupper($data[0])?></u>, sudah terdaftar sebagai calon Santri pada Dayah Terpadu Madinatuddiniyah Jabal Nur Paloh Lada </h3>
            <p class="text-success">Silahkan ambil bukti pendaftaran pada Panitia Penerimaan Santri Baru Dayah Madinatuddiniyah Jabal Nur Paloh Lada</p>
        </div>
    </div>


    <script src="../assets/vendor/jquery/jquery.min.js"></script>
	<script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="../assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="../assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="../assets/vendor/chartist/js/chartist.min.js"></script>
	<script src="../assets/scripts/klorofil-common.js"></script>
</body>

</html>