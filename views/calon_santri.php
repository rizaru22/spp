<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="panel panel-headline">
                <div class="panel-heading">
                    <a href="library/reset_calon_santri.php?jk=<?=$_GET['id']?>" class="btn-reset btn btn-danger pull-right">Reset</a>
                    <h3>Calon Santri</h3>
                </div>
                <div class="panel-body">
                    <table class="table table-striped table-bordered" id="example">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>NISN</th>
                                <th>Nama Lengkap</th>
                                <th>Jenis Kelamin</th>
                                <th>File Upload</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="tampil">
                            <?php
                                include 'library/config.php';
                                include 'library/enkripsi.php';
                                $jk=$_GET['id'];
                                $sql=mysqli_query($koneksi,"select * from tbl_calon_santri where jk='$jk'");
                                $sql_s_l=mysqli_query($koneksi,"select * from tbl_calon_santri where jk='L'");
                                $sql_s_p=mysqli_query($koneksi,"select * from tbl_calon_santri where jk='P'");
                                $no=1;
                                while ($data=mysqli_fetch_array($sql)):
                            ?>
                            <tr>
                                <td><?=$no++ ?></td>
                                <td><?=$data['nisn'] ?></td>
                                <td><?=$data['nama'] ?></td>
                                <td><?php if($data['jk']=='L'){
                                    echo"Laki-laki";
                                }else{
                                    echo"Perempuan";
                                }  ?></td>
                                <td>
                                    <a href="assets/psb/<?=$data['kk']?>" class="btn btn-warning btn-xs" target="_blank">KK</a>
                                    <a href="assets/psb/<?=$data['ijazah']?>" class="btn btn-info btn-xs" target="_blank">Ijazah</a>
                                    <a href="assets/psb/<?=$data['ktp_wali']?>" class="btn btn-danger btn-xs" target="_blank">KTP Wali</a>
                                    <a href="assets/psb/<?=$data['file_nisn']?>" class="btn btn-success btn-xs" target="_blank">NISN</a>
                                    <a href="assets/psb/<?=$data['bpjs']?>" class="btn btn-primary btn-xs" target="_blank">BPJS</a>
                                </td>
                                <td>
                                    <form action="library/aktif_santri.php?jk=<?=$jk?>" method="POST" style="display: inline">
                                        <input type="hidden" name="nisn" value="<?=$data['nisn']?>">
                                        <input type="submit" name="ket" class="btn btn-primary btn-xs" value="<?php if($data['ket']=='Tidak Aktif'){ echo'Aktif';}else{echo'Tidak Aktif';} ?>">
                                        <!--<button class="btn btn-primary btn-xs">Aktif</button>-->
                                    </form>
                                    <a href="library/hapus_calon_santri.php?id=<?=$data['id']?>&jk=<?=$jk?>" class="btn-del btn btn-danger btn-xs">Hapus</a>
                                    <a href="psb/cetak.php?id=<?=$data['no_hp']?>" class="btn btn-success btn-xs" target="_blank"><i class="fa fa-print"></i> Cetak</a>
                                </td>
                            </tr>
                            <?php 
                                endwhile;
                            ?>
                        </tbody>
                    </table>
                    <br>
                    <table>
                        <tr>
                            <th>Calon Santri Laki-laki</th>
                            <th>:</th>
                            <th><?=$s_l=mysqli_num_rows($sql_s_l)?></th>
                        </tr>
                        <tr>
                            <th>Calon Santri Perempuan</th>
                            <th>:</th>
                            <th><?=$s_l=mysqli_num_rows($sql_s_p)?></th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>