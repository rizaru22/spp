<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="panel panel-headline">
                <div class="panel-heading">
                    <img src="assets/img/logo.png" style="width:100px; float:left">
                    <h3 class="text-center">Laporan Harian Pembayaran SPP</h3>
                    <h4 class="text-center">DAYAH TERPADU MADINATUDDINIYAH JABAL NUR PALOH LADA</h4>
                    <h4 class="text-center">Kec. Dewantara Kab. Aceh Utara</h4>
                </div>
                <?php 
                    include 'library/config.php';
                    include 'library/format_rupiah.php';
                    $tanggal=$_GET['tanggal'];
                    $query=mysqli_query($koneksi,"SELECT tbl_siswa.nama,tbl_detail_bayar.nominal
                    FROM tbl_detail_bayar
                    INNER JOIN tbl_bayar ON tbl_bayar.id=tbl_detail_bayar.id_bayar
                    INNER JOIN tbl_siswa ON tbl_siswa.nis=tbl_bayar.nisn
                    WHERE tbl_detail_bayar.tanggal_pembayaran='$tanggal'");

                ?>
                <div class="panel-body">
                    <h4>Tanggal : <?=date('d-m-yy',strtotime($tanggal))?></h4>
                    <table class="table table-striped table-bordered">
                        <thead class="">
                            <tr>
                                <th>Nama Santri</th>
                                <th class="text-center"> Nominal Pembayaran</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $no=1;
                                while($data=mysqli_fetch_array($query)){
                            ?>
                            <tr><td><?=$no; ?>
                                <td><?=$data['nama']?></td>
                                <td><span class="pull-right"><?=rupiah($data['nominal'])?></span></td>
                                
                            </tr>
                                <?php
                                $no++;
                                } ?>
                                <thead>
                                    <?php 
                                    $t_query=mysqli_query($koneksi,"SELECT sum(tbl_detail_bayar.nominal) as Total
                                    FROM tbl_detail_bayar
                                    INNER JOIN tbl_bayar ON tbl_bayar.id=tbl_detail_bayar.id_bayar
                                    INNER JOIN tbl_siswa ON tbl_siswa.nis=tbl_bayar.nisn
                                    WHERE tbl_detail_bayar.tanggal_pembayaran='$tanggal'");
                                    while($total=mysqli_fetch_array($t_query)){
                                        ?>
                                    <tr>
                                        <th colspan="2">Total : <span class="pull-right"><?=rupiah($total['Total'])?></span></th>
                                    </tr>
                                    <?php } ?>
                                </thead>
                        </tbody>
                    </table>
                    <a href="#" onclick="window.print()"><i class="fa fa-print btn btn-success pull-right print" title="Cetak Laporan"> Cetak Laporan</i></a><br>
                </div>
            </div>
        </div>
    </div>
</div>