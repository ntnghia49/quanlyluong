<?php
	include('../../model/bangluong.php');
	session_start();
	$bl=new BangLuong();
    $thang=$_POST['thang'];
    $nam=$_POST['nam'];
    $macb=$_SESSION['dangnhap'];
    $bl->select3($thang,$nam,$macb);
    $row=$bl->laybangluong(); 
?>
<h1 style="color: #0905fb;text-align: center;font-size: 31px;font-weight: bold;margin-top: 20px;">THÔNG TIN LƯƠNG THÁNG <?php echo $thang."/".$nam ?></h1>
<div class="hienchu">
<div class="tieude">
  <p class="chu">Họ tên:</p>
  <p class="chu">Số TKATM:</p>
  <p class="chu">Tiền lương tháng:</p>
  <p class="chu">Truy lĩnh lương:</p>
  <p class="chu">BD Theo giờ:</p>
  <p class="chu">Tiền lương tăng:</p>
  <p class="chu">Phụ cấp công nhân viên:</p>
  <p class="chu">Phụ cấp lãnh đạo:</p>
  <p class="chu">Truy thu tiền lương:</p>
  <p class="chu">Tổng số tiền:</p>
  <p class="chu">KPCD:</p>
  <p class="chu">Số tiền còn lại:</p>
</div>
<div class="nd">
  <p class="noidung"><?php echo $row['HoTen'] ?></p>
  <p class="noidung"><?php echo $row['SoTKATM'] ?></p>
  <p class="noidung"><?php echo $row['TLuongThang'] ?></p>
  <p class="noidung"><?php echo $row['TruyLinhLuong'] ?></p>
  <p class="noidung"><?php echo $row['BDTheoGio'] ?></p>
  <p class="noidung"><?php echo $row['TienLuongTang'] ?></p>
  <p class="noidung"><?php echo $row['PCCNV'] ?></p>
  <p class="noidung"><?php echo $row['PCLĐ'] ?></p>
  <p class="noidung"><?php echo $row['TruyThuTLuong'] ?></p>
  <p class="noidung"><?php echo $row['TongSoTien'] ?></p>
  <p class="noidung"><?php echo $row['KPCD'] ?></p>
  <p class="noidung"><?php echo $row['SoTienCL'] ?></p>
</div>
</div>