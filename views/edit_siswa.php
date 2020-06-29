
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
                                    <?php 
                                        include 'library/config.php';
										$id=$_GET['id'];
										$jk=['L','P'];
                                        $data=mysqli_query($koneksi,"select * from tbl_siswa where nis='$id'");
                                        while($d=mysqli_fetch_array($data)){

                                        
                                    ?>
                                        <div class="col-md-6">
											<form action="library/update_siswa.php" method="POST">
											<label for="">NISN</label>
											<input type="text" class="form-control" placeholder="NISN" name="nisn" required value="<?=$d['nis'] ?>"><br>
											<label for="">Nama Lengkap</label>
											<input type="text" class="form-control" placeholder="Nama Lengkap" name="nama" required value="<?=$d['nama'] ?>"><br>
											<label for="">Tempat Lahir</label>
											<input type="text" class="form-control" placeholder="Tempat Lahir" name="tempat_lahir" required value="<?=$d['tempat_lahir'] ?>"><br>
											<label for="">Tanggal Lahir</label>
                                            <input type="text" autocomplete="off" id="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir" name="tanggal_lahir" required value="<?=$d['tanggal_lahir'] ?>"><br>
											<label for="">Kelas</label>
                                            <select name="kelas" id="" class="form-control" required>
											<?php
											$sql=mysqli_query($koneksi,"select * from tbl_kelas");
											while ($kelas=mysqli_fetch_array($sql)){
                                                if($kelas['id']==$d['id_kelas']){
                                                echo"<option value='$kelas[id]' selected>$kelas[nama]</option>";
                                            }else{
                                                echo"<option value='$kelas[id]'>$kelas[nama]</option>";
                                                }
											}
												
											?>	
											</select><br>
											<label for="">Jenis Kelamin</label>
                                            <select name="jk" id="" class="form-control" required>
											<?php
											foreach($jk as $j){
												if($j==$d['jk']){
											?>
												<option value='<?=$j?>' selected><?php if($j=="L"){echo"Laki - laki";}else{echo"Perempuan";} ?></option>
												<?php
												}else{
													?>
												<option value='<?=$j?>' ><?php if($j=="L"){echo"Laki - laki";}else{echo"Perempuan";} ?></option>
												<?php
											}
											}
											?>
											</select><br>
											<label for="">Alamat</label>
											<textarea class="form-control" placeholder="Alamat" name="alamat" required ><?=$d['alamat']?></textarea><br>
											<label for="">Nama Ayah</label>
											<input type="text" class="form-control" placeholder="Nama Ayah" name="nama_ayah" required value="<?=$d['nama_ayah'] ?>"><br>
											<label for="">Nama Ibu</label>
                                            <input type="text" class="form-control" placeholder="Nama Ibu" name="nama_ibu" required value="<?=$d['nama_ibu'] ?>"><br>
                                            <?php } ?>
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
		<!-- END MAIN -->
		<script type="text/javascript">
			$('#tanggal_lahir').datepicker({
				format: 'yyyy-mm-dd',
				startView:"decade",
				minView:"decade",   
				autoclose: true
				})
    </script>