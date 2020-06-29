<?php 
include 'library/config.php';
$query=mysqli_query($koneksi,"SELECT * FROM tbl_kelas");

?>
<script>
	$(document).ready(function(){
		$('#tahun').change(function(){
			var tahun_id=$(this).val();

			$.ajax({
				type:'POST',
				url:'library/bulan.php',
				data:'tahun='+tahun_id,
				success:function(response){
					$('#bulan').html(response);
				}
			});
		})
	});
</script>
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="col-md-6">
                    <div class="panel">
								<div class="panel-heading">
									<h3 class="">Laporan Tahunan</h3>
								</div>
								<div class="panel-body">
									<form action="library/laporan.php" method="POST">
									<label for="" >Tahun</label>
									<select name="data" style="width: 300px;" id="" class="form-control" required>
												<option value="">--- Pilih tahun ---</option>
												<?php 
												$tahun=mysqli_query($koneksi,"SELECT tahun_pelajaran,id FROM tbl_tahun_pelajaran where status='Y'");
												while($thn=mysqli_fetch_array($tahun)):
												?> 
												<option value="<?=$thn['tahun_pelajaran']?>"><?=$thn['tahun_pelajaran']?></option>
												<?php endwhile;?>
											</select><br>
									<label for="">Kelas</label>
									<select name="kelas" required id="" class="form-control" style="width: 300px;" required>
										<option value="" selected disabled>---Pilih Kelas---</option>
										<?php 
											while($kelas=mysqli_fetch_array($query)):
										?> 
										<option value="<?= $kelas['id']?>"><?=$kelas['nama'] ?></option>
											<?php endwhile; ?>
									</select>	
									<br>
									<input type="submit" class="btn btn-primary" value="Lihat Laporan">
									</form>
								</div>
							</div>
							</div>
							<div class="col-md-6">
								<div class="panel">
									<div class="panel-heading">
										<h3>Laporan Harian</h3>
									</div>
									<div class="panel-body">
										<form action="library/laporan_harian.php" method="POST">
											<label for="">Tanggal</label>
											<input type="text" class="form-control datepicker" required name="tanggal" autocomplete="off"><br><br><br>
											<input type="submit" class="btn btn-primary" value="Lihat Laporan"><br><br><br>
										</form>
									</div>
								</div>
							</div>
					<div class="col-md-6">
                    <div class="panel">
								<div class="panel-heading">
									<h3 class="">Laporan Bulanan</h3>
								</div>
								<div class="panel-body">
									<form action="library/laporan_bulanan.php" method="POST">
									<label for="" >Tahun</label>
									<select name="tahun" style="width: 300px;" id="tahun" class="form-control" required>
												<option value="">--- Pilih Tahun ---</option>
												<?php 
												$tahun=mysqli_query($koneksi,"SELECT tahun_pelajaran,id FROM tbl_tahun_pelajaran where status='Y'");
												while($thn=mysqli_fetch_array($tahun)):
												?> 
												<option value="<?=$thn['tahun_pelajaran']?>"><?=$thn['tahun_pelajaran']?></option>
												<?php endwhile;?>
											</select><br>
									<label for="">Bulan</label>
									<select name="bulan" style="width: 300px;" id="bulan" class="form-control" required>
										<option value="">--- Pilih Bulan ---</option>
									</select><br>
									<label for="">Kelas</label>
									<select name="kelas" required id="" class="form-control" style="width: 300px;" required>
										<option value="" selected disabled>---Pilih Kelas---</option>
										<?php 
										$query=mysqli_query($koneksi,"SELECT * FROM tbl_kelas");
											while($kelas_b=mysqli_fetch_array($query)):
										?> 
										<option value="<?= $kelas_b['id']?>"><?=$kelas_b['nama'] ?></option>
											<?php endwhile; ?>
									</select>	
									<br>
									<input type="submit" class="btn btn-primary" value="Lihat Laporan">
									</form>
								</div>
							</div>
							</div>
					<!--<div class="col-md-6">
                    <div class="panel">
								<div class="panel-heading">
									<h3 class="">Laporan Mingguan</h3>
								</div>
								<div class="panel-body">
									<form action="library/laporan_mingguan.php" method="POST">
									<label for="" >Tanggal</label>
									<input type="text" required name="tanggal" class="form-control datepicker" autocomplete="off">
									<label for="">Kelas</label>
									<select name="kelas" required id="" class="form-control" required>
										<option value="" selected disabled>---Pilih Kelas---</option>
										<?php 
										$query=mysqli_query($koneksi,"SELECT * FROM tbl_kelas");
											while($kelas_b=mysqli_fetch_array($query)):
										?> 
										<option value="<?= $kelas_b['id']?>"><?=$kelas_b['nama'] ?></option>
											<?php endwhile; ?>
									</select>	
									<br>
									<input type="submit" class="btn btn-primary" value="Lihat Laporan">
									</form>
								</div>
							</div>
							</div>-->
					<!-- END OVERVIEW -->
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		
		<script type="text/javascript">
			$('.date-own').datepicker({
				minViewMode: 2,
				format: 'yyyy'
			});
			$('.monthpicker').datepicker({
				minViewMode: 1,
				format: 'yyyy-m',
			});
			$('.datepicker').datepicker({
				format: 'yyyy-m-d',
			});
		</script>