<?php

include 'config.php';
$id=$_GET['id'];
$username=$_POST['username'];
$pass=md5($_POST['pass']);

mysqli_query($koneksi,"UPDATE user SET username='$username',password='$pass' where id=$id");

header('location:../views/login.php');