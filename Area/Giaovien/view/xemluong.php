<style type="text/css">
  .thongtin{
    width: 720px;
    height: auto;
    margin: 0px auto;
    border: 4px solid #0905fb;
    border-radius: 10px;
    margin-top: 70px;
  }
  .hienchu{
    width: 720px;
    height: 480px;
    margin: 0px auto;
    padding: 10px;
    margin-bottom: 10px;
  }
  .chu{
    font-size: 20px;
    color: #000;
    font-weight: bold;
  }
  .hienchu .noidung{
    font-size: 20px;
    margin-left: 14px;
    color: #F70909;
    font-weight: bold;
  }
  .x_title span{
    color: rgba(232, 4, 4, 0.84);
  }
  .hienchu .tieude{
    width: 250px;
    height: auto;
    float: left;
    margin-left: 108px;
  }
  .nd{
    width: 330px;
    height: auto;
    float: left;
  }
</style>
<div class="row">
  <div class="col-md-12">
        <div class="x_panel">
            <div class="x_title">
              <h1 style="color:hsl(0, 96%, 49%);font-size:21px;font-weight:bold;text-align:center;">THỐNG TIN LƯƠNG</h1>
              <div class="clearfix"></div>
              <!-- -->
              <div class="col-md-3" style="width: 230px">
                <label class="control-label" style="float:left;line-height:38px;margin:7px;">Chọn tháng</label>
                <select style="width: 120px;border-radius: 5px;margin: 10px" name="thang" class="form-control" id="thang">
                  <?php
                    $bl->selectthangnam();
                    while($row=$bl->laythang()){
                  ?>
                    <option value="<?php echo $row['thang'] ?>"><?php echo $row['thang'] ?></option>
                  <?php } ?>
                </select>
              </div>

              <div class="col-md-3" style="width: 230px">
                <label class="control-label" style="float:left;line-height:38px;margin:7px;">Chọn năm</label>
                <select style="width: 120px;border-radius: 5px;margin: 10px" name="nam" class="form-control" id="nam">
                  <?php
                    $bl->selectnam();
                    while($row=$bl->laythang()){
                  ?>
                    <option value="<?php echo $row['nam'] ?>"><?php echo $row['nam'] ?></option>
                  <?php } ?>
                </select>
              </div>
              <!-- -->
	      		<?php
	      			$bl->selectthangnam();
	                $row=$bl->laythang();
	                $thang=$row['thang'];
	                $nam=$row['nam'];
	                $macb=$_SESSION['dangnhap'];
	                $bl->select3($thang,$nam,$macb);
	                $row=$bl->laybangluong();
	      		?>
				<div class="thongtin">
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
                </div>
          </div>
      </div>
    <div class="x_content">
    </div>
  </div>
</div>
<script>
	$(document).ready(function(){
		$('#thang').change(function(){
			var thang=$('#thang').val();
			var nam=$('#nam').val();
			$.post('controller/xemluong/ajaxxemluong.php',{thang:thang,nam:nam},function(data){
				$('.thongtin').html(data);
			})
		})
		//
		$('#nam').change(function(){
			var thang=$('#thang').val();
			var nam=$('#nam').val();
			$.post('controller/xemluong/ajaxxemluong.php',{thang:thang,nam:nam},function(data){
				$('.thongtin').html(data);
			})
		})
	})
</script>
