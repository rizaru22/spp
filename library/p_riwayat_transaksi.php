<?php

$nisn=$_POST['siswa'];

if($nisn>0){
    header("location:../index.php?page=r_t&id=$nisn");
}