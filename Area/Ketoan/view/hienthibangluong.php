
<!--Modal cập nhật -->
<div class="modal fade" id="modal-capnhat" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">THÔNG TIN LƯƠNG</h4>
            </div>
            <div class="modal-body">
          <form id="demo-form2" action="" method="post" data-parsley-validate class="form-horizontal form-label-left">
                  <div class="form-group">
                    <label class="control-label col-md-3">Tiền lương tháng<span class="required">*</span>
                    </label>
                    <div class="col-md-9">
                      <input type="text" id="tlthang" required class="form-control col-md-9">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3">Truy lĩnh lương<span class="required">*</span>
                    </label>
                    <div class="col-md-9">
                      <input type="text" id="truylinhluong" required class="form-control col-md-9">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3">BD theo giờ</label>
                    <div class="col-md-9">
                      <input id="bdtheogio" class="form-control col-md-9" type="text">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3">Tiền lương tăng</label>
                    <div class="col-md-9">
                      <input id="tienluongtang" class="form-control col-md-9" type="text" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3">PC CNV</label>
                    <div class="col-md-9">
                      <input id="pccnv" class="form-control col-md-9" type="text" required>
                    </div>
                  </div>
                <div class="form-group">
                    <label class="control-label col-md-3">PC lãnh đạo</label>
                    <div class="col-md-9">
                      <input id="pclanhdao" class="form-control col-md-9" type="text" required>
                    </div>
                  </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Truy thu tiền lương</label>
                    <div class="col-md-9">
                      <input id="truythutienluong" class="form-control col-md-9" type="text" required>
                    </div>
                  </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Tổng số tiền</label>
                    <div class="col-md-9">
                      <input id="tongsotien" class="form-control col-md-9" type="text" required>
                    </div>
                  </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Đoàn phí công đoàn</label>
                    <div class="col-md-9">
                      <input id="doanphi" class="form-control col-md-9" type="text" required>
                    </div>
                  </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Tiền còn lại</label>
                    <div class="col-md-9">
                      <input id="tienconlai" class="form-control col-md-9" type="text" required>
                    </div>
                  </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
                <button type="button" name="them" class="btn btn-success capnhat">Cập nhật</button>
            </form>
            </div>
        </div>
    </div>
</div>

<!-- -->
<div class="row">
  <div class="col-md-12">
        <div class="x_panel">
            <div class="x_title">
              <h1 style="color:#3498db">QUẢN LÝ BẢNG LƯƠNG</h1>
              <div class="clearfix"></div>
              <!-- -->
              <div class="col-md-3" style="width: 230px">
                <label class="control-label" style="float:left;line-height:38px;margin:7px;">Chọn tháng</label>
                <select style="width: 120px;border-radius: 5px;margin: 10px" class="form-control" id="thang">
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
                <select style="width: 120px;border-radius: 5px;margin: 10px" class="form-control" id="nam">
                  <?php
                    $bl->selectthangnam();
                    while($row=$bl->laythang()){
                  ?>
                    <option value="<?php echo $row['nam'] ?>"><?php echo $row['nam'] ?></option>
                  <?php } ?>
                </select>
              </div>
              <!-- -->
              <div id="hien">
              <table class="table table-hover tbl" style="width: 1850px">
                <thead>
                  <tr>
                    <th>STT</th>
                    <th>Họ tên</th>
                    <th>TKATM</th>
                    <th>Tiền lương tháng</th>
                    <th>Truy lĩnh lương</th>
                    <th>BD theo giời</th>
                    <th>Tiền lương tăng</th>
                    <th>PCCNV</th>
                    <th>PCLĐ</th>
                    <th>Truy thu</th>
                    <th>Tổng tiền</th>
                    <th>KPCD</th>
                    <th>Còn lại</th>
                    <th>Email</th>
                    <th>Quản lý</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    $bl->selectthangnam();
                    $row=$bl->laythang();
                    $bl->select($row['thang'],$row['nam']);
                    $i=1;
                    while ($row=$bl->laybangluong()) {
                  ?>
                  <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $row['HoTen'] ?></td>
                    <td><?php echo $row['SoTKATM'] ?></td>
                    <td><?php echo $row['TLuongThang'] ?></td>
                    <td><?php echo $row['TruyLinhLuong'] ?></td>
                    <td><?php echo $row['BDTheoGio'] ?></td>
                    <td><?php echo $row['TienLuongTang'] ?></td>
                    <td><?php echo $row['PCCNV'] ?></td>
                    <td><?php echo $row['PCLĐ'] ?></td>
                    <td><?php echo $row['TruyThuTLuong'] ?></td>
                    <td><?php echo $row['TongSoTien'] ?></td>
                    <td><?php echo $row['KPCD']?></td>
                    <td><?php echo $row['SoTienCL'] ?></td>
                    <td><?php echo $row['Email'] ?></td>
                    <td>
                      <center>
                        <a href="#" class="btn btn-round btn-success mo-modal-capnhat" data-capnhat="<?php echo $row['MaBL'] ?>">
                          <i class="fa fa-pencil"></i>Cập nhật</a>
                      </center>
                    </td>
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
      $.post('controller/hienthibangluong/hienbl.php',{thang:thang,nam:nam},function(data){
        $('#hien').html(data);
      })
    })
    //
    $('#nam').change(function(){
      var thang=$('#thang').val();
      var nam=$('#nam').val();
      $.post('controller/hienthibangluong/hienbl.php',{thang:thang,nam:nam},function(data){
        $('#hien').html(data);
      })
    })
    //
    $('.mo-modal-capnhat').click(function(){
      var ma=$(this).attr('data-capnhat');
      alert(ma);
      $('#modal-capnhat').modal('show');
    })
  })
</script>