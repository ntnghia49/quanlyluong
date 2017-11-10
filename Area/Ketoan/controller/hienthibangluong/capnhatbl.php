<?php 
	include('../../model/bangluong.php');
	$bl=new BangLuong();
	$bl->MaBL=$_POST['ma'];
	$bl->TLuongThang=$_POST['tlthang'];
	$bl->TruyLinhLuong=$_POST['truylinhluong'];
	$bl->BDTheoGio=$_POST['bdtheogio'];
	$bl->TienLuongTang=$_POST['tienluongtang'];
	$bl->PCCNV=$_POST['pccnv'];
	$bl->PCLD=$_POST['pclanhdao'];
	$bl->TruyThuTienLuong=$_POST['truythutienluong'];
	$bl->tongsotien=$_POST['tongsotien'];
	$bl->doanphi=$_POST['doanphi'];
	$bl->SoTienCL=$_POST['tienconlai'];
	$kq=$bl->capnhat();
	if($kq==1)
		echo "TC";
	else
		echo "TB";
?>