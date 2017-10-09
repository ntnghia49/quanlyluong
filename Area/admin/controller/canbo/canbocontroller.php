<?php
	
	include('model/canbo.php');
	$cb=new CanBo();
	//Lấy danh sách cán bộ
	$cb->select();
	//Xử lý dữ liệu
	include("view/quanlycanbo/content.php");
?>