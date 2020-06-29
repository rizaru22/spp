<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="panel panel-headline">
                <div class="panel-heading">
                    <img src="assets/img/logo.png" style="width:100px; float:left">
                    <h3 class="text-center">Laporan Mingguan</h3>
                    <h4 class="text-center">DAYAH TERPADU MADINATUDDINIYAH JABAL NUR PALOH LADA</h4>
                    <h4 class="text-center">Kec. Dewantara Kab. Aceh Utara</h4>
                </div>
                <?php 
                    include 'library/config.php';
                    include 'library/format_rupiah.php';
                    $ddate = $_GET['tanggal'];
                    $date = new DateTime($ddate);
                    $week = $date->format("W");
                    $no=1;
                    $total=0;
                    $query=mysqli_query($koneksi,"SELECT * FROM tbl_detail_bayar as td WHERE (SELECT week(td.tanggal_pembayaran,0))=$week-1");

                ?>
                <div class="panel-body">
                <a href="#" onclick="window.print()"><i class="fa fa-print btn btn-success print" title="Cetak Laporan"> Cetak Laporan</i></a><br><br>
                    <table class="table table-striped table-bordered">
                        <thead class="">
                            <tr>
                                <th>Tanggal Pembayaran</th>
                                <th class="text-center"> Nominal Pembayaran</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                while($data=mysqli_fetch_array($query)){
                            ?>
                            <tr>
                                <td><?=date('d-m-yy',strtotime($data['tanggal_pembayaran']))?></td>
                                <td><span class="pull-right"><?=rupiah($data['nominal'])?></span></td>
                            </tr>
                                <?php } ?>
                                <thead>
                                    <?php 
                                    $t_query=mysqli_query($koneksi,"SELECT SUM(nominal) as Total FROM tbl_detail_bayar as td WHERE (SELECT week(td.tanggal_pembayaran,0))=$week-1");
                                    while($total=mysqli_fetch_array($t_query)){
                                        ?>
                                    <tr>
                                        <th colspan="2">Total : <span class="pull-right"><?=rupiah($total['Total'])?></span></th>
                                    </tr>
                                    <?php } ?>
                                </thead>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>