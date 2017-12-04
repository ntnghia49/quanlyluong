
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
                  <input type="text" id="mabl" name="" hidden>
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
              <h1 style="color:hsl(0, 96%, 49%);font-size:21px;font-weight:bold;text-align:center;">QUẢN LÝ BẢNG LƯƠNG</h1>
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
              <div class="col-md-3" style="width: 150px;float: right;">
                <button type="button" style="width:130px;height:48px;background:#0dab11;border:1px solid #0dab11;" class="btn btn-success mail"><span style="color: #FFF;font-size: 17px;"><i class="fa fa-envelope-o" aria-hidden="true"></i> Gửi mail</span></button>
              </div>
              <!-- -->
              <div id="hien">
              <table class="table table-hover tbl" style="width: 1850px">
                <thead>
                  <tr>
                    <th>Quản lý</th>
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
                    <td>
                      <center>
                        <a href="#" style="background: #d35400;border: 1px solid #d35400" class="btn btn-round btn-success mo-modal-capnhat" data-capnhat="<?php echo $row['MaBL'] ?>">
                          <i class="fa fa-pencil"></i>Cập nhật</a>
                      </center>
                    </td>
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
      $('#mabl').val(ma);
      $('#tlthang').val($('#'+ma+"-TLuongThang").text());
      $('#truylinhluong').val($('#'+ma+"-TruyLinhLuong").text());
      $('#bdtheogio').val($('#'+ma+"-BDTheoGio").text());
      $('#tienluongtang').val($('#'+ma+"-TienLuongTang").text());
      $('#pccnv').val($('#'+ma+"-PCCNV").text());
      $('#pclanhdao').val($('#'+ma+"-PCLĐ").text());
      $('#truythutienluong').val($('#'+ma+"-TruyThuTLuong").text());
      $('#tongsotien').val($('#'+ma+"-TongSoTien").text());
      $('#doanphi').val($('#'+ma+"-KPCD").text());
      $('#tienconlai').val($('#'+ma+"-SoTienCL").text());

      $('#modal-capnhat').modal('show');
    })
    //
    $('.capnhat').click(function(){
      var ma=$('#mabl').val();
      var tlthang=$('#tlthang').val();
      var truylinhluong=$('#truylinhluong').val();
      var bdtheogio=$('#bdtheogio').val();
      var tienluongtang=$('#tienluongtang').val();
      var pccnv=$('#pccnv').val();
      var pclanhdao=$('#pclanhdao').val();
      var truythutienluong=$('#truythutienluong').val();
      var tongsotien=$('#tongsotien').val();
      var doanphi=$('#doanphi').val();
      var tienconlai=$('#tienconlai').val();
      $.post('controller/hienthibangluong/capnhatbl.php',{ma:ma,tlthang:tlthang,truylinhluong:truylinhluong,bdtheogio:bdtheogio,tienluongtang:tienluongtang,pccnv:pccnv,pclanhdao:pclanhdao,truythutienluong:truythutienluong,tongsotien:tongsotien,doanphi:doanphi,tienconlai:tienconlai},function(data){
        //$('#loi').val(data);
        if(data="TC"){
          toastr.success("Cập nhật thành công");
          setTimeout(function(){
            location.reload();
          },500)
        }else{
          if(data="TB")
            toastr.error("Đã có lỗi xảy ra");
        }
      })
    })
    //Mail
    $('.mail').click(function(){
      var ngayhientai = new Date;
      var thang=ngayhientai.getMonth();
      var thangchon=$('#thang').val();
      var namchon=$('#nam').val();
      if(thangchon!=thang+1)
        toastr.error('Có lỗi xảy ra');
      else{
        $.post('controller/mail/guimail.php',{thangchon:thangchon,namchon:namchon},function(data){
          if(data=="DG"){
            toastr.error("Tháng này đã gửi mail rồi");
          }else{
            alert(data);
          }
          //alert(data);
        })
      }
    //
    })
  })
</script>