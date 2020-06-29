<?php

include 'config.php';

$jk=$_POST['jenis_kelamin'];
header("location:../index.php?page=data_santri_jk&id=$jk");