<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="panel">
                <div class="panel-heading">
                    <h4>Edit Tahun Ajaran</h4>
                </div>
                <div class="panel-body">
                    <?php 
                        include 'library/config.php';
                        $id=$_GET['id'];
                        $s=[1,2];
                        $stat=['Y','N'];
                        $query=mysqli_query($koneksi,"select * from tbl_tahun_pelajaran where id=$id");
                        $data=mysqli_fetch_array($query);
                    ?>
                    <div class="col-md-6">
                        <form action="library/edit_pengaturan.php?id=<?= $id ?>" method="post">
                        <label for="">Tahun Pelajaran</label>
                        <input type="number" class="form-control" required name="tahunpelajaran" placeholder="Tahun Pelajaran" value="<?= $data['tahun_pelajaran'] ?>"><br>
                        <label for="">Semester</label>
                        <select name="semester" id="" required class="form-control">
                            <option value="" disabled>---Semester---</option>
                            <?php foreach($s as $sm): ?>
                                <?php if($data['semester']==$sm){ ?>
                                <option value="<?=$sm?>" selected>
                                <?php 
                                if($sm==1){
                                    echo"Ganjil";
                                }else{
                                    echo"Genap";
                                }
                                ?>
                                </option>
                                <?php }else{ ?>
                                    <option value="<?=$sm?>">
                                    <?php
                                    if($sm==1){
                                    echo"Ganjil";
                                }else{
                                    echo"Genap";
                                }
                                ?>
                                    </option>
                                <?php } ?>
                            <?php  endforeach;  ?>
                        </select><br>
                        <label for="">Status</label>
                        <select name="status" id="" required class="form-control">
                            <option value="" disabled>---Status---</option>
                            <?php foreach($stat as $st): ?>
                                <?php if($st==$data['status']){?>
                                <option value="<?= $st?>" selected><?php if($st=='Y'){
                                    echo"Aktif";
                                }else{
                                    echo"Tidak Aktif";

                                } ?>
                                </option>
                            <?php }else{?>
                                <option value="<?= $st?>" ><?php if($st=='Y'){
                                    echo"Aktif";
                                }else{
                                    echo"Tidak Aktif";

                                } ?>
                                </option>
                            <?php } ?> 
                            <?php endforeach; ?>    
                        </select><br>
                        <label for="">Nominal Pembayaran</label>
                        <input type="text" class="form-control" placeholder="Nominal Pembayaran" name="nominal" value="<?= $data['nominal'] ?>"><br>
                        <input type="submit" class="btn btn-success" value="Simpan">
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>