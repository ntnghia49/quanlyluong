<?php
	include('../admin/model/canbo.php');
	$cb=new CanBo();
	$cb->selectcanhan($_SESSION['dangnhap']);
	$row=$cb->laydanhsachcanbo();
	//
	include('view/thongtincanhan.php');
?>