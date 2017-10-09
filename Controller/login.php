<?php 
	session_start();
	include('../Model/taikhoan.php');
	$taikhoan=new Taikhoan();
	$taikhoan->tentk=$_POST['tk'];
	$taikhoan->mk=$_POST['mk'];
	$kg=$taikhoan->login();
	if($kg=="1"){
		echo "QT";
		$_SESSION['dangnhap']=$_POST['tk'];
	}else{
		if($kg=="2"){
			echo "KT";
			$_SESSION['dangnhap']=$_POST['tk'];
		}else{
			if($kg=="3"){
				echo "GV";
				$_SESSION['dangnhap']=$_POST['tk'];
			}else{
				echo "Đăng nhập thất bại";
			}
		}
	}
?>