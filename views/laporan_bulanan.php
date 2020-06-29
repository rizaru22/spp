
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
                    <!-- OVERVIEW -->
                    <div class="panel">
                        <?php 
                        include 'library/format_rupiah.php';
                        include 'library/konversi_bulan.php';
                        include 'library/config.php';
                        $tahun=$_GET['id']; 
                        //$lb=$_GET['lb'];
                        $kelas=$_GET['ik']; 
                        $bulan=$_GET['ib']; 
                        $query_kelas=mysqli_query($koneksi,"SELECT nama FROM tbl_kelas WHERE id=$kelas");
                        ?>
								<div class="panel-heading text-center">
                                    <img src="assets/img/logo.png" style="width:100px; float:left">
                                    <h3 class="" style="display:inline-block">Laporan Bulanan Pembayaran SPP</h3>
                                    <h4 class="text-center">DAYAH TERPADU MADINATUDDINIYAH JABAL NUR PALOH LADA</h4>
                                    <h4 class="text-center">Kec. Dewantara Kab. Aceh Utara</h4>
                                </div>
                                <div class="panel-body">
                                    <table class="">
                                    <tr>
                                        <td><h4>Tahun </h4></td>
                                        <td><h4> : </h4></td>
                                        <td><h4> <?=$tahun?></h4></td>
                                    </tr>
                                    <tr>
                                        <td>
                                    <h4>Kelas </h4>
                                        </td>
                                        <td><h4> : </h4></td>
                                        <td><h4><?php 
                                        while($data_kelas=mysqli_fetch_array($query_kelas)):
                                    ?><?=$data_kelas['nama']?><?php  endwhile; ?></h4></td>
                                    </tr>
                                    <tr>
                                        <td>
                                        <h4>Bulan </h4>
                                        </td>
                                        <td><h4> : </h4></td>
                                        <td><h4><?=konversi_bulan($bulan)?></h4></td>
                                    </tr>
                                    
                                    </table>
                                </div>
								<hr>
								<div class="panel-body">
                                    <div class="row">

                                        <table class="table table-bordered table-striped" id="">
                                            <thead>
                                            <tr>
                                                <td>Nama Santri</td>
                                                <td class="col-md-3"><span class="pull-right"> Nominal Pembayaran</span></td>
                                            </tr>
                                            </thead>
                                            <?php 
                                            $laporan=mysqli_query($koneksi,"SELECT S.nis,S.nama,
                                            SUM(IF(bulan=$bulan,nominal,0)) as Nominal
                                            FROM tbl_siswa as S
                                            LEFT OUTER JOIN view_laporan_kelas as V ON V.nis=S.nis AND tahun='$tahun' WHERE S.id_kelas='$kelas' GROUP BY S.nis ORDER BY S.nama"); 
                                            ?>
                                            <tbody>
                                                <?php while($data=mysqli_fetch_array($laporan)): ?>
                                            <tr>
                                                <td><?=$data['nama']?></td>
                                                <td><span class="pull-right"><?= rupiah($data['Nominal'])?></span></td>
                                            </tr>
                                                <?php endwhile; ?>
                                            </tbody>
                                            <thead>
                                            <?php
                                                $query_total=mysqli_query($koneksi,"SELECT
                                                SUM(IF(bulan=$bulan,nominal,0)) as Total
                                                FROM tbl_siswa as S
                                                INNER JOIN view_laporan_kelas as V ON v.nis=S.nis  WHERE S.id_kelas='$kelas' AND tahun=$tahun");
                                                while($total=mysqli_fetch_array($query_total)){

                                            ?>
                                                <th colspan="2">Total <span class="pull-right"><?=rupiah($total['Total'])?></span></th>
                                                <?php } ?>
                                            </thead>
                                        </table>
                                        <a href="#" onclick="window.print()"><i class="fa fa-print btn btn-success print pull-right" title="Cetak Laporan"> Cetak Laporan</i></a><br><br>

                                    </div>
								</div>
							</div>
					<!-- END OVERVIEW -->
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
        <!-- END MAIN -->
        