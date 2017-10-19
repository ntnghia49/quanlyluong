<?php
	include('../../model/quyen.php');
	$q=new Quyen();
	if(isset($_POST['cv'])){
		$cv=$_POST['cv'];
		switch ($cv) {
			case 'them':{
				$q->TenQuyen=$_POST['tenq'];
				$kq=$q->them();
				if($kq==1)
					echo "1";
				else
					echo "0";
			};break;
			case 'xoa':{
				$q->MaQ=$_POST['ma'];
				$kq=$q->xoa();
				if($kq==1)
					echo "1";
				else
					echo "0";
			};break;
			case 'capnhat':{
				$q->MaQ=$_POST['ma'];
				$q->TenQuyen=$_POST['ten'];
				$kq=$q->sua();
				if($kq==1)
					echo "1";
				else
					echo "0";
			};break;
		}
	}  
?>