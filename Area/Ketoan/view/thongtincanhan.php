<style type="text/css">
  .thongtin{
    width: 720px;
    height: auto;
    margin: 0px auto;
    border: 4px solid #0905fb;
    border-radius: 10px;
  }
  .hienchu{
    width: 720px;
    height: auto;
    margin: 0px auto;
    padding: 10px;
  }
  .chu{
    font-size: 20px;
    color: #000;
    font-weight: bold;
  }
  .noidung{
    font-size: 20px;
    margin-left: 14px;
    color: #F70909;
    font-weight: bold;
  }
  .x_title span{
    color: rgba(232, 4, 4, 0.84);
  }
  .tieude{
    width: 208px;
    height: auto;
    float: left;
    margin-left: 83px;
  }
  .nd{
    width: 400px;
    height: auto;
    float: left;
  }
  .nut{
    width: 220px;
    height: auto;
    margin: 0px auto;
    margin-bottom: 10px;
  }
</style>

<!-- -->
<div class="modal fade" id="modal-capnhat" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">THÔNG TIN CÁ NHÂN</h4>
            </div>
            <div class="modal-body">
        <div class="row">
          <form id="demo-form2" action="" method="post" data-parsley-validate class="form-horizontal form-label-left">
                      <div class="form-group">
                        <label class="control-label col-md-3">Mã cán bộ<span class="required">*</span>
                        </label>
                        <div class="col-md-9">
                          <input type="text" id="macbcn" required class="form-control col-md-9" placeholder="Mã cán bộ" readonly>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3">Tên cán bộ<span class="required">*</span>
                        </label>
                        <div class="col-md-9">
                          <input type="text" id="tencbcn" name="tencbcn" required class="form-control col-md-9" placeholder="Tên cán bộ">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3">Ngày sinh</label>
                        <div class="col-md-9">
                          <input id="ngaysinhcn" class="form-control col-md-9" type="date" name="ngaysinh">
                        </div>
                      </div>
                      <div class="form-group">
                      <label class="control-label col-md-3">Giới tính</label>
                        <div class="col-md-9">
                          <select name="gioitinhcn" id="gioitinhcn" class="form-control">
                            <option value="Nam">Nam</option>
                            <option value="Nữ">Nữ</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3">Địa chỉ</label>
                        <div class="col-md-9">
                          <textarea name="diachicn" id="diachicn" class="form-control col-md-9" cols="5" rows="5" required></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3">Email</label>
                        <div class="col-md-9">
                          <input id="emailcn" class="form-control col-md-9" type="text" name="emailcn" placeholder="Email" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3">Số ATM</label>
                        <div class="col-md-9">
                          <input id="soatmcn" class="form-control col-md-9" type="text" name="soatmcn" placeholder="Số tài khoản ATM" required>
                        </div>
                      </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
                <button type="button" name="them" class="btn btn-success capnhat1">Cập nhật</button>
            </form>
            </div>
        </div>
    </div>
</div>
<!-- -->
<!-- -->
<div class="modal fade" id="modal-doimatkhau" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Đổi mật khẩu</h4>
            </div>
            <div class="modal-body">
        <div class="row">
          <form id="demo-form2" action="" method="post" data-parsley-validate class="form-horizontal form-label-left">
                      <div class="form-group">
                        <label class="control-label col-md-3">Mật khẩu cũ<span class="required"></span>
                        </label>
                        <div class="col-md-9">
                          <input type="password" id="mkcu" required class="form-control col-md-9" placeholder="Mật khẩu cũ">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3">Mật khẩu mới<span class="required"></span>
                        </label>
                        <div class="col-md-9">
                          <input type="password" id="mkmoi" name="tencbcn" required class="form-control col-md-9" placeholder="Mật khẩu mới">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3">Nhập lại mật khẩu</label>
                        <div class="col-md-9">
                          <input id="nhaplai" class="form-control col-md-9" type="password" name="ngaysinh" placeholder="Nhập lại mật khẩu mới">
                        </div>
                      </div>
                      <input type="text" id="tk" hidden value="<?php echo $_SESSION['dangnhap'] ?>">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
                <button type="button" name="them" class="btn btn-success xacnhan">Xác nhận</button>
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
              <!-- -->
                <div class="thongtin">
                  <h1 style="color: #0905fb;text-align: center;font-size: 31px;font-weight: bold;margin-top: 20px;">THÔNG TIN CÁ NHÂN</h1>
                  <div class="clearfix"></div>
                  <div class="hienchu">
                    <div class="tieude">
                      <p class="chu">Mã cán bộ:</p>
                      <p class="chu">Họ tên:</p>
                      <p class="chu">Ngày sinh:</p>
                      <p class="chu">Giới tính:</p>
                      <p class="chu">Địa chỉ:</p>
                      <p class="chu">Email:</p>
                      <p class="chu">Số tài khoản ATM:</p>
                    </div>
                    <div class="nd">
                      <p class="noidung macb"><?php echo $row['MaCB'] ?></p>
                      <p class="noidung hoten"><?php echo $row['HoTen'] ?></p>
                      <p class="noidung ngaysinh"><?php echo $row['NgaySinh'] ?></p>
                      <p class="noidung gioitinh"><?php echo $row['GioiTinh'] ?></p>
                      <p class="noidung diachi"><?php echo $row['DiaChi'] ?></p>
                      <p class="noidung email"><?php echo $row['Email'] ?></p>
                      <p class="noidung sotk"><?php echo $row['SoTKATM'] ?></p>
                    </div>
                  </div>
                  <div class="nut">
                    <button type="button" class="btn btn-danger doi">Đổi mật khẩu</button>
                    <button type="button" class="btn btn-success capnhat">Cập nhật</button>
                  </div>
                </div>
              <!-- -->
            </div>
        </div>
      </div>
  <div class="x_content">
  </div>
