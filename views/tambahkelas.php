
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
                    <!-- OVERVIEW -->
                    <div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Tambah Data Siswa</h3>
								</div>
								<div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-6">
										<form method="POST" action="library/simpan_kelas.php">
											<label for="">Nama Kelas</label>
											<input type="text" class="form-control" placeholder="Nama Kelas" name="nama" required><br>
											<label for="">Wali Kelas</label>
                                            <input type="text" class="form-control" placeholder="Wali Kelas" name="wali_kelas" required><br>
                                            <input type="submit" value="simpan" class="btn btn-success">
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