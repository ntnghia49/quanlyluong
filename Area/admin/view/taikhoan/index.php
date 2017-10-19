
<!-- Thêm tài khoản -->
<div class="modal fade" id="modal-them" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="width: 740px;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Thêm tài khoản</h4>
            </div>
            <div class="modal-body">
            			<form>
            			<div class="form-group col-md-9">
                        	<label class="control-label col-md-3" style="color: #e74c3c;">Chọn quyền</label>
                        	<div class="col-md-6">
                          		<select class="form-control" style="border-radius: 5px;">
                          			<option value="">Admin</option>
                          			<option value="">Ké toán</option>
                          			<option value="">Cán bộ</option>
                          		</select>
                        	</div>
                      	</div>
                      	</form>
		                <table class="table table-hover jambo_table  bulk_action tbl" width="100%">
		                     <thead>
		                        <tr class="headings">
		                            <th>
		                              <input type="checkbox" id="check-all" class="flat">
		                            </th>
		                            <th class="column-title">STT</th>
		                            <th class="column-title">Mã cán bộ</th>
		                            <th class="column-title">Tên cán bộ</th>
		                            <th class="column-title">Ngày sinh</th>
		                            <th class="column-title">Giới tính</th>
		                            <th class="column-title">Địa chỉ</th>
		                            <th class="bulk-actions" colspan="6">
		                              <a class="antoo" style="color:#fff; font-weight:500;">Chọn hàng loạt ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
		                            </th>
		                          </tr>
		                        </thead>
		                        <tbody>
		                        <?php 
		                        	$tk->selectcanbo();
		                        	$i=1;
		                        	while($row=$tk->laydanhsachtaikhoan()){
		                        ?>
		                          <tr class="even pointer">
		                            <td class="a-center ">
		                              <input type="checkbox" class="flat" id="<?php echo $i ?>" name="table_records">
		                            </td>
		                            <td><?php echo $i ?></td>
		                            <td id="<?php echo $i ?>-macb"><?php echo $row['MaCB'] ?></td>
		                            <td><?php echo $row['HoTen'] ?></td>
		                            <td><?php echo $row['NgaySinh'] ?></td>
		                            <td><?php echo $row['GioiTinh'] ?></td>
		                            <td><?php echo $row['DiaChi'] ?></td>
		                          </tr>
		                        <?php
		                        		$i++;
		                        	} 
		                        ?>
		                      </tbody>
		                  </table>
		                  <input type="text" name="" id="soluong" hidden value="<?php echo $i-1 ?>">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
                <button type="button" name="them" class="btn btn-success them">Thêm</button>
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
            	<div class="clearfix"></div>
            	<button type="button" class="btn btn-info btn-lg mo-modal-them">Thêm tài khoản</button>
            	<table class="table table-hover table-striped tbl">
				<thead>
					<tr>
						<th>STT</th>
						<th>Mã cán bộ</th>
						<th>Tên đăng nhập</th>
						<th>Quyền</th>
						<th><center>Thao tác<center></th>
					</tr>
				</thead>
				<tbody>
				<?php
					$tk->select();
					$i=1;
					while($row=$tk->laydanhsachtaikhoan()){
				?>
						<tr>
							<td><?php echo $i ?></td>
							<td id="macb-<?php echo $row['MaTK'] ?>"><?php echo $row['MaCB'] ?></td>
							<td id="tendn-<?php echo $row['MaTK'] ?>"><?php echo $row['TenDN'] ?></td>
							<td id="tenq-<?php echo $row['MaTK'] ?>"><?php echo $row['TenQuyen'] ?></td>
							<td width="200px">
								<center>
									<a href="#" class="btn btn-round btn-success mo-modal-capnhat" data-capnhat="<?php echo $row['MaTK'] ?>">
										<i class="fa fa-pencil"></i> Sửa
									</a>
									<a href="#" class="btn btn-round btn-danger mo-modal-xoa" data-xoa="<?php echo $row['MaTK']?>">
										<i class="fa fa-trash"></i> Xóa
									</a>
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
            language: {
                lengthMenu:"Hiển thị _MENU_ bản ghi",
                search: "_INPUT_",
                searchPlaceholder: "Tìm tài khoản...",
                info: "Hiển thị trang _PAGE_ của _PAGES_",
                zeroRecords:"Không tìm thấy thông tin tài khoản",
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
		})
		//Thêm tài khoản
		$('.them').click(function(){
			var sl=$('#soluong').val();
			var ma=new Array();
			var j=0;
			for (var i = 1; i <= sl; i++) {
				if(document.getElementById(i).checked==true){
					ma[j]=$("#"+i+"-macb").text();
					j++;
				}
			}
			if(ma.length==0){
				toastr.warning("Vui lòng chọn cán bộ muốn cấp tài khoản");
			}else{
				$.post('controller/taikhoan/xuly.php',{ma:ma},function(data){
					alert(data);
				});
			}
		})

	});
</script>