</div>
<script>
  $(document).ready(function(){
      $('.capnhat').click(function(){

        var mang = $(".ngaysinh").text().trim().split("/");
              var date = new Date(mang[2] + "-" + mang[1] + "-" + mang[0]);
              var ngay = date.getDate();
              var thang = date.getMonth() + 1;
              var nam = date.getFullYear();
              if (ngay < 10) {
                  ngay = "0" + ngay;
              }
              if (thang < 10) {
                  thang = "0" + thang;
              }
              var ctr = nam + "-" + thang + "-" + ngay;

        $('#macbcn').val($('.macb').text());
        $('#tencbcn').val($('.hoten').text());
        $('#ngaysinhcn').val(ctr);
        $('#diachicn').val($('.diachi').text());
        $('#gioitinhcn').val($('.gioitinh').text());
        $('#emailcn').val($('.email').text());
        $('#soatmcn').val($('.sotk').text());

        $('#modal-capnhat').modal('show');
      })
      //Cập nhật
      $('.capnhat1').click(function(){
      var congviec="capnhat";
      var macb=$('#macbcn').val();
      var tencb=$('#tencbcn').val();
      var ngaysinh=$('#ngaysinhcn').val();
      var diachi=$('#diachicn').val();
      var gioitinh=$('#gioitinhcn').val();
      var email=$('#emailcn').val();
      var soatm=$('#soatmcn').val();
      //alert(macb+tencb+ngaysinh+diachi+gioitinh+email+soatm);
      if(tencb.length==0 || ngaysinh.length==0 || diachi.length==0 || gioitinh.length==0 || email.length==0 || soatm.length==0 ){
        toastr.error("Vui lòng nhập đầy đủ thông tin");
      }else{
        var hotencb = tencb.trim().split(" ");
          if(hotencb.length<2){
            toastr.error("Họ tên cán bộ cần nhập ít nhất 2 từ");
          }else{
            var mang = ngaysinh.trim().split("-");
            var ngayhientai = new Date;
            var namhientai = ngayhientai.getFullYear();
              if(namhientai - mang[0] <18 || namhientai - mang[0] >60){
                toastr.error("Độ tuổi cán bộ phải từ 18 đến 60");
              }else{
                var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                  if(!filter.test(email)){
                    toastr.error("Mail không hợp lệ");
                  }else{
                    var filter = /^[0-9]{10,20}$/;
                      if(!filter.test(soatm)){
                        toastr.error("Số ATM chỉ được nhập số từ 10 đến 20");
                      }else{
                        $.post('../admin/controller/canbo/xuly.php',{congviec:congviec,macb:macb,tencb:tencb,ngaysinh:ngaysinh,diachi:diachi,gioitinh:gioitinh,email:email,soatm:soatm},function(data){
                        if(data=="1"){
                          toastr.success("Cập nhật thành công");
                          setTimeout(function(){
                            location.reload();
                          },500)
                        }
                        else{
                          toastr.error("Đã có lỗi xảy ra");
                        }
                      });
                    }
                  }
                }
              }
            }
         })
      //Đổi mật khẩu
      $('.doi').click(function(){
        $('#modal-doimatkhau').modal('show');
      })
      //Đổi
      $('.xacnhan').click(function(){
        var mkcu=$('#mkcu').val();
        var mkmoi=$('#mkmoi').val();
        var nhaplai=$('#nhaplai').val();
        var tk=$('#tk').val();
        if(nhaplai==mkmoi){
          $.post('controller/canhan/xuly.php',{tk:tk,mkcu:mkcu,mkmoi:mkmoi,nhaplai:nhaplai},function(data){
            if(data=="KC"){
              toastr.warning("Mật khẩu không đúng");
            }else{
              if(data=="TC"){
                toastr.success("Cập nhật thành công");
                setTimeout(function(){
                  location.reload();
                },500)
              }else{
                toastr.error("Đã có lỗi xảy ra");
              }
            }
          })
        }else{
          toastr.error("Mật khẩu mới không trùng khớp");
        }
      })
  })
</script>