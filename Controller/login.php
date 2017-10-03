<?php 
	session_start();
	include('../Model/taikhoan.php');
	$taikhoan=new Taikhoan();
	$taikhoan->tentk=$_POST['tk'];
	$taikhoan->mk=$_POST['mk'];
	$kg=$taikhoan->login();
	if($kg==1){
		echo "OK";
		$_SESSION['dangnhap']=$_POST['tk'];
	}else{
		echo "Đăng nhập thất bại";
	}
?>