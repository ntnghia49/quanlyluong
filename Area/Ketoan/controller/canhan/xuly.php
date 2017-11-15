<?php
	include('../../../admin/model/taikhoan.php');
	$mkcu=$_POST['mkcu'];
	$mkmoi=$_POST['mkmoi'];
	$tak=$_POST['tk'];
	$tk=new taikhoan();
	$tk->selectmk($tak,$mkcu);
	$kt=$tk->kiemtra();
	if($kt=="0"){
		echo "KC";
	}else{
		$tk->TenDN=$tak;
		$tk->MatKhau=$mkcu;
		$kq=$tk->doimatkhau($mkmoi);
		if($kq=="1"){
			echo "TC";
		}else{
			echo "TB";
		}
	}
?>