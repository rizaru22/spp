
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
                        $query_kelas=mysqli_query($koneksi,"SELECT nama FROM tbl_kelas WHERE id=$kelas");
                        ?>
								<div class="panel-heading text-center">
                                    <img src="assets/img/logo.png" style="width:100px; float:left">
                                    <h3 class="" style="display:inline-block">Laporan Tahunan Pembayaran SPP</h3>
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
                                    
                                    </table>
                                </div>
								<hr>
								<div class="panel-body">
                                    
                                    <div class="row">

                                        <table class="table table-bordered table-striped" id="">
                                            <thead>
                                            <tr>
                                                <td>Nama</td>
                                                <td>Januari</td>
                                                <td>Februari</td>
                                                <td>Maret</td>
                                                <td>April</td>
                                                <td>Mei</td>
                                                <td>Juni</td>
                                                <td>Juli</td>
                                                <td>Agustus</td>
                                                <td>September</td>
                                                <td>Oktober</td>
                                                <td>November</td>
                                                <td>Desember</td>
                                            </tr>
                                            </thead>
                                            <?php 
                                            $laporan=mysqli_query($koneksi,"SELECT S.nis,S.nama,
                                            SUM(IF(bulan=1,nominal,0)) as Januari,
                                            SUM(IF(bulan=2,nominal,0)) as Februari,
                                            SUM(IF(bulan=3,nominal,0)) as Maret,
                                            SUM(IF(bulan=4,nominal,0)) as April,
                                            SUM(IF(bulan=5,nominal,0)) as Mei,
                                            SUM(IF(bulan=6,nominal,0)) as Juni,
                                            SUM(IF(bulan=7,nominal,0)) as Juli,
                                            SUM(IF(bulan=8,nominal,0)) as Agustus,
                                            SUM(IF(bulan=9,nominal,0)) as September,
                                            SUM(IF(bulan=10,nominal,0)) as Oktober,
                                            SUM(IF(bulan=11,nominal,0)) as November,
                                            SUM(IF(bulan=12,nominal,0)) as Desember
                                            FROM tbl_siswa as S
                                            LEFT OUTER JOIN view_laporan_kelas as V ON V.nis=S.nis AND tahun='$tahun' WHERE S.id_kelas='$kelas' GROUP BY S.nis ORDER BY S.nama"); 
                                            ?>
                                            <tbody>
                                                <?php 
                                                $total=0;
                                                $grandtotal=0;
                                                while($data=mysqli_fetch_array($laporan)): ?>
                                            <tr>
                                                <td><?= $data['nama'] ?></td>
                                                <td><?= rupiah($data['Januari'])?></td>
                                                <td><?= rupiah($data['Februari'])?></td>
                                                <td><?= rupiah($data['Maret'])?></td>
                                                <td><?= rupiah($data['April'])?></td>
                                                <td><?= rupiah($data['Mei'])?></td>
                                                <td><?= rupiah($data['Juni'])?></td>
                                                <td><?= rupiah($data['Juli'])?></td>
                                                <td><?= rupiah($data['Agustus'])?></td>
                                                <td><?= rupiah($data['September'])?></td>
                                                <td><?= rupiah($data['Oktober'])?></td>
                                                <td><?= rupiah($data['November'])?></td>
                                                <td><?= rupiah($data['Desember'])?></td>
                                            </tr>
                                                <?php 
                                                $total=$data['Januari']+$data['Februari']+$data['Maret']+$data['April']+$data['Mei']+$data['Juni']+$data['Juli']+$data['Agustus']+$data['September']+$data['Oktober']+$data['November']+$data['Desember'];
                                                $grandtotal+=$total;
                                            endwhile; ?>
                                            <tr><td><b>Total</b></td>
                                            <td colspan='12'><b><?= rupiah($grandtotal); ?></b></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <a href="#" onclick="window.print()"><i class="fa fa-print btn btn-success print pull-right" title="Cetak Laporan"> Cetak Laporan</i></a><br>
                                    </div>
								</div>
							</div>
					<!-- END OVERVIEW -->
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
        <!-- END MAIN -->
        