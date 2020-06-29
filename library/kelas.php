<?php

include 'config.php';

$kelas=$_POST['kelas'];

$sql_kelas=mysqli_query($koneksi,"select * from tbl_siswa where id_kelas='$kelas' order by nama");


echo'<option value="" required disabled selected>---Nama Siswa---</option>';
while($row_siswa=mysqli_fetch_array($sql_kelas)){
    echo'<option value="'.$row_siswa['nis'].'">'.$row_siswa['nama'].'</option>';
}