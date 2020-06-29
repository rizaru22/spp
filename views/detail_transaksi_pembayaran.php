<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="panel">
                <div class="panel-heading">
                    <h3>Detail Transaksi Pembayaran</h3>
                </div>
                <div class="panel-body">
                    <a href="index.php?page=detail_pembayaran&id=<?=$_GET['id']?>&tahun=<?=$_GET['it']?>" class="btn btn-primary">Kembali</a>
                    <br><br>
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Tanggal Transaksi</th>
                                <th>Nominal</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            include 'library/config.php';
                            include 'library/format_rupiah.php';
                            $tahun=$_GET['it'];
                            $id_bulan=$_GET['idb'];
                            $nisn=$_GET['id'];
                            $query=mysqli_query($koneksi,"SELECT tbl_detail_bayar.tanggal_pembayaran,tbl_detail_bayar.nominal,tbl_siswa.nama,tbl_detail_bayar.id FROM tbl_bayar INNER JOIN tbl_detail_bayar ON tbl_bayar.id=tbl_detail_bayar.id_bayar INNER JOIN tbl_siswa ON tbl_bayar.nisn=tbl_siswa.nis WHERE tbl_siswa.nis='$nisn' AND tbl_detail_bayar.id_tahun='$tahun' AND tbl_detail_bayar.id_bulan=$id_bulan");
                            while($detail=mysqli_fetch_array($query)):
                        ?>
                            <tr>
                                <td><?=date('d-m-yy',strtotime($detail['tanggal_pembayaran']))?></td>
                                <td><?=rupiah($detail['nominal'])?></td>
                                <td class="col-md-2"><a href="library/hapus_detail_pembayaran.php?idt=<?=$tahun?>&nisn=<?=$nisn?>&ib=<?=$detail['id']?>&id_b=<?=$id_bulan?>" class="btn btn-danger btn-del">Hapus</a></td>
                            </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>