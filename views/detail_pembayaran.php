
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
                    <!-- OVERVIEW -->
                    <div class="panel">
								<div class="panel-heading">
									<h3>Pembayaran</h3>
								</div>
								<?php 
									include 'library/format_rupiah.php';
									include 'library/konversi_bulan.php';
									include 'library/config.php';
									$nisn=$_GET['id'];
									$id_tahun=$_GET['tahun'];
									$siswa=mysqli_query($koneksi,"select tbl_bayar.id,tbl_bayar.nisn,tbl_siswa.nama,tbl_kelas.nama as kelas from tbl_bayar inner join tbl_siswa inner join tbl_kelas where tbl_bayar.nisn='$nisn' and tbl_siswa.nis=tbl_bayar.nisn and tbl_kelas.id=tbl_siswa.id_kelas");
									$tahun=mysqli_query($koneksi,"select * from tbl_tahun_pelajaran where id='$id_tahun'");
									$thn=mysqli_fetch_array($tahun);

									$it=$thn['id'];
									$data=mysqli_fetch_array($siswa);
								?>
								<div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-10">
										<table>
											<tr>
												<td>Nama</td>
												<td class="col-md-3">:</td>
												<td><?= $data['nama']; ?></td>
											</tr>
											<tr>
												<td>NISN</td>
												<td class="col-md-3">:</td>
												<td><?= $data['nisn']?></td>
											</tr>
											<tr>
												<td>Kelas</td>
												<td class="col-md-3">:</td>
												<td><?= $data['kelas']?></td>
											</tr>
											<tr>
												<td>Tahun</td>
												<td class="col-md-3">:</td>
												<td><?= $thn['tahun_pelajaran']?></td>
											</tr>
										</table>
                                        <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal">&plus;</button><br><br>
                                        <table class="table table-bordered">
										<thead>
											<tr>
												<th>Pembayaran</th>
												<th>Telah Dibayar</th>
												<th>Sisa</th>
												<th>Status</th>
												<th class="col-md-3">Aksi</th>
											</tr>
										</thead>
										<tbody>
											
											<?php 
												$bayar=mysqli_query($koneksi,"select tbl_bulan.bulan,SUM(tbl_detail_bayar.nominal) as nominal,tbl_detail_bayar.id,tbl_tahun_pelajaran.nominal as nomi, tbl_bulan.id as id_bulan
												FROM tbl_bayar
												INNER JOIN tbl_detail_bayar ON tbl_detail_bayar.id_bayar=tbl_bayar.id
												INNER JOIN tbl_siswa ON tbl_bayar.nisn=tbl_siswa.nis
												INNER JOIN tbl_bulan ON tbl_bulan.id=tbl_detail_bayar.id_bulan
												INNER JOIN tbl_tahun_pelajaran ON tbl_tahun_pelajaran.id=tbl_detail_bayar.id_tahun
												WHERE tbl_siswa.nis=$nisn AND tbl_tahun_pelajaran.id=$id_tahun
												GROUP BY tbl_bulan.bulan");

												foreach($bayar as $byr):?>
												
													<tr>
													<td><?= konversi_bulan($byr['bulan']) ?></td>
													<td><?=rupiah($byr['nominal'])?></td>
													<td><?=rupiah($sisa=$byr['nomi']-$byr['nominal']) ?></td>
													<td><?php
														if($sisa==0){
															echo"LUNAS";
														}else{
															echo"BELUM LUNAS";
														}
													?></td>
													<td><a href="index.php?page=detail_transaksi_pembayaran&id=<?=$nisn?>&it=<?=$_GET['tahun']?>&idb=<?=$byr['id_bulan']?>" class="btn btn-primary btn-xs">Detail</a>
													<a href="index.php?page=cetak_pembayaran&idb=<?=$data['id'] ?>&id_bulan=<?=$byr['id_bulan']?>" class="btn btn-success btn-xs" target="_blank"><i class="fa fa-print"> Cetak</i></a>
													</td>
													</tr>
												<?php endforeach;?>
										</tbody>
									</table>
                                            <!-- The Modal -->
                                            <div class="modal fade" id="myModal">
                                            <div class="modal-dialog">
                                                <div class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Pembayaran Pada Bulan</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
												

                                                <!-- Modal body -->
                                                <div class="modal-body">
												<form method="POST" action="library/p_detail_bayar.php">
												<input type='hidden' value="<?= $data['id'] ?>" name="id_bayar">
												<label for="">Pilih Bulan</label>
                                                    <select name="bulan" id="" class="form-control">
												<?php
													$q=mysqli_query($koneksi,"select tbl_bulan.bulan
													FROM tbl_bayar
													INNER JOIN tbl_detail_bayar
													INNER JOIN tbl_siswa
													INNER JOIN tbl_bulan
													WHERE tbl_bayar.nisn=tbl_siswa.nis AND tbl_bayar.id=tbl_detail_bayar.id_bayar AND tbl_bulan.id=tbl_detail_bayar.id_bulan AND tbl_siswa.nis=$nisn");
													//$byr=mysqli_fetch_array($q);
													$query=mysqli_query($koneksi,"select tbl_bulan.id,tbl_bulan.bulan from tbl_bulan 
													Where tbl_bulan.id_tahun=$it order by tbl_bulan.bulan");
														while($bln=mysqli_fetch_array($query)){ ?>
															<option value="<?=$bln['id']?>"><?= konversi_bulan($bln['bulan'])?></option>
														<?php
														}
														?>
                                                    </select><br>
													<?php
													$query=mysqli_query($koneksi,"select * from tbl_bulan ");
														$tahun=mysqli_fetch_array($query);		
													?>
													<label for="">Nominal</label>
													<input type="number" class="form-control" name="nominal">
													<br>
													<input type="hidden" name="id_tahun" value="<?= $it?>">
													<input type="hidden" name="nisn" value="<?= $nisn; ?>">
                                                    <input type="submit" class="btn btn-primary" value="Bayar">
													</form>
                                                </div>

                                                <!-- Modal footer -->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                                                </div>

                                                </div>
                                            </div>
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