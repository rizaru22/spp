<?php 
include 'library/config.php';
include 'library/format_rupiah.php';


?>
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
                    <!-- OVERVIEW -->
                    <div class="row">
                        <div class="col-md-6">
                        <div class="panel">
								<div class="panel-heading">
									<h3 class="">Laporan Tahunan</h3>
								</div>
								<div class="panel-body">
									<form action="library/laporan_pengeluaran.php?action=tahun" method="POST" autocomplete="off">
                                    <label for="" >Tahun</label>
                                    <input class="form-control" id="date" name="date" placeholder="YYYY" type="text"/>
									<br>
									
									<input type="submit" class="btn btn-primary" value="Lihat Laporan">
									</form>
								</div>
							</div>
							</div>
                    <!-- END OVERVIEW -->
                    <div class="col-md-6">
                        <div class="panel">
                        <div class="panel-heading">
									<h3 class="">Laporan Bulanan</h3>
                        </div>
                        <div class="panel-body">
                        <form action="library/laporan_pengeluaran.php?action=bulan" method="POST" autocomplete="off">
                                    <label for="" >Pilih Tahun dan Bulan</label>
                                    <input class="form-control" id="dateMonthYear" name="date" placeholder="MM-YYYY" type="text"/>
									<br>
									
									<input type="submit" class="btn btn-primary" value="Lihat Laporan">
									</form>
                        </div>
                        </div>
                    </div>  
                    <div class="col-md-6">
                        <div class="panel">
                        <div class="panel-heading">
									<h3 class="">Laporan Harian</h3>
                        </div>
                        <div class="panel-body">
                        <form action="library/laporan_pengeluaran.php?action=hari" method="POST" autocomplete="off">
                                    <label for="" >Pilih Tanggal</label>
                                    <input class="form-control" id="dateFull" name="date" placeholder="YYYY-MM-DD" type="text"/>
									<br>
									
									<input type="submit" class="btn btn-primary" value="Lihat Laporan">
									</form>
                                            </div>
                        </div>
                    </div> 
                    <div class="col-md-6">
                        <div class="panel">
                        <div class="panel-heading">
									<h3 class="">Saldo</h3>
                        </div>
                        <div class="panel-body">
                            <?php
                            $query=mysqli_query($koneksi,"SELECT SUM(nominal) FROM tbl_detail_bayar");
                            $data=mysqli_fetch_row($query);
                            $uang_masuk=$data[0];

                            $query1=mysqli_query($koneksi,"SELECT SUM(nominal) FROM tbl_detail_pengeluaran");
                            $data1=mysqli_fetch_row($query1);
                            $uang_keluar=$data1[0];

                            $saldo=$uang_masuk-$uang_keluar;
                           
                            ?>
                            <table class="table">
                                <tr>
                                    <th>Total Kredit</th>
                                    <th>Total Debet</th>
                                    <th>Saldo</th>
                                </tr>
                                <tr>
                                 <?php   
                                 echo '<th>'.rupiah($uang_masuk).'</th>
                                    <th>'.rupiah($uang_keluar).'</th>
                                    <th>'.rupiah($saldo).'</th>';
                                ?>
                                </tr>
                            </table>
                                            </div>
                        </div>
                    </div>
                </div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
        </div>
     
		<!-- END MAIN -->
		
		<script type="text/javascript">
			$("#date").datepicker({
                format: "yyyy",
                viewMode: "years",
                minViewMode: "years",
                orientation: "bottom auto"
            });

            $('#dateMonthYear').datepicker({
            format: 'mm-yyyy',
            viewMode:"months",
            minViewMode:"months",
            autoclose: true,
            orientation: "bottom auto"
    });
    $('#dateFull').datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true
            
    });
		</script>