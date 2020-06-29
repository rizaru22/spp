<div class="main">
    <div class="main-content">
        <div class="container-fluid cetak">
            <div class="panel">
                <div class="panel-heading">
                    <img src="assets/img/logo.png" style="width:100px; float:left">
                    <h3 class="text-center">Bukti Pembayaran Iuran Bulanan</h3>
                    <h4 class="text-center">DAYAH TERPADU MADINATUDDINIYAH JABAL NUR PALOH LADA</h4>
                    <h4 class="text-center">Kec. Dewantara Kab. Aceh Utara</h4>
                </div>
                <?php
                    include 'library/konversi_bulan.php';
                    include 'library/format_rupiah.php';
                    include 'library/config.php';
                    $idb=$_GET['idb'];
                    $id_bulan=$_GET['id_bulan'];
                    $sql=("select tbl_bulan.bulan,tbl_detail_bayar.nominal,tbl_tahun_pelajaran.nominal as iuran,SUM(tbl_detail_bayar.nominal) as total, tbl_detail_bayar.tanggal_pembayaran,tbl_siswa.nama,tbl_tahun_pelajaran.tahun_pelajaran,tbl_bulan.bulan
                    FROM tbl_bayar
                    INNER JOIN tbl_detail_bayar ON tbl_detail_bayar.id_bayar=tbl_bayar.id
                    INNER JOIN tbl_siswa ON tbl_siswa.nis=tbl_bayar.nisn
                    INNER JOIN tbl_bulan ON tbl_bulan.id=tbl_detail_bayar.id_bulan
                    INNER JOIN tbl_tahun_pelajaran ON tbl_tahun_pelajaran.id=tbl_detail_bayar.id_tahun
                    WHERE tbl_detail_bayar.id_bayar='$idb' AND tbl_detail_bayar.id_bulan='$id_bulan'");
                    $query=mysqli_query($koneksi,$sql);
                    $query_total=mysqli_query($koneksi,"SELECT SUM(tbl_detail_bayar.nominal) as total
                    FROM tbl_detail_bayar
                    WHERE id_bayar=$idb AND id_bulan=$id_bulan");
                    while($total_bayar=mysqli_fetch_array($query_total)){
                        $total=$total_bayar['total'];
                    }
                    while($data=mysqli_fetch_array($query)):

                ?> 
                <div class="panel-body">
                    <table>
                        <tr>
                            <td>Nama</td>
                            <td class="col-md-2">:</td>
                            <td><?=$data['nama'] ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Pembayaran</td>
                            <td class="col-md-2">:</td>
                            <td><?=date('d - m - yy',strtotime($data['tanggal_pembayaran'])) ?></td>
                        </tr>
                        <tr>
                            <td>Bulan</td>
                            <td class="col-md-2">:</td>
                            <td><?=konversi_bulan($data['bulan']) ?></td>
                        </tr>
                        <tr>
                            <td>Tahun</td>
                            <td class="col-md-2">:</td>
                            <td><?=$data['tahun_pelajaran'] ?></td>
                        </tr>
                        <tr>
                            <td>Total Bayar</td>
                            <td class="col-md-2">:</td>
                            <td><?=rupiah($total)?></td>
                        </tr>
                        <tr>
                            <td>Sisa</td>
                            <td class="col-md-2">:</td>
                            <td><?=rupiah($sisa=$data['iuran']-$total)?></td>
                        </tr>
                    <?php endwhile; ?>
                    </table>
                    <br><br><br>
        <div class="panitia">
            <h5>Petugas</h5>
        </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    window.print();
</script>