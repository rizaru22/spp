
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
                    <!-- OVERVIEW -->
                    <div class="panel">
								<div class="panel-heading">
									<h3 class="">Riwayat Transaksi</h3>
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
										<form method="POST" action="library/p_riwayat_transaksi.php">
										<label for="">Pilih Kelas</label>
                                            <select name="kelas" id="kelas" class="form-control" required>
                                                <option value="" disabled selected>---Pilih Kelas---</option>
												<?php
												include 'library/config.php';
												$sql=mysqli_query($koneksi,"select * from tbl_kelas");
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