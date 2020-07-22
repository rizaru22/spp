
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
                    <!-- OVERVIEW -->
                    <div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Edit Data Siswa</h3>
								</div>
								<div class="panel-body">
                                    <div class="row">
                                        <?php
                                            include 'library/config.php';
                                            $id=$_GET['id'];
                                            $status=['Aktif','Tidak aktif'];
                                            $query=mysqli_query($koneksi,"SELECT * FROM tbl_kelas where id=$id");
                                            $data=mysqli_fetch_array($query);
                                        ?>
                                        <div class="col-md-6">
										<form method="POST" action="library/edit_kelas.php?id=<?=$id ?>">
											<label for="">Kelas</label>
											<input type="text" class="form-control" placeholder="Nama Kelas" name="nama" required value="<?=$data['nama']?>"><br>
											<label for="">Wali Kelas</label>
                                            <input type="text" class="form-control" placeholder="Wali Kelas" name="wali_kelas" required value="<?=$data['wali_kelas']?>"><br>
											<label for="">Status</label>
											<select name="status" id="" class="form-control">
											<?php foreach($status as $status):?>
											<?php if($status==$data['status']):?>
												<option value="<?=$status?>" selected><?=$status?></option>
											<?php else:?>
												<option value="<?=$status?>"><?=$status?></option>
											<?php endif?>
											<?php endforeach;?>
											</select><br>
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