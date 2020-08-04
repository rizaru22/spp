<?php 
//property koneksi
$host="localhost";
$user="root";
$pass="";
$database="app_spp";

//membuat objek koneksi database
$koneksi=new mysqli($host,$user,$pass,$database);

//menentukan timezone
date_default_timezone_set('Asia/Jakarta');

 ?>