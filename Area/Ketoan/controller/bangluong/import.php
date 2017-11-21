<?php
	include('../../model/bangluong.php');
	include('../../../../Classes/PHPExcel.php');
  	if(isset($_FILES['file'])){
  		$bl=new BangLuong();
  		$thang=$_POST['thang'];
  		$nam=$_POST['nam'];
  		$sheet=$_POST['sheet'];
	    $file=$_FILES['file']['tmp_name'];

	    $objReader=PHPExcel_IOFactory::createReaderForFile($file);
	    $objReader->setReadDataOnly(true);
	    $objExcel=$objReader->load($file);
	    $objExcel->setActiveSheetIndex($sheet-1);
	    //Dọc dữ liệu từ file excel đưa vào biến $shetsdata;
	    $sheetsdata=$objExcel->getActiveSheet()->toArray('null',true,true,true);

	    //
	    //echo $thang.$nam.$sheet;
	   	//print_r($sheetsdata);
	    //Lấy dòng cao nhất;
	    $dong=$objExcel->setActiveSheetIndex()->getHighestRow();
	    //echo $dong;
	    //echo "<br>";
	    //
	    $dem=0;
	    for ($i=2; $i <= $dong; $i++) {
	    	$hoten=$sheetsdata[$i]['B'];
	    	$macb=$bl->laymacb($hoten);
	    	if($macb=="0"){
	    		$dem++;
	    	}
	    	//echo $macb." ";
	    }
	    //echo $dem;
	    $ktthang=$bl->kiemtrathang($thang,$nam);
	    if($ktthang==0){
		    if($dem==0){
		    	for ($i=2; $i <= $dong; $i++) {
		    		$bl->MaCB=$bl->laymacb($sheetsdata[$i]['B']);
		    		$bl->TLuongThang=$sheetsdata[$i]['D'];
		    		$bl->TruyLinhLuong=$sheetsdata[$i]['E'];
		    		$bl->BDTheoGio=$sheetsdata[$i]['F'];
		    		$bl->TienLuongTang=$sheetsdata[$i]['G'];
		    		$bl->PCCNV=$sheetsdata[$i]['H'];
		    		$bl->PCLD=$sheetsdata[$i]['I'];
		    		$bl->TruyThuTienLuong=$sheetsdata[$i]['J'];
		    		$bl->TongSoTien=$sheetsdata[$i]['K'];
		    		$bl->KPCD=$sheetsdata[$i]['L'];
		    		$bl->SoTienCL=$sheetsdata[$i]['M'];
		    		$bl->Thang=$thang;
		    		$bl->Nam=$nam;
		    		$kq=$bl->them();
		    	}
		    	echo "TC";
		    }else{
		    	echo "TB";
		    }
		}else{
			echo "TT";
		}
  	}
?>