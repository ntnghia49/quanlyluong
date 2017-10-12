<?php
	include('../../model/canbo.php');
	$cb=new CanBo();
	if(isset($_POST['congviec'])){
		$cv=$_POST['congviec'];
		//echo $cv;
		switch ($cv) {
			case "them":{
				if(isset($_POST['macb'])){
					$cb->MaCB=$_POST['macb'];
				}else{
					$cb->MaCB="";
				}
				//
				if(isset($_POST['tencb'])){
					$cb->HoTen=$_POST['tencb'];
				}else{
					$cb->HoTen="";
				}
				//
				if(isset($_POST['ngaysinh'])){
					$cb->NgaySinh=$_POST['ngaysinh'];
				}else{
					$cb->NgaySinh="";
				}
				//
				if(isset($_POST['gt'])){
					$cb->GioiTinh=$_POST['gt'];
				}else{
					$cb->GioiTinh="";
				}
				//
				if(isset($_POST['diachi'])){
					$cb->DiaChi=$_POST['diachi'];
				}else{
					$cb->DiaChi="";
				}
				//
				if(isset($_POST['email'])){
					$cb->Email=$_POST['email'];
				}else{
					$cb->Email="";
				}
				//
				if(isset($_POST['soatm'])){
					$cb->SoTKATM=$_POST['soatm'];
				}else{
					$cb->SoTKATM="";
				}
				$kg=$cb->them();
				if($kg==1){
					echo "1";
				}else{
					echo "0";
				}
			};break;
			case "xoa":{
				if(isset($_POST['ma'])){
					$cb->MaCB=$_POST['ma'];
				}else{
					$cb->MaCB="";
				}
				$kq=$cb->xoa();
				if($kq==1){
					echo "1";
				}else{
					echo "0";
				}
			};break;
			case "kiemtra":{
				if(isset($_POST['macb'])){
					$cb->MaCB=$_POST['macb'];
				}else{
					$cb->MaCB="";
				}
				$kg=$cb->kiemtra();
				if($kg==1){
					echo "MSTT";
				}
			};break;
			case "capnhat":{
				$cb->MaCB=$_POST['macb'];
				$cb->HoTen=$_POST['tencb'];
				$cb->NgaySinh=$_POST['ngaysinh'];
				$cb->GioiTinh=$_POST['gioitinh'];
				$cb->DiaChi=$_POST['diachi'];
				$cb->Email=$_POST['email'];
				$cb->SoTKATM=$_POST['soatm'];
				$kq=$cb->capnhat();
				if($kq==1){
					echo "1";
				}else{
					echo "0";
				}
			};break;
		}
	}
?>