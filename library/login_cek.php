<?php 
	session_start();
	include 'config.php';
    include 'anti_Injeksi.php';
    
	$username=anti_Injeksi($_POST['username']);
    $password=anti_Injeksi(md5($_POST['password']));
    
    $login = mysqli_query($koneksi,"SELECT * FROM user where username ='$username' AND password= '$password' ");
    $ada = mysqli_num_rows($login);
    $r = mysqli_fetch_array($login);
    if ($ada > 0){
        $_SESSION['username']=$r['username'];
        $_SESSION['nama']=$r['nama'];
        $_SESSION['id']=$r['id'];
        $_SESSION['password'] = $r['password'];
		$_SESSION['password']=$data['password'];
		$_SESSION['timeout']=time()+1000;
		$_SESSION['login']=1;
        header('location:../index.php?page=dashboard');
    }
    else{
        $_SESSION['error']=1;
        header('location:../views/login.php');
  }
  ?>