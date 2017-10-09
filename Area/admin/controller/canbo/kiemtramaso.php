<?php
	include('../../model/canbo.php');
	$cb=new CanBo();
	if(isset($_POST['macb'])){
		$cb->MaCB=$_POST['macb'];
	}else{
		$cb->MaCB="";
	}
	$kt=$cb->kiemtra();
	if($kt==1){
		echo "MSTT";
	}
?>