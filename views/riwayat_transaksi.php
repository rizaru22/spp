
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
								<div class="panel-body">
                                    <table class="table table-bordered table-striped" id="example">
										<thead>
											<tr>
												<td>NISN</td>
												<td>Nama</td>
												<td>Kelas</td>
												<td>Pembayaran SPP</td>
												<td>Tanggal Pembayaran</td>
											</tr>	
										</thead>
										<tbody>
											<?php 
											$nisn=$_GET['id'];
											include 'library/konversi_bulan.php';
											include 'library/config.php';
											$riwayat=mysqli_query($koneksi,"SELECT tbl_siswa.nis,tbl_siswa.nama as nama_siswa,tbl_kelas.nama as kelas,tbl_bulan.bulan,tbl_detail_bayar.tanggal_pembayaran
											FROM tbl_bayar
											INNER JOIN tbl_detail_bayar ON tbl_bayar.id=tbl_detail_bayar.id_bayar
											INNER JOIN tbl_siswa ON tbl_bayar.nisn=tbl_siswa.nis
											INNER JOIN tbl_kelas ON tbl_siswa.id_kelas=tbl_kelas.id
											INNER JOIN tbl_bulan ON tbl_detail_bayar.id_bulan=tbl_bulan.id
											INNER JOIN tbl_tahun_pelajaran
											WHERE tbl_tahun_pelajaran.status='Y' AND tbl_siswa.nis=$nisn");
											?>
											<?php foreach($riwayat as $r ):?>
											<tr>
												<td><?= $r['nis'] ?></td>
												<td><?= $r['nama_siswa'] ?></td>
												<td><?= $r['kelas'] ?></td>
												<td><?php
													echo konversi_bulan($r['bulan']);
												?></td>
												<td><?= date('d F Y',strtotime($r['tanggal_pembayaran'])) ?></td>
											</tr>
											<?php endforeach;?>
										</tbody>
									</table>
								</div>
							</div>
					<!-- END OVERVIEW -->
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->