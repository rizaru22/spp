<?php

include 'config.php';

$kelas=$_POST['kelas'];
header("location:../index.php?page=datasiswa&id=$kelas");