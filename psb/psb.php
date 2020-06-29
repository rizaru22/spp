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
        <h1 class="text-center"> Pendaftaran Calon Santri</h1>
        <div class="col-md-6">
            <div class="panel panel-headline">
                <form action="../library/psb.php" method="post" enctype="multipart/form-data">
                <div class="panel-heading">
                    <h4>Data Calon Santri</h4>
                </div>
                <div class="panel-body">
                    <label for="">Nama Lengkap *</label>
                    <input type="text" class="form-control" name="nama" required><br>
                    <label for="">NISN </label>
                    <input type="number" class="form-control" name="nisn" ><br>
                    <label for="">Jenis Kelamin *</label>
                    <select name="jk" id="" required class="form-control">
                        <option value="0" selected disabled>Jenis Kelamin</option>
                        <option value="L">Laki-Laki</option>
                        <option value="P">Perempuan</option>
                    </select><br>
                    <label for="">NO. NIK </label>
                    <input type="number" class="form-control" name="no_nik" ><br>
                    <label for="">Tanggal Lahir (Tahun-Bulan-Tanggal Contoh:2011-11-29) *</label>
                    <input type="text" class="form-control" autocomplete="off" id="tanggal_lahir" name="tanggal_lahir" required><br>
                    <label for="">Tempat Lahir *</label>
                    <input type="text" class="form-control" name="tempat_lahir" required><br>
                    <label for="">Asal Sekolah *</label>
                    <input type="text" name="asal" required class="form-control">
                    <label for="">Alamat *</label>
                    <textarea name="alamat" id="" rows="5" required class="form-control"></textarea><br>
                    <br>
                    <b>* Wajib Diisi</b>
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
                    <input type="text" class="form-control" required name="nama_wali"><br>
                    <label for="">No. HP *</label>
                    <input type="number" class="form-control" required name="no_hp"><br>
                    <label for="">Alamat *</label>
                    <textarea name="alamat_wali" class="form-control" required></textarea>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-headline">
                <div class="panel-heading">
                    <h4>Simpan Data</h4>
                </div>
                <div class="panel-body">
                  <!--  <label for="">KK</label>
                    <input type="file" class="form-control" name="kk"><br>
                    <label for="">Ijazah</label>
                    <input type="file" class="form-control" name="ijazah"><br>
                    <label for="">KTP Wali</label>
                    <input type="file" class="form-control" name="ktp_wali"><br>
                    <label for="">NISN</label>
                    <input type="file" class="form-control" name="f_nisn"><br>
                    <label for="">BPJS</label>
                    <input type="file" class="form-control" name="bpjs"><br>-->
                    <input type="submit" name="" class="btn btn-primary" id="" value="Simpan Data">
                </form>
                </div>
            </div>
        </div>
    </div>
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