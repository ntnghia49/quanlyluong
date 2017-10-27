
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
                          		<select class="form-control quyenhan" style="border-radius: 5px;">
                          			<?php
                          				$tk->selectq();
                          				while($row=$tk->laydanhquyen()){
                          			?>
                          			<option value="<?php echo $row['MaQuyen'] ?>"><?php echo $row['TenQuyen'] ?></option>
									<?php } ?>
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

<!-- Cấm -->
<div class="modal fade" id="modal-cam" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Cấm tài khoản</h4>
            </div>
            <div class="modal-body">
            	<input type="text" hidden id="macam">
            	<input type="text" hidden id="ttcam">
            	<span style="color: red;">Bạn có xác nhận cấm tài khoản này đăng nhập hệ thống không!!</span>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger closecam" data-dismiss="modal">Đóng</button>
                <button type="button" name="them" class="btn btn-success xncam">Xác nhận</button>
            </form>
            </div>
        </div>
    </div>
</div>
<!-- -->

<!-- Không cấm -->
<div class="modal fade" id="modal-khong-cam" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Cấm tài khoản</h4>
            </div>
            <div class="modal-body">
            	<input type="text" hidden id="macam">
            	<input type="text" hidden id="ttcam">
            	<span style="color: red;">Bạn có xác nhận cho phép tài khoản này đăng nhập hệ thống không!!</span>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger closecam" data-dismiss="modal">Đóng</button>
                <button type="button" name="them" class="btn btn-success xncam">Xác nhận</button>
            </form>
            </div>
        </div>
    </div>
</div>
<!-- -->

<!-- Xóa -->

<div class="modal fade" id="modal-xoa" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Xóa tài khoản</h4>
            </div>
            <div class="modal-body">
            	<input type="text" hidden id="maxoa">
            	<span style="color: red;">Bạn có chắc muốn xóa tài khoản này không</span>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">Đóng</button>
                <button type="button" name="them" class="btn btn-danger xoa">Xóa</button>
            </form>
            </div>
        </div>
    </div>
</div>

<!-- -->

<!-- Phân quyền -->

<div class="modal fade" id="modal-phan-quyen" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Phân quyền hạn</h4>
            </div>
            <div class="modal-body">
            	<div class="row">
					<form id="demo-form2" action="" method="post" data-parsley-validate class="form-horizontal form-label-left">
                      <div class="form-group">
                        <label class="control-label col-md-3">Chọn quyền</label>
                        <div class="col-md-9">
                        	<input type="text" hidden id="matkpq">
							<select class="form-control phanquyenhan" style="border-radius: 5px;">
                          		<?php
                          			$tk->selectq();
                          			while($row=$tk->laydanhquyen()){
                          		?>
                          		<option value="<?php echo $row['MaQuyen'] ?>"><?php echo $row['TenQuyen'] ?></option>
								<?php } ?>
                          	</select>
                        </div>
                      </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">Đóng</button>
                <button type="button" name="them" class="btn btn-danger xn">Xác nhận</button>
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
						<th>Trạng thái</th>
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
							<td id="tt-<?php echo $row['MaTK'] ?>">
								<?php
									if($row['TrangThai']==1){
								?>
                            	<label>
                              		<input type="checkbox" class="js-switch cam <?php echo $row['MaTK'] ?>" data-cam="<?php echo $row['MaTK'] ?>" id="<?php echo $row['MaTK'] ?>" checked data-switchery="true" style="display: none;" value="<?php echo $row['TrangThai'] ?>">
                            	</label>
                            	<?php
                            		}else{ 
                            	?>
                            	<label>
                              		<input type="checkbox" class="js-switch khongcam <?php echo $row['MaTK'] ?>" data-cam="<?php echo $row['MaTK'] ?>" id="<?php echo $row['MaTK'] ?>" data-switchery="true" style="display: none;" value="<?php echo $row['TrangThai'] ?>">
                            	</label>
                            	<?php 
                            		}
                            	?>
							</td>
							<td width="200px">
								<center>
									<a href="#" class="btn btn-round btn-success mo-modal-capnhat" data-phanquyen="<?php echo $row['MaTK'] ?>">
										<i class="fa fa-pencil"></i> Phân quyền
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
			var cv="them";
			var maq=$('.quyenhan').val();
			for (var i = 1; i <= sl; i++) {
				if(document.getElementById(i).checked==true){
					ma[j]=$("#"+i+"-macb").text();
					j++;
				}
			}
			if(ma.length==0){
				toastr.warning("Vui lòng chọn cán bộ muốn cấp tài khoản");
			}else{
				$.post('controller/taikhoan/xuly.php',{cv:cv,ma:ma,maq:maq},function(data){
					//alert(data);
					if(data=="OK")
						location.reload();
					else
						toastr.warning("Đã có lỗi xảy ra");
				});
			}
		})
		//Cấm tài khoản
		$('.cam').click(function(){
			var ma=$(this).attr('data-cam');
			var tt=null;
			if($("."+ma).val()==1){
				tt=0;
			}else{
				tt=1;
			}
			$('#macam').val(ma);
			$('#ttcam').val(tt);
			$('#modal-cam').modal('show');
		})
		//Không cấm nữa
		$('.khongcam').click(function(){
			var ma=$(this).attr('data-cam');
			var tt=null;
			if($("."+ma).val()==1){
				tt=0;
			}else{
				tt=1;
			}
			$('#macam').val(ma);
			$('#ttcam').val(tt);
			$('#modal-khong-cam').modal('show');
		})
		//Cấm
		$('.xncam').click(function(){
			var ma=$('#macam').val();
			var tt=$('#ttcam').val();
			var cv="lock";
			$.post('controller/taikhoan/xuly.php',{cv:cv,ma:ma,tt:tt},function(data){
				if(data=="OK")
					location.reload();
				else
					toastr.error("Đã có lỗi xảy ra");
			});
		})
		$('.closecam').click(function(){
			location.reload();
		})
		//Mở modal xóa
		$('.mo-modal-xoa').click(function(){
			var ma=$(this).attr('data-xoa');
			$('#maxoa').val(ma);
			$('#modal-xoa').modal('show');
		})
		//Xóa
		$('.xoa').click(function(){
			var ma=$('#maxoa').val();
			var cv="xoa";
			$.post('controller/taikhoan/xuly.php',{cv:cv,ma:ma},function(data){
				if(data=="OK")
					location.reload();
				else
					toastr.error("Đã có lỗi xảy ra");
			});
		})
		//Mở modal phân quyền
		$('.mo-modal-capnhat').click(function(){
			var ma=$(this).attr('data-phanquyen');
			$('#matkpq').val(ma);
			$('#modal-phan-quyen').modal('show');
		});
		$('.xn').click(function(){
			var matk=$('#matkpq').val();
			var maq=$('.phanquyenhan').val();
			var cv="phanquyen";
			$.post('controller/taikhoan/xuly.php',{matk:matk,maq:maq,cv:cv},function(data){
				if(data=="OK")
					location.reload();
				else
					toastr.error("Đã có lỗi xảy ra");
			});
		})
	});
</script>