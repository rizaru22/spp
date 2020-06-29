<?php 
session_start();
ob_start();

//Mengatur batas login
date_default_timezone_set('Asia/Jakarta');
$timeout=$_SESSION['timeout'];
if (time()<$timeout) {
	$_SESSION['timeout']=time()+5000;
} else {
	$_SESSION['login']=0;
}

//Mencetak status login
if (empty($_SESSION['username']) or empty($_SESSION['password']) ==0) {
	header('location:views/login.php');
}
 ?>

<!doctype html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Aplikasi Pembayaran SPP</title>
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="assets/vendor/chartist/css/chartist-custom.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
	
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
	
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
	

	<style>
		.navbar{
			background: #2F8A02;
			color: white;
		}
		.sidebar .nav > li > a:focus,.sidebar .nav > li > a.active{
			background-color:#252c35;
			border-left-color: #3a981c;
		}
		.metric:hover{
			background: #0081c2;
			color: white;
			transition: .4s;
		}
		@media print{
			hr{
				display: none
			}
			.sidebar{
				display: none
			}
			.main-content{
				margin-top: -100px;
				margin-left: -200px;
			}
			.print{
				display: none
			}
			.copyright{
				display: none
			}
			.cetak{
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
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand" style="background:#2F8A02;">
				<a href="index.php"><h4 style="padding:0;margin:0;color:white"><b>PEMBAYARAN SPP</b></h4></a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle" style="color:white;"></i></button>
				</div>
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="background-color:#2F8A02;"><img src="assets/img/user.png" class="img-circle" alt="Avatar"> <span style="color:white;"><?=$_SESSION['nama']?></span> <i class="icon-submenu lnr lnr-chevron-down" style="color:white"></i></a>
							<ul class="dropdown-menu">
								<li><a href="index.php?page=ubah_pass&id=<?=$_SESSION['id']?>"><i class="fa fa-key"></i> <span>Ubah Password</span></a></li>
								<li><a href="library/logout.php"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="index.php?page=dashboard" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						<li><a href="index.php?page=datakelas" class=''><i class="fa fa-university"></i><span> Data Kelas</span></a></li>
						<li><a href="index.php?page=pilih_data_santri" class=''><i class="lnr lnr-users"></i><span> Daftar Santri</span></a></li>
						<li><a href="index.php?page=pembayaran" class=""><i class="fa fa-money"></i><span> Pembayaran SPP</span></a></li>
						<li><a href="index.php?page=pengeluaran" class=""><i class="fa fa-arrow-circle-o-up"></i> <span>Pengeluaran Kas</span></a></li>
						<!--<li><a href="index.php?page=riwayat_transaksi" class=""><i class="fa fa-history"></i>Riwayat Transaksi</a></li>-->
						<li><a href="index.php?page=pengaturan" class=""><i class="fa fa-gear"></i><span> Pengaturan Data</span></a></li>
						<li><a href="index.php?page=laporan" class=""><i class="fa fa-file"></i><span> Laporan Pemasukan</span></a></li>
						<li><a href="index.php?page=laporan_pengeluaran" class=""><i class="fa fa-file-text"></i> <span>Laporan Pengeluaran</a></span></li>
						<li><a href="index.php?page=calon_santri_jk" class=""><i class="lnr lnr-users"></i> <span> Calon Santri</span></a></li>
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
	<?php
		if(isset($_GET['page'])){
			$page=$_GET['page'];

			switch ($page) {
				case 'datasiswa':
					include"views/datasiswa.php";
				break;
				case 'datakelas':
					include"views/datakelas.php";
				break;
				case 'pembayaran':
					include"views/pembayaran.php";
				break;
				case 'tambahkelas':
					include"views/tambahkelas.php";
				break;
				case 'tambahdatasiswa':
					include"views/tambahdatasiswa.php";
				break;
				case 'pengaturan':
					include"views/pengaturan.php";
				break;
				case 'detail_pembayaran':
					include"views/detail_pembayaran.php";
				break;
				break;
				case 'edit_siswa':
					include"views/edit_siswa.php";
				break;
				case 'laporan';
					include"views/laporan.php";
				break;
				case 'riwayat_transaksi';
					include"views/p_riwayat_transaksi.php";
				break;
				case 'r_t';
					include"views/riwayat_transaksi.php";
				break;
				case 'hasil_laporan';
					include"views/hasil_laporan.php";
				break;
				break;
				case 'dashboard';
					include"views/dashboard.php";
				break;
				case 'infosiswa';
					include"views/infosiswa.php";
				break;
				case 'edit_pengaturan';
					include"views/edit_pengaturan.php";
				break;
				case 'edit_kelas';
					include"views/edit_kelas.php";
				break;
				case 'calon_santri';
					include"views/calon_santri.php";
				break;
				case 'cetak_detail_p';
					include"views/cetak_detail_pembayaran.php";
				break;
				case 'cetak_pembayaran';
					include"views/cetak_pembayaran.php";
				break;
				case 'file_upload';
					include"views/file_upload.php";
				break;
				case 'ubah_pass';
					include"views/ubah_password.php";
				break;
				case 'laporan_b';
					include"views/laporan_bulanan.php";
				break;
				case 'laporan_harian';
					include"views/laporan_harian.php";
				break;
				case 'pilih_data_santri';
					include"views/pilih_data_santri.php";
				break;
				case 'data_santri_jk';
					include"views/data_santri_jk.php";
				break;
				case 'pengeluaran';
					include"views/view_pengeluaran.php";
				break;
				case 'detail_pengeluaran';
					include"views/view_detail_pengeluaran.php";
				break;
				case 'laporan_pengeluaran';
					include"views/view_laporan_pengeluaran.php";
				break;
				case 'laporan_pengeluaran_tahunan';
					include"views/view_laporan_pengeluaran_tahunan.php";
				break;
				case 'laporan_pengeluaran_bulanan';
					include"views/view_laporan_pengeluaran_bulanan.php";
				break;
				case 'laporan_pengeluaran_harian';
					include"views/view_laporan_pengeluaran_harian.php";
				break;
				case 'laporan_mingguan';
					include"views/view_laporan_mingguan.php";
				break;
				case 'calon_santri_jk';
					include"views/calon_santri_jk.php";
				break;
				case 'detail_transaksi_pembayaran';
					include"views/detail_transaksi_pembayaran.php";
				break;
				default:
					header('location:index.php');
					break;
			}
		}else{
			header('location:index.php?page=dashboard');
		}
	
	?>
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; <?= date('Y') ?> All Rights Reserved.</p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="assets/vendor/chartist/js/chartist.min.js"></script>
	<script src="assets/scripts/klorofil-common.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
	<script>
			$(document).ready(function() {
			$('#example').DataTable({
				"columnDefs": [
        			{ "orderable": false, "targets": [0] }
   				 ]
			});
		} );
		</script>
				<script>
			$('.btn-del').on('click',function(e){
				e.preventDefault();
				const href = $(this).attr('href')

				Swal.fire({
					title:'Hapus Data',
					text:'Apakah Anda Yakin Ingin Menghapus Data Ini?',
					icon:'warning',
					showCancelButton:true,
					confirmButtonColor:'#3085d6',
					cancelButtonColor:'#d33',
					confirmButtonText: 'Hapus Data?',
					cancelButtonText:'Batal',
				}).then((result)=>{
					if(result.value){
						Swal.fire({
							position: 'center',
							icon: 'success',
							title: 'Data Berhasil Dihapus',
							showConfirmButton: false,
							timer: 700
						})
						document.location.href=href;
						
					}
				})

			})
		</script>
		<script>
			$('.btn-reset').on('click',function(e){
				e.preventDefault();
				const href = $(this).attr('href')

				Swal.fire({
					title:'Hapus Data',
					text:'Apakah Anda Yakin Ingin Menghapus Seluruh Data Calon Santri?',
					icon:'warning',
					showCancelButton:true,
					confirmButtonColor:'#3085d6',
					cancelButtonColor:'#d33',
					confirmButtonText: 'Hapus Data?',
					cancelButtonText:'Batal',
				}).then((result)=>{
					if(result.value){
						Swal.fire({
							position: 'center',
							icon: 'success',
							title: 'Data Berhasil Dihapus',
							showConfirmButton: false,
							timer: 700
						})
						document.location.href=href;
						
					}
				})

			})
		</script>

</body>

</html>