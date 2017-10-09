
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

<div class="row">
	<div class="col-md-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>DANH SÁCH CÁN BỘ</h2>
            	<div class="clearfix"></div>
        	</div>
    	</div>
    	<button type="button" class="btn btn-info btn-lg mo-modal-them">Thêm cán bộ</button>
		<div class="x_content">
			<table class="table table-striped table-bordered tbl">
				<thead>
					<tr>
						<th>Mã cán bộ</th>
						<th>Họ tên</th>
						<th>Ngày sinh</th>
						<th>Giới tính</th>
						<th>Địa chỉ</th>
						<th>Email</th>
						<th>Số TK ATM</th>
						<th><center>Thao tác<center></th>
					</tr>
				</thead>
				<tbody>
				<?php
					while($row=$cb->laydanhsachcanbo()){
				?>
						<tr>
							<td><?php echo $row['MaCB'] ?></td>
							<td><?php echo $row['HoTen'] ?></td>
							<td><?php echo $row['NgaySinh'] ?></td>
							<td><?php echo $row['GioiTinh'] ?></td>
							<td><?php echo $row['DiaChi'] ?></td>
							<td><?php echo $row['Email'] ?></td>
							<td><?php echo $row['SoTKATM'] ?></td>
							<td>
								<center>
									<a href="#" class="btn btn-round btn-success" data-capnhat="<?php echo $row['MaCB'] ?>">
										<i class="fa fa-pencil"></i> Sửa
									</a>
									<a href="#" class="btn btn-round btn-danger mo-modal-xoa" data-xoa="<?php echo $row['MaCB']?>">
										<i class="fa fa-trash"></i> Xóa
									</a>
								</center>
							</td>
						</tr>
				<?php
					}
				?>
				</tbody>
			</table>
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
		//Kiểm tra
		$('#macb').blur(function(){
			var macb=$('#macb').val();
			$.post('controller/canbo/kiemtramaso.php',{macb:macb},function(data){
				if(data=="MSTT"){
					toastr.error("Mã số cán bộ đã tồn tại");
				}
			});
		})
		//Thêm
		$('.them').click(function(){
			var macb=$('#macb').val();
			var tencb=$('#tencb').val();
			var ngaysinh=$('#ngaysinh').val();
			var gt=$('#gioitinh').val();
			var diachi=$('#diachi').val();
			var email=$('#email').val();
			var soatm=$('#soatm').val();
			$.post("controller/canbo/them.php",{macb:macb,tencb:tencb,ngaysinh:ngaysinh,gt:gt,diachi:diachi,email:email,soatm:soatm},function(data){
				if(data=="1"){
					toastr.success("Thêm thành công");
					location.reload();
				}else{
					toastr.error("Thêm thất bại! Vui lòng xem lại");
				}	
			});
		})
		//Mở modal xóa
		$('.mo-modal-xoa').click(function(){
			$ma=$(this).attr("data-xoa");
			$("#mscbxoa").val($ma);
			$('#modal-xoa').modal('show');
		})
		//Xóa
		$('.xoa').click(function(){
			var ma=$("#mscbxoa").val();
			$.post('controller/canbo/xoa.php',{ma:ma},function(data){
				if(data=="1"){
					location.reload();
				}else{
					toastr.error("Đã có lỗi xảy ra");
				}
			});
		})
	})
</script>