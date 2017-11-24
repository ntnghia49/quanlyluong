<div class="row">
  <div class="col-md-12">
        <div class="x_panel">
            <div class="x_title">
              <h1 style="color:hsl(0, 96%, 49%);font-size:21px;font-weight:bold;text-align:center;">THỐNG KÊ ĐƠN VỊ</h1>
              <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
              </ul>
              <div class="clearfix"></div>
              <!-- -->
              <form action="controller/thongke/export.php" method="post">
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
                    $bl->selectthangnam();
                    while($row=$bl->laythang()){
                  ?>
                    <option value="<?php echo $row['nam'] ?>"><?php echo $row['nam'] ?></option>
                  <?php } ?>
                </select>
              </div>
              <div class="col-md-3" style="width: 150px;float: right;">
                <button type="submit" style="width:130px;height:48px;background:#0dab11;border:1px solid #0dab11;" class="btn btn-success tk"><span style="color: #FFF;font-size: 17px;"><i class="fa fa-table" aria-hidden="true"></i> Export excel</span></button>
              </form>
              </div>
              <!-- -->
              <div id="hien">
              <table class="table table-hover jambo_table tbl" style="width: 1850px">
                <thead>
                  <tr>
                    <th>STT</th>
                    <th>Họ tên</th>
                    <th>TKATM</th>
                    <th>Tiền lương tháng</th>
                    <th>Truy lĩnh lương</th>
                    <th>BD theo giờ</th>
                    <th>Tiền lương tăng</th>
                    <th>PCCNV</th>
                    <th>PCLĐ</th>
                    <th>Truy thu</th>
                    <th>Tổng tiền</th>
                    <th>KPCD</th>
                    <th>Còn lại</th>
                    <th>Email</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    $bl->selectthangnam();
                    $row=$bl->laythang();
                    $thang=$row['thang'];
                    $nam=$row['nam'];
                    $bl->select2($thang,$nam);
                    $i=1;
                    while ($row=$bl->laybangluong()) {
                  ?>
                  <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $row['HoTen'] ?></td>
                    <td><?php echo $row['SoTKATM'] ?></td>
                    <td id="<?php echo $row['MaBL'] ?>-TLuongThang"><?php echo $row['TLuongThang'] ?></td>
                    <td id="<?php echo $row['MaBL'] ?>-TruyLinhLuong"><?php echo $row['TruyLinhLuong'] ?></td>
                    <td id="<?php echo $row['MaBL'] ?>-BDTheoGio"><?php echo $row['BDTheoGio'] ?></td>
                    <td id="<?php echo $row['MaBL'] ?>-TienLuongTang"><?php echo $row['TienLuongTang'] ?></td>
                    <td id="<?php echo $row['MaBL'] ?>-PCCNV"><?php echo $row['PCCNV'] ?></td>
                    <td id="<?php echo $row['MaBL'] ?>-PCLĐ"><?php echo $row['PCLĐ'] ?></td>
                    <td id="<?php echo $row['MaBL'] ?>-TruyThuTLuong"><?php echo $row['TruyThuTLuong'] ?></td>
                    <td id="<?php echo $row['MaBL'] ?>-TongSoTien"><?php echo $row['TongSoTien'] ?></td>
                    <td id="<?php echo $row['MaBL'] ?>-KPCD"><?php echo $row['KPCD']?></td>
                    <td id="<?php echo $row['MaBL'] ?>-SoTienCL"><?php echo $row['SoTienCL'] ?></td>
                    <td><?php echo $row['Email'] ?></td>
                  </tr>
                  <?php
                        $i++;
                      }
                  ?>
                </tbody>
              </table>
              </div>
          </div>
      </div>
    <div class="x_content">
    </div>
  </div>
</div>
<script>
  $(document).ready(function(){


    $('.tbl').DataTable({
        language:{
        lengthMenu:"Hiển thị _MENU_ bản ghi",
        search: "_INPUT_",
        searchPlaceholder: "Tìm tài khoản...",
        info: "Hiển thị trang _PAGE_ của _PAGES_",
        zeroRecords:"Không tìm thấy thông tin tài khoản",
        paginate:{
          first: "Đầu tiên",
          last: "Cuối cùng",
          next: "Sau",
          previous: "Trước"
          }
        }
    });
    //
    $('#thang').change(function(){
      var thang=$('#thang').val();
      var nam=$('#nam').val();
      $.post('controller/thongke/hienbl.php',{thang:thang,nam:nam},function(data){
        $('#hien').html(data);
      })
    })
    //
    $('#nam').change(function(){
      var thang=$('#thang').val();
      var nam=$('#nam').val();
      $.post('controller/thongke/hienbl.php',{thang:thang,nam:nam},function(data){
        $('#hien').html(data);
      })
    })
    //
  })
</script>