<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pendaftaran Calon Santri</title>
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="../assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="../assets/vendor/chartist/css/chartist-custom.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="../assets/css/main.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <style>
        body{
            background: #F3F5F8;
            color: #676a6d;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center"> Update Data Calon Santri</h2><br>
        <div class="col-md-6">
            <div class="panel panel-headline">
                <form action="../library/update_calon_santri.php" method="post" enctype="multipart/form-data">
                <div class="panel-heading">
                    <h4>Data Calon Santri</h4>
                </div>
                <?php
                    include '../library/config.php';
                    include '../library/enkripsi.php';

                    $no_hp=$_GET['id'];
                    $jk=['L','P'];
                    
                    $query=mysqli_query($koneksi,"SELECT * FROM tbl_calon_santri where no_hp='$no_hp'");
                    $cek=mysqli_num_rows($query);
                    if($cek>0){

                    while($data=mysqli_fetch_array($query)){
                        

                ?>
                <div class="panel-body">
                    <label for="">Nama Lengkap *</label>
                    <input type="text" class="form-control" name="nama" required value="<?=$data['nama']?>"><br>
                    <label for="">NISN </label>
                    <input type="number" class="form-control" name="nisn"  value="<?=$data['nisn']?>"><br>
                    <label for="">Tanggal Lahir (Tahun-Bulan-Tanggal Contoh:2011-11-29) *</label>
                    <input type="text" class="form-control" autocomplete="off" id="tanggal_lahir" name="tanggal_lahir" required value="<?=$data['tanggal_lahir']?>"><br>
                    <label for="">Tempat Lahir *</label>
                    <input type="text" class="form-control" name="tempat_lahir" required value="<?=$data['tempat_lahir']?>"><br>
                    <label for="">Jenis Kelamin *</label>
                    <select name="jk" id="" required class="form-control">
                        <?php foreach($jk as $j):
                            if($j==$data['jk']):
                            ?>
                            <option value="<?=$j?>" selected><?php echo($j == 'L'?'Laki-laki':'Perempuan') ?></option>
                            <?php else:  ?>
                                <option value="<?=$j?>"><?php echo($j == 'L'?'Laki-laki':'Perempuan') ?></option>

                        <?php 
                        endif;
                        endforeach;
                        ?>
                    </select><br>
                    <label for="">NO. NIK </label>
                    <input type="number" class="form-control" name="no_nik" value="<?=$data['no_nik']?>"><br>
                    <label for="">Asal Sekolah *</label>
                    <input type="text" name="asal" required class="form-control" value="<?=$data['asal_sekolah']?>">
                    <label for="">Alamat *</label>
                    <textarea name="alamat" id="" rows="5" required class="form-control"><?=$data['alamat']?></textarea><br>
                    <br>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-headline">
                <div class="panel-heading">
                    <h4>Data Wali</h4>
                </div>
                <div class="panel-body">
                    <label for="">Nama Wali *</label>
                    <input type="text" class="form-control" required name="nama_wali" value="<?=$data['nama_wali']?>"><br>
                    <label for="">No. HP *</label>
                    <input type="number" class="form-control" required name="no_hp" value="<?=$data['no_hp']?>"><br>
                    <label for="">Alamat *</label>
                    <textarea name="alamat_wali" class="form-control" required><?=$data['alamat_wali']?></textarea>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-headline">
                <div class="panel-heading">
                    <h4>Simpan Data</h4>
                </div>
                <div class="panel-body">
                <!--    <label for="">KK <?php //if(!empty($data['kk'])){ echo"<i class='fa fa-check' style='color: limegreen'></i>"; } ?></label>
                    <input type="file" class="form-control" name="kk" value="<?=$data['kk']?>"><br>
                    <label for="">Ijazah <?php //if(!empty($data['ijazah'])){ echo"<i class='fa fa-check' style='color: limegreen'></i>"; } ?></label>
                    <input type="file" class="form-control" name="ijazah" value="<?=$data['ijazah']?>"><br>
                    <label for="">KTP Wali <?php //if(!empty($data['ktp_wali'])){ echo"<i class='fa fa-check' style='color: limegreen'></i>"; } ?></label>
                    <input type="file" class="form-control" name="ktp_wali" value="<?=$data['ktp_wali']?>"><br>
                    <label for="">NISN <?php //if(!empty($data['file_nisn'])){ echo"<i class='fa fa-check' style='color: limegreen'></i>"; } ?></label>
                    <input type="file" class="form-control" name="f_nisn" value="<?=$data['file_nisn']?>"><br>
                    <label for="">BPJS <?php //if(!empty($data['bpjs'])){ echo"<i class='fa fa-check' style='color: limegreen'></i>"; } ?></label>
                    <input type="file" class="form-control" name="bpjs" value="<?=$data['bpjs']?>"><br>-->
                    <input type="submit" name="" class="btn btn-primary" id="" value="Simpan Data">
                </form>
                <br><br>
                <b>Ket :</b><br>
                   <!-- <b><i class="fa fa-check" style="color: limegreen"></i> File Sudah DiUpload</b><br>-->
                    <b>* Wajib Diisi</b>
                    <?php
                    }
                    }else{
                        echo"<center><label>Data Tidak Ditemukan</label></center>";
                    } 
                 ?>
                </div>
            </div>
        </div>
    </div>
    <!--<script src="assets/vendor/jquery/jquery.min.js"></script>-->
	
	<!--<script src="assets/scripts/klorofil-common.js"></script>-->

    <script type="text/javascript">
     $('#tanggal_lahir').datepicker({
  format: 'yyyy-mm-dd',
  startView:"decade",
  minView:"decade",   
  autoclose: true
})
    </script>
</body>
</html>