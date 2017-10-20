<?php
	include('../../model/taikhoan.php');
	$tk=new taikhoan();
	if(isset($_POST['cv'])){
		$cv=$_POST['cv'];
	}else{
		$cv="";
	}
	switch ($cv) {
		case 'lock':{
			$tk->MaTK=$_POST['ma'];
			$tk->TrangThai=$_POST['tt'];
			$kq=$tk->lock();
			if($kq==1)
				echo "OK";
			else
				echo "TB";
		};break;
		case 'them':{
			$ma=$_POST['ma'];
			$maq=$_POST['maq'];
			$dem=0;
			for ($i=0; $i < count($ma); $i++) { 
				$tk->MaCB=$ma[$i];
				$tk->TenDN=$ma[$i];
				$tk->MatKhau=md5("123456");
				$tk->MaQ=$maq;
				$tk->TrangThai="1";
				$kq=$tk->themtk();
				if($kq==1)
					$dem++;
			}
			if($dem==count($ma))
				echo "OK";
			else
				echo "TB";
		};break;
		case 'xoa':{
			$ma=$_POST['ma'];
			$tk->MaTK=$ma;
			$kq=$tk->xoa();
			if($kq==1)
				echo "OK";
			else
				echo "TB";
		};break;
		case 'phanquyen':{
			$tk->MaTK=$_POST['matk'];
			$tk->MaQ=$_POST['maq'];
			$kq=$tk->phanquyen();
			if($kq==1)
				echo "OK";
			else
				echo "TB";
		};break;
	}
?>