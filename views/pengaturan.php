
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="col-md-6">
						<div class="panel">
									<div class="panel-heading">
										<h3 class="">Tahun Pembayaran</h3>
									</div>
									<div class="panel-body">
										<div class="row">
											<div class="col-md-12">
											<form method="POST" action="library/tahun_ajaran.php">
												<label for="">Nominal Pembayaran</label>
												<input type="number" name="nominal" id="" class="form-control" placeholder="Nominal Pembayaran"><br>
												<label for="">Tahun Pembayaran <b>Tidak boleh ada Tahun Pembayaran yang sama<b></label>
												<input type="text" max="4" class="tahun form-control" autocomplete="off" placeholder="" name="tahun_pelajaran" required><br>
												<label for="">Status</label>
												<select name="status" id="status" required class="form-control">
													<option value="" selected disabled>---Status---</option>
													<option value="Y" >Aktif</option>
													<option value="N" >Tidak Aktif</option>
												</select><br>
												<input type="submit" value="simpan" class="btn btn-success">
											</form>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="panel">
									<div class="panel-heading">
										<h3 class="">Tahun Ajaran</h3>
									</div>
									<div class="panel-body">
										<div class="row">
											<div class="col-md-12">
												<table class="table table-striped table-bordered">
													<tr>
														<th>Tahun Ajaran</th>
														<th>Status</th>
														<th>Aksi</th>
													</tr>
													<?php
														include "library/config.php";
														$tahun_ajaran=mysqli_query($koneksi,"select * from tbl_tahun_pelajaran");

													?>
														<?php foreach($tahun_ajaran as $th): ?>
													<tr>
														<td><?= $th['tahun_pelajaran'] ?></td>
														<td><?php if($th['status']=='Y'){
															echo"Aktif";
														}else{
															echo"Tidak Aktif";
														} 
														?></td>
														<td><!--<a href="library/hapus_tahun_ajaran.php?id=<?=$th['id']?>" class="btn btn-danger btn-xs btn-del"><i class="fa fa-trash"></i></a>-->
														<a href="index.php?page=edit_pengaturan&id=<?=$th['id']?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></a></td>
													</tr>
													<?php endforeach;?>
													
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
					<!-- END OVERVIEW -->
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		<script type="text/javascript">
			$('.tahun').datepicker({
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