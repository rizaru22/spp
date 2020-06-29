<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="panel">
                <div class="panel-heading">
                    <h3>Dashboard</h3>
                    <hr>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-3">
                            <a href="index.php?page=pembayaran" style="color:gray">
                                <div class="metric">
                                    <span class="icon"><i class="fa fa-money"></i></span>
                                    <p>
                                    <span class="number">&nbsp;</span>

                                        <span class="title">Pembayaran SPP</span>
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="index.php?page=laporan" style="color:gray">
                                <div class="metric">
                                    <span class="icon"><i class="fa fa-file"></i></span>
                                    <p>
                                        <span class="number">&nbsp;</span>
                                        <span class="">Laporan Pemasukan</span>
                                    </p>
                                </div>
                            </a>
						</div>
                        <div class="col-md-3">
                            <a href="index.php?page=laporan_pengeluaran" style="color:gray">
                                <div class="metric">
                                    <span class="icon"><i class="fa fa-file-text"></i></span>
                                    <p>
                                        <span class="number">&nbsp;</span>
                                        <span class="" style="font-size: 14px">Laporan Pengeluaran</span>
                                    </p>
                                </div>
                            </a>
						</div>
                        <div class="col-md-3">
                            <a href="index.php?page=pengeluaran" style="color:gray">
                                <div class="metric">
                                    <span class="icon"><i class="fa fa-arrow-circle-o-up"></i></span>
                                    <p>
                                        <span class="number">&nbsp;</span>
                                        <span class="title">Pengeluaran Kas</span>
                                    </p>
                                </div>
                            </a>
						</div>
                        <!--<div class="col-md-3">
                            <a href="index.php?page=riwayat_transaksi" style="color:gray">
                                <div class="metric">
                                    <span class="icon"><i class="fa fa-history"></i></span>
                                    <p>
                                        <span class="title"><h5> Riwayat Transaksi</h5></span>
                                    </p>
                                </div>
                            </a>
						</div>-->
                    </div>
                </div>
            </div>
            <?php
                include 'library/config.php';
                include 'library/format_rupiah.php';
                $tanggal=date('yy-m-d');
                $query=mysqli_query($koneksi,"SELECT tbl_siswa.nama,tbl_detail_bayar.nominal
                FROM tbl_detail_bayar
                INNER JOIN tbl_bayar ON tbl_bayar.id=tbl_detail_bayar.id_bayar
                INNER JOIN tbl_siswa ON tbl_siswa.nis=tbl_bayar.nisn
                WHERE tbl_detail_bayar.tanggal_pembayaran='$tanggal'");
            ?>
            <div class="col-md-6">
                <div class="panel">
                    <div class="panel-heading">
                        <h3>Pemasukan Hari Ini</h3>
                    </div>
                    <div class="panel-body">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th>Nama Siswa</th>
                                    <th>Nominal Pembayaran</th>
                                </tr>
                                <?php
                                    while($data=mysqli_fetch_array($query)):
                                ?>
                                <tr>
                                    <td><?=$data['nama']?></td>
                                    <td><?=rupiah($data['nominal'])?></td>
                                </tr>
                                    <?php endwhile; ?>
                                <?php
                                    $t_query=mysqli_query($koneksi,"SELECT sum(tbl_detail_bayar.nominal) as Total
                                    FROM tbl_detail_bayar
                                    INNER JOIN tbl_bayar ON tbl_bayar.id=tbl_detail_bayar.id_bayar
                                    INNER JOIN tbl_siswa ON tbl_siswa.nis=tbl_bayar.nisn
                                    WHERE tbl_detail_bayar.tanggal_pembayaran='$tanggal'");
                                    while($total=mysqli_fetch_array($t_query)):
                                ?>
                                <tr>
                                    <th>Total</th>
                                    <th><?=rupiah($total['Total'])?></th>
                                </tr>
                                    <?php endwhile;?>
                            </tbody>
                        </table>
                    </div>
                </div>
                
            </div>
            <?php
                $pengeluaran=mysqli_query($koneksi,"SELECT tbl_pengeluaran.penerima,tbl_detail_pengeluaran.nominal
                FROM tbl_pengeluaran
                INNER JOIN tbl_detail_pengeluaran ON tbl_pengeluaran.id_pengeluaran=tbl_detail_pengeluaran.id_pengeluaran
                WHERE tbl_pengeluaran.tanggal='$tanggal'");
                $t_pengeluaran=mysqli_query($koneksi,"SELECT sum(tbl_detail_pengeluaran.nominal)as Total
                FROM tbl_pengeluaran
                INNER JOIN tbl_detail_pengeluaran ON tbl_pengeluaran.id_pengeluaran=tbl_detail_pengeluaran.id_pengeluaran
                WHERE tbl_pengeluaran.tanggal='$tanggal'");
                $t_p=mysqli_fetch_array($t_pengeluaran);
            ?>
            <div class="panel col-md-6">
                <div class="panel-heading">
                    <h3>Pengeluaran Hari Ini</h3>
                </div>
                <div class="panel-body">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>Nama Penerima</th>
                                <th>Nominal</th>
                            </tr>
                            <?php
                                while($peng=mysqli_fetch_array($pengeluaran)):
                            ?>
                            <tr>
                                <td><?=$peng['penerima']?></td>
                                <td><?=rupiah($peng['nominal'])?></td>
                            </tr>
                                <?php endwhile; ?>
                            <tr>
                                <th>Total</th>
                                <th><?=rupiah($t_p['Total'])?></th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>