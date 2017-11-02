<meta charset="utf-8">
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
	    $objExcel->setActiveSheetIndex(0);
	    //Dọc dữ liệu từ file excel đưa vào biến $shetsdata;
	    $sheetsdata=$objExcel->getActiveSheet()->toArray('null',true,true,true);

	    //
	    //echo $thang.$nam.$sheet;
	    print_r($sheetsdata);
	    //Lấy dòng cao nhất;
	    $dong=$objExcel->setActiveSheetIndex()->getHighestRow();
	    echo $dong;
	    echo "<br>";
	    //
	    /*for ($i=1; $i <= $dong; $i++) {
	    	$macb=$bl->laymacb($sheetsdata[$i]['B']);
	    	if($macb!=0){
	    		$bl->MaCB=$sheetsdata[$i]['B'];
	    		$bl->TLuongThang=$sheetsdata[$i]['C'];
	    		$bl->TruyLinhLuong=$sheetsdata[$i]['D'];
	    		$bl->BDTheoGio=$sheetsdata[$i]['D'];
	    		$bl->TienLuongTang=$sheetsdata[$i]['E'];
	    		$bl->PCCNV=$sheetsdata[$i]['F'];
	    		$bl->PCLD=$sheetsdata[$i]['G'];
	    		$bl->TruyThuTienLuong=$sheetsdata[$i]['H'];
	    		$bl->TongSoTien=$sheetsdata[$i]['K'];
	    		$bl->KPCD=$sheetsdata[$i]['M'];
	    		$bl->SoTienCL=$sheetsdata[$i]['N'];
	    		$bl->Thang=$thang;
	    		$bl->Nam=$nam;

	    	}else{

	    	}
	    }*/
  	}
?>