<?php

include 'enkripsi.php';
include 'config.php';


$no_hp=$_POST['no_hp'];
/*
$kk=$_FILES['kk']['name'];
$ijazah=$_FILES['ijazah']['name'];
$ktp_wali=$_FILES['ktp_wali']['name'];
$f_nisn=$_FILES['f_nisn']['name'];
$bpjs=$_FILES['bpjs']['name'];



if($kk && $ijazah && $ktp_wali && $f_nisn && $bpjs != "") {
    $ekstensi_diperbolehkan = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
    $x = explode('.', $kk); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensi = strtolower(end($x));
    $file_tmp_kk = $_FILES['kk']['tmp_name'];   
    $file_tmp_ijazah = $_FILES['ijazah']['tmp_name'];   
    $file_tmp_ktp = $_FILES['ktp_wali']['tmp_name'];   
    $file_tmp_nisn = $_FILES['nisn']['tmp_name'];   
    $file_tmp_bpjs = $_FILES['bpjs']['tmp_name'];   
    $angka_acak= rand(1,999);
    $angka_acak1= rand(1,999);
    $angka_acak2= rand(1,999);
    $angka_acak3= rand(1,999);
    $angka_acak4= rand(1,999);
    $file_kk = $angka_acak.'-'.$kk; //menggabungkan angka acak dengan nama file sebenarnya
    $file_ijazah = $angka_acak1.'-'.$ijazah; //menggabungkan angka acak dengan nama file sebenarnya
    $file_ktp = $angka_acak2.'-'.$ktp_wali; //menggabungkan angka acak dengan nama file sebenarnya
    $file_nisn = $angka_acak3.'-'.$f_nisn; //menggabungkan angka acak dengan nama file sebenarnya
    $file_bpjs = $angka_acak4.'-'.$bpjs; //menggabungkan angka acak dengan nama file sebenarnya
          if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
                  move_uploaded_file($file_tmp_kk, '../assets/psb/'.$file_kk); //memindah file gambar ke folder gambar
                  move_uploaded_file($file_tmp_ijazah, '../assets/psb/'.$file_ijazah); //memindah file gambar ke folder gambar
                  move_uploaded_file($file_tmp_ktp, '../assets/psb/'.$file_ktp); //memindah file gambar ke folder gambar
                  move_uploaded_file($file_tmp_nisn, '../assets/psb/'.$file_nisn); //memindah file gambar ke folder gambar
                  move_uploaded_file($file_tmp_bpjs, '../assets/psb/'.$file_bpjs); //memindah file gambar ke folder gambar
                    // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
                    $query = "UPDATE tbl_calon_santri SET kk='$file_kk', ijazah='$file_ijazah',ktp_wali='$file_ktp',file_nisn='$file_nisn',bpjs='$file_bpjs' WHERE no_hp='$no_hp'";
                    $result = mysqli_query($koneksi, $query);
                    header("location:../psb/after_daftar.php?id=$no_hp");
  
              } else {     
               //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                  echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='../psb/upload_berkas.php?id=$no_hp';</script>";
              }
  } //else {
   // echo "<script>alert('Seluruh File harus diunggah');window.location='../psb/upload_berkas.php?id=$no_nik';</script>";
  //}*/
  if(!empty($_FILES['kk']['name'])){
    $kk=$_FILES['kk']['name'];
    $ekstensi_diperbolehkan = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
      $x = explode('.', $kk); //memisahkan nama file dengan ekstensi yang diupload
      $ekstensi = strtolower(end($x));
      $file_tmp_kk = $_FILES['kk']['tmp_name'];   
      $angka_acak= rand(1,999);
      $file_kk = $angka_acak.'-'.$kk; //menggabungkan angka acak dengan nama file sebenarnya
      move_uploaded_file($file_tmp_kk, '../assets/psb/'.$file_kk); //memindah file gambar ke folder gambar
            if(in_array("$ekstensi", $ekstensi_diperbolehkan,TRUE))  {
              $query = "UPDATE tbl_calon_santri SET kk='$file_kk' WHERE no_hp='$no_hp'";
              $result = mysqli_query($koneksi, $query);
              header("location:../psb/after_daftar.php?id=$no_hp");
                    }
                    else {     
                      //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                 echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='../psb/upload_berkas.php?id=$no_hp';</script>";
                }
              } 
              if(!empty($_FILES['ijazah']['name'])) {
                $ijazah=$_FILES['ijazah']['name'];
                $ekstensi_diperbolehkan = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
                $x = explode('.', $ijazah); //memisahkan nama file dengan ekstensi yang diupload
                $ekstensi = strtolower(end($x));
                $file_tmp_ijazah = $_FILES['ijazah']['tmp_name'];  
                $angka_acak1= rand(1,999);
                $file_ijazah = $angka_acak1.'-'.$ijazah; //menggabungkan angka acak dengan nama file sebenarnya
                move_uploaded_file($file_tmp_ijazah, '../assets/psb/'.$file_ijazah); //memindah file gambar ke folder gambar
                if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
                  $query = "UPDATE tbl_calon_santri SET ijazah='$file_ijazah' WHERE no_hp='$no_hp'";
                  $result = mysqli_query($koneksi, $query);
                  header("location:../psb/after_daftar.php?id=$no_hp");
                }
                else {     
                  //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                  echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='../psb/upload_berkas.php?id=$no_hp';</script>";
                }
              } 
              if(!empty($_FILES['ktp_wali']['name'])) {
                $ktp_wali=$_FILES['ktp_wali']['name'];
                $ekstensi_diperbolehkan = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
                $x = explode('.', $ktp_wali); //memisahkan nama file dengan ekstensi yang diupload
                $ekstensi = strtolower(end($x));
                $file_tmp_ktp = $_FILES['ktp_wali']['tmp_name'];   
      $angka_acak2= rand(1,999);
      $file_ktp = $angka_acak2.'-'.$ktp_wali; //menggabungkan angka acak dengan nama file sebenarnya
      move_uploaded_file($file_tmp_ktp, '../assets/psb/'.$file_ktp); //memindah file gambar ke folder gambar
      if(in_array("$ekstensi", $ekstensi_diperbolehkan,TRUE))  {
        $query = "UPDATE tbl_calon_santri SET ktp_wali='$file_ktp' WHERE no_hp='$no_hp'";
        $result = mysqli_query($koneksi, $query);
        header("location:../psb/after_daftar.php?id=$no_hp");
        
      }
      else {     
        //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                    echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='../psb/upload_berkas.php?id=$no_hp';</script>";
                  }
                } 
  if(!empty($_FILES['f_nisn']['name'])) {
    $f_nisn=$_FILES['f_nisn']['name'];
    $ekstensi_diperbolehkan = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
    $x = explode('.', $f_nisn); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensi = strtolower(end($x));
      $file_tmp_nisn = $_FILES['f_nisn']['tmp_name'];  
      $angka_acak3= rand(1,999);
      $file_nisn = $angka_acak3.'-'.$f_nisn; //menggabungkan angka acak dengan nama file sebenarnya
      move_uploaded_file($file_tmp_nisn, '../assets/psb/'.$file_nisn); //memindah file gambar ke folder gambar
            if(in_array("$ekstensi", $ekstensi_diperbolehkan,TRUE))  {
                      $query = "UPDATE tbl_calon_santri SET file_nisn='$file_nisn' WHERE no_hp='$no_hp'";
                      $result = mysqli_query($koneksi, $query);
                      header("location:../psb/after_daftar.php?id=$no_hp");
    
                    }
                 else {     
                 //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                 echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='../psb/upload_berkas.php?id=$no_hp';</script>";
                }
              } 
    
  if(!empty($_FILES['bpjs']['name'])) {
    $bpjs=$_FILES['bpjs']['name'];
    $ekstensi_diperbolehkan = array("png","jpg"); //ekstensi file gambar yang bisa diupload 
      $x = explode('.', $bpjs); //memisahkan nama file dengan ekstensi yang diupload
      $ekstensi = strtolower(end($x));
      $file_tmp_bpjs = $_FILES['bpjs']['tmp_name'];   
      $angka_acak4= rand(1,999);
      $file_bpjs = $angka_acak4.'-'.$bpjs; //menggabungkan angka acak dengan nama file sebenarnya 
      move_uploaded_file($file_tmp_bpjs, '../assets/psb/'.$file_bpjs); //memindah file gambar ke folder gambar
      if(in_array("$ekstensi", $ekstensi_diperbolehkan,TRUE))  {
        $query = "UPDATE tbl_calon_santri SET bpjs='$file_bpjs' WHERE no_hp='$no_hp'";
                      $result = mysqli_query($koneksi, $query);
                      header("location:../psb/after_daftar.php?id=$no_hp");
    
                }
                 else {     
                 //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                    echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='../psb/upload_berkas.php?id=$no_hp';</script>";
                }
    } 
    