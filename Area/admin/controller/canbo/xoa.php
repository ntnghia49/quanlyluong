<?php
	include('../../model/canbo.php');
	$cb=new CanBo();
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
?>