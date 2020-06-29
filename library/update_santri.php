<?php
    include 'enkripsi.php';
    $no_hp =$_POST['no_hp'];
    header("location:../psb/update_calon_santri.php?id=$no_hp"); 