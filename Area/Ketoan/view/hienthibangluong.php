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
                  <?php $i=1; while ($i<=31) { ?>
                    <option value="<?php echo $i ?>"><?php echo $i ?></option>
                  <?php $i++; } ?>
                </select>
              </div>

              <div class="col-md-3" style="width: 230px">
                <label class="control-label" style="float:left;line-height:38px;margin:7px;">Chọn năm</label>
                <select style="width: 120px;border-radius: 5px;margin: 10px" class="form-control" id="nam">
                  <?php $i=1990; while ($i<=2080) { ?>
                    <option value="<?php echo $i ?>"><?php echo $i ?></option>
                  <?php $i++; } ?>
                </select>
              </div>
              <!-- -->

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
                    $bl->select();
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

  })
</script>