
<div class="modal fade" id="modal-them" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">THÔNG TIN CÁN BỘ</h4>
            </div>
            <div class="modal-body">
        <div class="row">
          <form id="demo-form2" action="" method="post" data-parsley-validate class="form-horizontal form-label-left">
                      <div class="form-group">
                        <label class="control-label col-md-3">Mã cán bộ<span class="required">*</span>
                        </label>
                        <div class="col-md-9">
                          <input type="text" id="macb" required class="form-control col-md-9" placeholder="Mã cán bộ">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3">Tên cán bộ<span class="required">*</span>
                        </label>
                        <div class="col-md-9">
                          <input type="text" id="tencb" name="tencb" required class="form-control col-md-9" placeholder="Tên cán bộ">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3">Ngày sinh</label>
                        <div class="col-md-9">
                          <input id="ngaysinh" class="form-control col-md-9" type="date" name="ngaysinh">
                        </div>
                      </div>
                      <div class="form-group">
            <label class="control-label col-md-3">Giới tính</label>
                        <div class="col-md-9">
                          <select name="gioitinh" id="gioitinh" class="form-control">
                            <option value="Nam">Nam</option>
                            <option value="Nữ">Nữ</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3">Địa chỉ</label>
                        <div class="col-md-9">
                          <textarea name="diachi" id="diachi" class="form-control col-md-9" cols="5" rows="5" required></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3">Email</label>
                        <div class="col-md-9">
                          <input id="email" class="form-control col-md-9" type="text" name="email" placeholder="Email" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3">Số ATM</label>
                        <div class="col-md-9">
                          <input id="soatm" class="form-control col-md-9" type="text" name="soatm" placeholder="Số tài khoản ATM" required>
                        </div>
                      </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
                <button type="button" name="them" class="btn btn-success them">Thêm</button>
            </form>
            </div>
        </div>
    </div>
</div>

<!-- Xóa -->
<div class="modal fade" id="modal-xoa" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">THÔNG TIN CÁN BỘ</h4>
            </div>
            <div class="modal-body">
              <input type="text" name="mscbxoa" id="mscbxoa" hidden>
                <img src="../../image/cb.png" style="margin: 0px auto">
                Bạn có muốn xóa?
                <br />
                Khi xóa, thông tin về cán bộ không thể phục hồi lại được.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
                <button type="button" name="them" class="btn btn-success xoa">Xóa</button>
            </form>
            </div>
        </div>
    </div>
</div>
<!-- -->
<!-- Cập nhật -->
  
  <div class="modal fade" id="modal-capnhat" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">THÔNG TIN CÁN BỘ</h4>
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
                <h1 style="color:#3498db">DANH SÁCH CÁN BỘ</h1>
              <div class="clearfix"></div>
              <button type="button" class="btn btn-info btn-lg mo-modal-them">Thêm cán bộ</button>
              <table class="table table-hover tbl" style="width: 100%;">
        <thead>
          <tr>
            <th>Mã cán bộ</th>
            <th>Họ tên</th>
            <th>Ngày sinh</th>
            <th>Giới tính</th>
            <th>Địa chỉ</th>
            <th>Email</th>
            <th>Số TK ATM</th>
            <th><center>Sửa<center></th>
            <th><center>Xóa<center></th>
          </tr>
        </thead>
        <tbody>
        <?php
          while($row=$cb->laydanhsachcanbo()){
        ?>
            <tr>
              <td><?php echo $row['MaCB'] ?></td>
              <td id="hoten-<?php echo $row['MaCB'] ?>"><?php echo $row['HoTen'] ?></td>
              <td id="ngaysinh-<?php echo $row['MaCB'] ?>"><?php echo $row['NgaySinh'] ?></td>
              <td id="gioitinh-<?php echo $row['MaCB'] ?>"><?php echo $row['GioiTinh'] ?></td>
              <td id="diachi-<?php echo $row['MaCB'] ?>"><?php echo $row['DiaChi'] ?></td>
              <td id="email-<?php echo $row['MaCB'] ?>"><?php echo $row['Email'] ?></td>
              <td id="soatm-<?php echo $row['MaCB'] ?>"><?php echo $row['SoTKATM'] ?></td>
              <td>
                <center>
                  <a href="#" class="btn btn-round btn-success mo-modal-capnhat" data-capnhat="<?php echo $row['MaCB'] ?>">
                    <i class="fa fa-pencil"></i> Sửa
                  </a>
                </center>
              </td>
              <td>
                <a href="#" class="btn btn-round btn-danger mo-modal-xoa" data-xoa="<?php echo $row['MaCB']?>">
                    <i class="fa fa-trash"></i> Xóa
                  </a>
              </td>
            </tr>
        <?php
          }
        ?>
        </tbody>
      </table>
          </div>
      </div>
    <div class="x_content">
    </div>
  </div>
