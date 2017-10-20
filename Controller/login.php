<?php 
	session_start();
	include('../Model/taikhoan.php');
	$taikhoan=new Taikhoan();
	$taikhoan->tentk=$_POST['tk'];
	$taikhoan->mk=$_POST['mk'];
	$kg=$taikhoan->login();
	$tt=$taikhoan->tt();
	if($kg=="1" && $tt=="1"){
		echo "QT";
		$_SESSION['dangnhap']=$_POST['tk'];
	}else{
		if($kg=="2" && $tt=="1"){
			echo "KT";
			$_SESSION['dangnhap']=$_POST['tk'];
		}else{
			if($kg=="3" && $tt=="1"){
				echo "GV";
				$_SESSION['dangnhap']=$_POST['tk'];
			}else{
				if($tt=="0"){
					echo "lock";
				}else{
					echo "Đăng nhập thất bại";
				}
			}
		}
	}
?>