
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
                    <!-- OVERVIEW -->
                    <div class="panel">
								<div class="panel-heading">
									<h3 class="" style="display:inline-block">Data Kelas</h3>
									<a href="index.php?page=tambahkelas" class="btn btn-primary pull-right"><b> &plus; Tambah Kelas</b></a>
                                </div>
								<hr>
								<div class="panel-body">
								<div class="row">
									</div>
									<table class="table table-bordered" id="example">
										<thead>
											<tr>
												<th>#</th>
												<th>Kelas</th>
												<th>Wali Kelas</th>
												<th>Status</th>
												<th>Aksi</th>
											</tr>
										</thead>
										<tbody>
										<?php
											include 'library/config.php';
											$sql=mysqli_query($koneksi,"select * from tbl_kelas");
											$no=1;
											while ($data=mysqli_fetch_array($sql)){
											echo"
											<tr>
												<td class='col-md-1'>$no</td>
												<td>$data[nama]</td>
												<td>$data[wali_kelas]</td>
												<td>$data[status]</td>
												<td class='col-md-2'>
													<a href='library/hapus_kelas.php?id=$data[id]' class='btn btn-danger btn-del' title='Hapus'><i class='fa fa-trash'></i></a>
													<a href='index.php?page=edit_kelas&id=$data[id]' class='btn btn-warning' title='Edit'><i class='fa fa-edit'></i></a>
												</td>
											</tr>";
											$no++;
											}
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