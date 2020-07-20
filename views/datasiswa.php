
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
                    <!-- OVERVIEW -->
                    <div class="panel">
								<div class="panel-heading">
									<h3 class="" style="display:inline-block">Data Santri</h3>
									<a href="index.php?page=tambahdatasiswa" class="btn btn-primary btn-sm pull-right"><b> &plus; Tambah Santri</b></a>
								</div>
								<hr>
								<div class="panel-body">
									<div class="kelas">
										<div class="row">
											<div class="col-md-1">
												<p><b>Kelas :</b></p>
											</div>
											<div class="col-md-2">
										<?php
											include 'library/config.php';
											$id_kelas=$_GET['id'];
											$q=mysqli_query($koneksi,"SELECT nama from tbl_kelas where id=$id_kelas");
											while($kelas=mysqli_fetch_array($q)){

										?>
										<p><b><?=$kelas['nama']?></b></p>
											<?php } ?><br>
											</div>
										</div>
									</div>
									<table class="table table-striped table-bordered" id="example">
										<thead>
											<tr>
												<th class="">#</th>
												<th>NISN</th>
												<th>Nama </th>
												<th>Jenis Kelamin </th>
												<th>Kelas </th>
												<th>Wali Kelas </th>
												<th>Status </th>
												<th class="">Aksi</th>
											</tr>
										</thead>
										<tbody id="tampil">
											<?php
											
											$kelas=$_GET['id'];
											$sql=mysqli_query($koneksi,"select ts.nis,ts.status,ts.nama,ts.jk,ts.id_kelas,tk.id,tk.nama as nama_kelas,tk.wali_kelas from tbl_siswa as ts inner join tbl_kelas as tk where ts.id_kelas=tk.id AND ts.id_kelas=$kelas order by nama asc");
											$no=1;
											while ($data=mysqli_fetch_array($sql)):
											?>
											<tr>
												<td><?=$no?></td>
												<td><?=$data['nis']?></td>
												<td><?=$data['nama']?></td>
												<td><?php if($data['jk']=='L'){echo"Laki-Laki";}else{echo"Perempuan";}?></td>
												<td><?=$data['nama_kelas']?></td>
												<td><?=$data['wali_kelas']?></td>
												<td><button class='btn <?php if($data['status']=='aktif'):?> btn-success <?php elseif($data['status']=='pindah'):?> btn-danger <?php elseif($data['status']=='tamat'):?> btn-primary <?php endif;?> btn-xs'><?=$data['status']?></button></td>
												<td class='col-md-2 '>
													<!--<a href='library/hapus_siswa.php?id=<?=$data['nis']?>&k=<?=$data['id_kelas']?>' class='btn btn-danger btn-xs btn-del' title='Hapus'><i class='fa fa-trash'></i></a>-->
													<a href='index.php?page=edit_siswa&id=<?=$data['nis']?>' class='btn btn-warning btn-xs' title='Edit'><i class='fa fa-edit'></i></a>
													<a href='index.php?page=infosiswa&id=<?=$data['nis']?>' class='btn btn-primary btn-xs' title='Detail'><i class='fa fa-info'></i></a>
												</td>
											</tr>
											<?php
											$no++;
											endwhile;
											?>
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
		<div class="clearfix"></div>
		
