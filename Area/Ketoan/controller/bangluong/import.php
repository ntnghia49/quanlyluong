<meta charset="utf-8">
<?php
	include('../../../../Classes/PHPExcel.php');
  	if(isset($_FILES['file']['tmp_name'])){
	    $file=$_FILES['file']['tmp_name'];

	    $objReader=PHPExcel_IOFactory::createReaderForFile($file);
	    $objReader->setReadDataOnly(true);
	    $objExcel=$objReader->load($file);
	    $objExcel->setActiveSheetIndex(0);
	    //Dọc dữ liệu từ file excel đưa vào biến $shetsdata;
	    $sheetsdata=$objExcel->getActiveSheet()->toArray('null',true,true,true);

	    print_r($sheetsdata);
	    //Lấy dòng cao nhất;
	    $dong=$objExcel->setActiveSheetIndex()->getHighestRow();

	    /*for ($i=2; $i <= $dong; $i++) { 
	      $ten=$sheetsdata[$i]['A'];
	      $pass=$sheetsdata[$i]['B'];
	      $loai=$sheetsdata[$i]['C'];
	      echo "$ten $pass $loai";
	      echo "<br>";
	    }*/
  	}
?>