
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
                    <!-- OVERVIEW -->
                    <div class="panel">
								<div class="panel-heading">
									<h3>Pengeluaran</h3>
								</div>
								<?php 
									include 'library/format_rupiah.php';
                                    include 'library/konversi_bulan.php';
                                    include 'library/function_date.php';
									include 'library/config.php';
									$id_pengeluaran=$_GET['id'];
									$pengeluaran=mysqli_query($koneksi,"SELECT tanggal,penerima FROM tbl_pengeluaran WHERE id_pengeluaran=$id_pengeluaran");
									$data=mysqli_fetch_array($pengeluaran);
								?>
								<div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-10">
										<table>
											<tr>
												<td>Tanggal</td>
												<td class="col-md-3">:</td>
												<td><?= tgl_indonesia($data['tanggal'])?></td>
											</tr>
											<tr>
												<td>Nama Penerima</td>
												<td class="col-md-3">:</td>
												<td><?= $data['penerima']?></td>
											</tr>
											
										</table>
                                        <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal">&plus;</button><br><br>
                                        <table class="table table-bordered">
										<thead>
											<tr>
												<th>No</th>
												<th>Perihal Pengeluaran</th>
												<th>Nominal</th>
												<th class="col-md-3">Aksi</th>
											</tr>
										</thead>
										<tbody>
											
											<?php 
												$detail_pengeluaran=mysqli_query($koneksi,"SELECT * FROM tbl_detail_pengeluaran WHERE id_pengeluaran=$id_pengeluaran");
                                                    $no=1;
                                                    while($data=mysqli_fetch_array($detail_pengeluaran)){
                                                    echo '<tr>
                                                    <td>'.$no.'</td>
                                                    <td>'.$data['perihal'].'</td>
                                                    <td>'.rupiah($data['nominal']).'</td>';
													$no++;
													echo'<td><a href="library/hapus_detail_pengeluaran.php?id='.$data['id_pengeluaran'].'&nominal='.$data['nominal'].'" class="btn btn-danger btn-del" title="Hapus"><i class="fa fa-trash"></i></a></td>
													</tr>';
												 } ?>
										</tbody>
                                               <!--Total-->
                                               <?php
                                               $query1=mysqli_query($koneksi,"SELECT IFNULL(SUM(nominal),0) as total FROM tbl_detail_pengeluaran WHERE id_pengeluaran=$id_pengeluaran");
                                               $data1=mysqli_fetch_row($query1);
                                               echo '<tr>
												<th colspan=2>Total</th>
												<th>'.rupiah($data1[0]).'</th>
												<th class="col-md-3">&nbsp;</th>
											</tr>';?>
									</table>
                                            <!-- The Modal -->
                                            <div class="modal fade" id="myModal">
                                            <div class="modal-dialog">
                                                <div class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Pengeluaran Kas</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
												

                                                <!-- Modal body -->
                                                <div class="modal-body">
												<form method="POST" action="library/insert_detail_pengeluaran.php">
												<input type='hidden' value="<?= $id_pengeluaran ?>" name="id_pengeluaran">
												<label for="perihal">Perihal</label>
                                                <textarea class="form-control" rows="5" id="perihal" name="perihal"></textarea>
													<br>
                                                 <label for="nominal">Nominal</label>
													<input type="number" class="form-control" name="nominal">
													<br>
                                                    <input type="submit" class="btn btn-primary" value="Simpan">
													</form>
                                                </div>

                                                <!-- Modal footer -->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                                                </div>

                                                </div>
                                            </div>
                                            </div>
                                            <div class=pull-right>
                                            <?php
                                            echo '<a href="library/cetak_pengeluaran.php?id='.$id_pengeluaran.'" target="_blank" class="btn btn-success" title="Cetak"><i class="fa fa-print"></i> Cetak Bukti</a>';
                                            ?>
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
						
					}
				}).then((result)=>{
						document.location.href=href;

				})
			})
		</script>