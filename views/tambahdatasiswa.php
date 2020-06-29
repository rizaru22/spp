
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
                    <!-- OVERVIEW -->
                    <div class="panel">
								<div class="panel-heading">
									<h3 class="">Tambah Data Siswa</h3>
								</div>
								<div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-6">
											<form action="library/simpan_siswa.php" method="POST">
											<label for="">NISN</label>
											<input type="number" class="form-control" placeholder="NISN" name="nisn" required><br>
											<label for="">Nama Lengkap</label>
											<input type="text" class="form-control" placeholder="Nama Lengkap" name="nama" required><br>
											<label for="">Tempat Lahir</label>
											<input type="text" class="form-control" placeholder="Tempat Lahir" name="tempat_lahir" required><br>
											<label for="">Tanggal Lahir(Tahun-Bulan-Tanggal Contoh:2011-11-29)</label>
											<input type="text" autocomplete="off" class="form-control" id="tanggal_lahir"placeholder="Tanggal Lahir" name="tanggal_lahir" required><br>
											<label for="">Kelas</label>
                                            <select name="kelas" id="" class="form-control" required>
												<option value="" disabled selected>---Pilih Kelas---</option>
											<?php
											include 'library/config.php';
											$sql=mysqli_query($koneksi,"select * from tbl_kelas");
											while ($data=mysqli_fetch_array($sql)){
												echo"<option value='$data[id]'>$data[nama]</option>";
											}
												
											?>
												
											</select><br>
											<label for="">Jenis kelamin</label>
                                            <select name="jk" id="" class="form-control" required>
												<option value="" disabled selected>---pilih Jenis kelamin---</option>
												<option value="L">Laki-Laki</option>
												<option value="P">Perempuan</option>
											</select><br>
											<label for="">Alamat</label>
											<textarea class="form-control" placeholder="Alamat" name="alamat" required></textarea><br>
											<label for="">Nama Ayah</label>
                                            <input type="text" class="form-control" placeholder="Nama Ayah" name="nama_ayah" required><br>
											<label for="">Nama Ibu</label>
											<input type="text" class="form-control" placeholder="Nama Ibu" name="nama_ibu" required><br>
                                            <input type="submit" value="simpan" class="btn btn-primary">
                                        </div>
                                    </div>
								</div>
							</div>
					<!-- END OVERVIEW -->
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
	<script type="text/javascript">
     $('#tanggal_lahir').datepicker({
		format: 'yyyy-mm-dd',
		startView:"decade",
		minView:"decade",   
		autoclose: true
		})
    </script>