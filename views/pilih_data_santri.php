<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="panel panel-headline">
                <div class="panel-heading">
                    <h3>Data Santri</h3>
                        <br><br>
                        <a href="index.php?page=tambahdatasiswa" class="btn btn-success">&plus; Tambah Data Santri</a>
                </div>
                <div class="panel-body">
                <div class="col-md-5">
                    <form action="library/data_perkelas.php" method="POST">
                        <label for="">Pilih Kelas</label>
                        <select name="kelas" id="" required class="form-control">
                            <option value="" selected disabled>--- Pilih Kelas ---</option>
                            <?php
                                include 'library/config.php';
                                $query=mysqli_query($koneksi,"SELECT * FROM tbl_kelas");
                                while($data=mysqli_fetch_array($query)){
                            ?>
                            <option value="<?=$data['id']?>"><?=$data['nama']?></option>
                                <?php }?>
                        </select><br>
                        <input type="submit" class="btn btn-primary" value="Lihat Data">
                        </form>
                    </div>
                
                    <div class="col-md-5" style="padding-left: 100px;">
                    <form action="library/data_santri_jk.php" method="POST">
                        <label for="">Jenis Kelamin</label>
                        <select name="jenis_kelamin" id="" class="form-control">
                            <option value="" selected disabled>--- Pilih Jenis Kelamin ---</option>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select><br>
                        <input type="submit" class="btn btn-primary" value="Lihat Data">
                
                    </form>
                    </div>
                </div>
            </div>
            </div>
    </div>
</div>