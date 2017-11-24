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
	$i=0;
	$objPHPExcel->setActiveSheetIndex(0);
	while($row=$bl->laybangluong()){
		$objPHPExcel->setActiveSheetIndex(0)->setCellValueByColumnAndRow(0,$i,$i);
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
	header('Content-Disposition: attachment;filename="results.xlsx"'); 
	header('Cache-Control: max-age=0'); 
	$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007'); 
	$objWriter->save('php://output');
?>