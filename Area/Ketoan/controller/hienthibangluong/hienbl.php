<?php 
  include('../../model/bangluong.php');
  $bl=new BangLuong();
  $thang=$_POST['thang'];
  $nam=$_POST['nam'];
?>
<table class="table table-hover tbl" style="width: 1850px">
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
      <th>Quản lý</th>
    </tr>
  </thead>
  <tbody>
    <?php 
      $bl->select2($thang,$nam);
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
  })
</script>