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