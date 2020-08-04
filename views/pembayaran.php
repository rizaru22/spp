
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
                    <!-- OVERVIEW -->
                    <div class="panel">
								<div class="panel-heading">
									<h3 class="">Pembayaran</h3>
								</div>
								<script>
									$(document).ready(function(){
										$('#kelas').change(function(){
											var kelas_id=$(this).val();

											$.ajax({
												type:'POST',
												url:'library/kelas.php',
												data:'kelas='+kelas_id,
												success:function(response){
													$('#siswa').html(response);
												}
											});
										})
									});
								</script>
								<div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-6">
										<form method="POST" action="library/proses_bayar.php">
											<label for="">Tahun</label>
											<select name="tahun" id="" class="form-control">
												<option value="">--- Pilih tahun ---</option>
												<?php 
												include 'library/config.php';
												$tahun=mysqli_query($koneksi,"SELECT tahun_pelajaran,id FROM tbl_tahun_pelajaran where status='Y'");
												while($thn=mysqli_fetch_array($tahun)):
												?> 
												<option value="<?=$thn['id']?>"><?=$thn['tahun_pelajaran']?></option>
												<?php endwhile;?>
											</select><br>
										<label for="">Pilih Kelas</label>
                                            <select name="kelas" id="kelas" class="form-control" required>
                                                <option value="" disabled selected>---Pilih Kelas---</option>
												<?php
												$sql=mysqli_query($koneksi,"select * from tbl_kelas where  status='aktif'");
												while ($data=mysqli_fetch_array($sql)){
												echo"
												<option value=$data[id]>$data[nama]</option>";
											}
												?>
											</select><br>
											<label for="">Nama Siswa</label>
                                            <select name="siswa" id="siswa" class="form-control" required>
                                                <option value="" selected disableds>---Nama Siswa---</option>
                                            </select><br>
                                            <input type="submit" value="Lanjutkan" class="btn btn-primary">
											</form>
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
		<div class="clearfix"></div>