</div>

<script>
  $(document).ready(function(){

        $('.tbl').DataTable({
            language: {
                lengthMenu:"Hiển thị _MENU_ bản ghi",
                search: "_INPUT_",
                searchPlaceholder: "Tìm cán bộ...",
                info: "Hiển thị trang _PAGE_ của _PAGES_",
                zeroRecords:"Không tìm thấy thông tin cán bộ",
                paginate: {
                    first: "Đầu tiên",
                    last: "Cuối cùng",
                    next: "Sau",
                    previous: "Trước"
                }
            }
        });

    $('.mo-modal-them').click(function(){
      $('#modal-them').modal('show');
    });
    //Kiểm tra mã cán bộ có tồn tại hay không
    $('#macb').blur(function(){
      var congviec="kiemtra";
      var macb=$('#macb').val();
      $.post('controller/canbo/xuly.php',{congviec:congviec,macb:macb},function(data){
        if(data=="MSTT"){
          toastr.error("Mã số cán bộ đã tồn tại");
        }
      });
    })
    //Kiểm tra email có tồn tại hay không
    $('#email').blur(function(){
      var congviec="kiemtra1";
      var email=$('#email').val();
      $.post('controller/canbo/xuly.php',{congviec:congviec,email:email},function(data){
        if(data=="EmailTT"){
          toastr.error("Email cán bộ đã tồn tại");
          $('#email').val("");
        }
      });
    })
    //Kiểm tra số atm có tồn tại hay không
    $('#soatm').blur(function(){
      var congviec="kiemtra2";
      var soatm=$('#soatm').val();
      $.post('controller/canbo/xuly.php',{congviec:congviec,soatm:soatm},function(data){
        if(data=="SoATMTT"){
          toastr.error("Số tài khoản ATM đã tồn tại");
          $('#soatm').val("");
        }
      });
    })
    //Thêm
    $('.them').click(function(){
      var congviec="them";
      var macb=$('#macb').val();
      var tencb=$('#tencb').val();
      var ngaysinh=$('#ngaysinh').val();
      var gt=$('#gioitinh').val();
      var diachi=$('#diachi').val();
      var email=$('#email').val();
      var soatm=$('#soatm').val();
      if(macb.length==0 || tencb.length==0 || ngaysinh.length==0 || gt.length==0 || diachi.length==0 || email.length==0 || soatm.length==0 ){
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
                        $.post("controller/canbo/xuly.php",{congviec:congviec,macb:macb,tencb:tencb,ngaysinh:ngaysinh,gt:gt,diachi:diachi,email:email,soatm:soatm},function(data){
                        if(data=="1"){
                          toastr.success("Thêm thành công");
                          setTimeout(function(){
                            location.reload();
                          },500)
                        }else{
                          toastr.error("Thêm thất bại! Vui lòng xem lại");
                        } 
                      }); 
                    }
                  }
                }
              }
            }
         });
    //Mở modal xóa
    $('.mo-modal-xoa').click(function(){
      $ma=$(this).attr("data-xoa");
      $("#mscbxoa").val($ma);
      $('#modal-xoa').modal('show');
    })
    //Xóa
    $('.xoa').click(function(){
      var congviec="xoa";
      var ma=$("#mscbxoa").val();
      $.post('controller/canbo/xuly.php',{congviec:congviec,ma:ma},function(data){
        if(data=="1"){
          toastr.success("Xóa thành công");
          setTimeout(function(){
            location.reload();
          },500)
        }else{
          toastr.error("Đã có lỗi xảy ra");
        }
      });
    })

    //Cập nhật
    $('.mo-modal-capnhat').click(function(){
      $ma=$(this).attr('data-capnhat');

      var mang = $("#ngaysinh-"+$ma).text().trim().split("/");
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

      $('#macbcn').val($ma);
      $('#tencbcn').val($("#hoten-"+$ma).text());
      $('#ngaysinhcn').val(ctr);
      $('#diachicn').val($("#diachi-"+$ma).text());
      $('#gioitinhcn').val($("#gioitinh-"+$ma).text());
      $('#emailcn').val($("#email-"+$ma).text());
      $('#soatmcn').val($("#soatm-"+$ma).text());

      $('#modal-capnhat').modal('show');
    })
    //Cập nhật
    $('.capnhat').click(function(){
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
                        $.post('controller/canbo/xuly.php',{congviec:congviec,macb:macb,tencb:tencb,ngaysinh:ngaysinh,diachi:diachi,gioitinh:gioitinh,email:email,soatm:soatm},function(data){
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
       })
</script>