<?php
	include('../../model/bangluong.php');
	include('../../../../Classes/PHPExcel.php');
	include('../../../../Classes/PHPExcel/IOFactory.php');
	$bl=new BangLuong();
	$thang=$_POST['thang'];
	$nam=$_POST['nam'];
	//
	$objPHPExcel = new PHPExcel();
	// Set properties
	$objPHPExcel->getProperties()
				->setCreator("NTNGHIA")
				->setLastModifiedBy("Nguyễn Trọng Nghĩa")
                ->setTitle("Thống kê bảng lương tháng ")
                ->setSubject("Thống kê bảng lương")
                ->setDescription("Thống kê bảng lương")
                ->setKeywords("office 2007 openxml php")
                ->setCategory("Demo");
	$objPHPExcel->getActiveSheet()->setTitle('thongke');
	//
	$bl->select2($thang,$nam);
	//Header
	/*$table = array(
	    array('label' =>('No'), 'width' => 5),
	    array('label' =>('Code'), 'width' => 15),
	    array('label' =>('Product'), 'width' => 30, 'wrap' => true),
	    array('label' =>('Price')),
	    array('label' =>('Quantity')),
	    array('label' =>('Sub total')),
	    array('label' =>('No'), 'width' => 5),
	    array('label' =>('Code'), 'width' => 15),
	    array('label' =>('Product'), 'width' => 30, 'wrap' => true),
	    array('label' =>('Price')),
	    array('label' =>('Quantity')),
	    array('label' =>('Sub total')),
	    array('label' =>('Sub total'))
	);*/
	//$this->PhpExcel->addTableHeader($table, array('bold' => true));
	//
	//
	$objPHPExcel->setActiveSheetIndex(0);

	$objPHPExcel->setActiveSheetIndex(0)->setCellValueByColumnAndRow(0,1,"STT");
	$objPHPExcel->setActiveSheetIndex(0)->setCellValueByColumnAndRow(1,1,'HỌ TÊN');
	$objPHPExcel->setActiveSheetIndex(0)->setCellValueByColumnAndRow(2,1,'SỐ TÀI KHOẢN ATM');
	$objPHPExcel->setActiveSheetIndex(0)->setCellValueByColumnAndRow(3,1,'TIỀN LƯƠNG THÁNG '.$thang."/".$nam);
	$objPHPExcel->setActiveSheetIndex(0)->setCellValueByColumnAndRow(4,1,'TRUY LĨNH LƯƠNG, TIỀN CÔNG, ƯĐGV, TNNG đến tháng '.($thang-1)."/".$nam);
	$objPHPExcel->setActiveSheetIndex(0)->setCellValueByColumnAndRow(5,1,'BD THEO GIỜ LÀM VIỆC '.($thang-1)."/".$nam);
	$objPHPExcel->setActiveSheetIndex(0)->setCellValueByColumnAndRow(6,1,'TIỀN LƯƠNG TĂNG THÊM '.($thang-1)."/".$nam);
	$objPHPExcel->setActiveSheetIndex(0)->setCellValueByColumnAndRow(7,1,'PHỤ CẤP CNV (20%) '.($thang-1)."/".$nam);
	$objPHPExcel->setActiveSheetIndex(0)->setCellValueByColumnAndRow(8,1,'PC LÃNH ĐẠO '.($thang-1)."/".$nam);
	$objPHPExcel->setActiveSheetIndex(0)->setCellValueByColumnAndRow(9,1,'TRUY THU TIỀN LƯƠNG, PCUDGV, PCTNNG '.($thang+1)."/".($nam-1));
	$objPHPExcel->setActiveSheetIndex(0)->setCellValueByColumnAndRow(10,1,'TỔNG SỐ TIỀN ĐƯỢC NHẬN ');
	$objPHPExcel->setActiveSheetIndex(0)->setCellValueByColumnAndRow(11,1,'TRỪ ĐOÀN PHÍ CÔNG ĐOÀN QUÝ 3 '."/".$nam);
	$objPHPExcel->setActiveSheetIndex(0)->setCellValueByColumnAndRow(12,1,'SỐ TIỀN CÒN ĐƯỢC NHẬN ');
	$objPHPExcel->setActiveSheetIndex(0)->setCellValueByColumnAndRow(13,1,'EMAIL ');	
	//
	$i=2;
	while($row=$bl->laybangluong()){

		$objPHPExcel->setActiveSheetIndex(0)->setCellValueByColumnAndRow(0,$i,($i-1));
		$objPHPExcel->setActiveSheetIndex(0)->setCellValueByColumnAndRow(1,$i,$row['HoTen']);
		$objPHPExcel->setActiveSheetIndex(0)->setCellValueByColumnAndRow(2,$i,$row['SoTKATM']);
		$objPHPExcel->setActiveSheetIndex(0)->setCellValueByColumnAndRow(3,$i,$row['TLuongThang']);
		$objPHPExcel->setActiveSheetIndex(0)->setCellValueByColumnAndRow(4,$i,$row['TruyLinhLuong']);
		$objPHPExcel->setActiveSheetIndex(0)->setCellValueByColumnAndRow(5,$i,$row['BDTheoGio']);
		$objPHPExcel->setActiveSheetIndex(0)->setCellValueByColumnAndRow(6,$i,$row['TienLuongTang']);
		$objPHPExcel->setActiveSheetIndex(0)->setCellValueByColumnAndRow(7,$i,$row['PCCNV']);
		$objPHPExcel->setActiveSheetIndex(0)->setCellValueByColumnAndRow(8,$i,$row['PCLĐ']);
		$objPHPExcel->setActiveSheetIndex(0)->setCellValueByColumnAndRow(9,$i,$row['TruyThuTLuong']);
		$objPHPExcel->setActiveSheetIndex(0)->setCellValueByColumnAndRow(10,$i,$row['TongSoTien']);
		$objPHPExcel->setActiveSheetIndex(0)->setCellValueByColumnAndRow(11,$i,$row['KPCD']);
		$objPHPExcel->setActiveSheetIndex(0)->setCellValueByColumnAndRow(12,$i,$row['SoTienCL']);
		$objPHPExcel->setActiveSheetIndex(0)->setCellValueByColumnAndRow(13,$i,$row['Email']);
		$i++;
	}
	//Xuất file ecxel
	header('Content-Type: application/vnd.ms-excel'); 
	header('Content-Disposition: attachment;filename="TienLuongThang.xlsx"'); 
	header('Cache-Control: max-age=0'); 
	$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007'); 
	$objWriter->save('php://output');
?>