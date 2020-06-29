<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="panel">
                <div class="panel-heading">
                    <h3>Info Siswa</h3>
                    <hr>
                </div>
                <div class="panel-body">
                    <?php
                        include 'library/config.php';
                        $nis=$_GET['id'];
                        $query=mysqli_query($koneksi,"SELECT tbl_siswa.nama,tbl_siswa.nis,tbl_kelas.nama as kelas,tbl_siswa.alamat,tbl_siswa.nama_ayah,tbl_siswa.nama_ibu,tbl_siswa.jk
                        FROM tbl_siswa
                        INNER JOIN tbl_kelas ON tbl_siswa.id_kelas=tbl_kelas.id
                        WHERE tbl_siswa.nis=$nis");
                        $data=mysqli_fetch_array($query);
                    ?>
                    <table>
                        <tr>
                            <td><h4>NISN</h4></td>
                            <td><h4>:</h4></td>
                            <td><h4><?= $data['nis'] ?></h4></td>
                        </tr>
                        <tr>
                            <td><h4>Nama Siswa</h4></td>
                            <td><h4>:</h4></td>
                            <td><h4><?= $data['nama'] ?></h4></td>
                        </tr>
                        <tr>
                            <td><h4>Jenis Kelamin</h4></td>
                            <td><h4>:</h4></td>
                            <td><h4><?php if($data['jk']=='L'){echo'Laki-Laki';}else{echo'Perempuan';} ?></h4></td>
                        </tr>
                        <tr>
                            <td><h4>Alamat</h4></td>
                            <td><h4>:</h4></td>
                            <td><h4><?= $data['alamat'] ?></h4></td>
                        </tr>
                        <tr>
                            <td><h4>Kelas</h4></td>
                            <td><h4>:</h4></td>
                            <td><h4><?= $data['kelas'] ?></h4></td>
                        </tr>
                        <tr>
                            <td><h4>Nama Ayah</h4></td>
                            <td><h4>:</h4></td>
                            <td><h4><?= $data['nama_ayah'] ?></h4></td>
                        </tr>
                        <tr>
                            <td><h4>Nama Ibu</h4></td>
                            <td><h4>:</h4></td>
                            <td><h4><?= $data['nama_ibu'] ?></h4></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>