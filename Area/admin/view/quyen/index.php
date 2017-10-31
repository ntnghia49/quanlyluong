<!-- Thêm -->
<div class="modal fade" id="modal-them" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">QUYỀN</h4>
            </div>
            <div class="modal-body">
				<div class="row">
					<form id="demo-form2" action="" method="post" data-parsley-validate class="form-horizontal form-label-left">
                      <div class="form-group">
                        <label class="control-label col-md-3">Quyền<span class="required">*</span>
                        </label>
                        <div class="col-md-9">
                          <select id="tenquyen" class="form-control col-md-9">
                              <option value="Giáo viên">Giáo viên</option>
                              <option value="Kế toán">Kế toán</option>
                          </select>
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
<!-- -->

<!-- Xóa -->
<div class="modal fade" id="modal-xoa" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">QUYỀN</h4>
            </div>
            <div class="modal-body">
            	<input type="text" name="mscbxoa" id="maxoa" hidden>
            	<span style="color: red">Bạn có muốn xóa?</span>
                <br />
                <span style="color: red">Sau khi xóa dữ liệu sẽ không phục hồi lại được.</span>
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
<div class="modal fade" id="modal-cap-nhat" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">QUYỀN</h4>
            </div>
            <div class="modal-body">
				<div class="row">
					<form id="demo-form2" action="" method="post" data-parsley-validate class="form-horizontal form-label-left">
                      <div class="form-group">
                      	<input type="text" name="maqcn" class="maqcn" hidden>
                        <label class="control-label col-md-3">Quyền<span class="required">*</span>
                        </label>
                        <div class="col-md-9">
                          <input type="text" id="tenquyencn" required class="form-control col-md-9" placeholder="Nhập quyền cần sửa">
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
            	<div class="clearfix"></div>
            	<button type="button" class="btn btn-info btn-lg mo-modal-them">Thêm quyền</button>
            	<table class="table table-hover tbl">
				<thead>
					<tr>
						<th>STT</th>
						<th>Quyền</th>
						<th><center>Thao tác<center></th>
					</tr>
				</thead>
				<tbody>
				<?php
					$i=1;
					while($row=$q->laydanhquyen()){
				?>
						<tr>
							<td><?php echo $i ?></td>
							<td id="tenq-<?php echo $row['MaQuyen'] ?>"><?php echo $row['TenQuyen']?></td>
                            <td width="200px">
								<center>
									<a href="#" class="btn btn-round btn-success mo-modal-capnhat" data-capnhat="<?php echo $row['MaQuyen'] ?>">
										<i class="fa fa-pencil"></i> Sửa
									</a>
									<a href="#" class="btn btn-round btn-danger mo-modal-xoa" data-xoa="<?php echo $row['MaQuyen']?>">
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

        //Mở modal thêm
        $('.mo-modal-them').click(function(){
        	$('#modal-them').modal('show');
        })
        //Thêm
        $('.them').click(function(){
        	var cv="them";
        	var tenq=$('#tenquyen').val();
        	$.post('controller/quyen/xuly.php',{cv:cv,tenq:tenq},function(data){
        		if(data=="1"){
        			toastr.success("Thêm thành công");
                    setTimeout(function(){
                        location.reload();
                    },500)
                }
        		else
        			toastr.error("Đã có lỗi xảy ra!!");
        	});
        })
        //Mở modal xóa
        $('.mo-modal-xoa').click(function(){
        	var ma=$(this).attr('data-xoa');
        	$('#maxoa').val(ma);
        	$('#modal-xoa').modal('show');
        })
        //Xóa
        $('.xoa').click(function(){
        	var cv="xoa";
        	var ma=$('#maxoa').val();
        	$.post('controller/quyen/xuly.php',{cv:cv,ma:ma},function(data){
        		if(data=="1"){
        			toastr.success("Xóa thành công");
                    setTimeout(function(){
                        location.reload();
                    },500)
                }
        		else
        			toastr.error("Đã có lỗi xảy ra!!");
        	});
        })
        //Cập nhật modal
        $('.mo-modal-capnhat').click(function(){
        	var ma=$(this).attr('data-capnhat');
        	$('.maqcn').val(ma);
        	$('#tenquyencn').val($("#tenq-"+ma).text());
        	$('#modal-cap-nhat').modal('show');
        })
        //Cập nhật
        $('.capnhat').click(function(){
        	var cv="capnhat";
        	var ma=$('.maqcn').val();
        	var ten=$('#tenquyencn').val();
        	$.post('controller/quyen/xuly.php',{cv:cv,ma:ma,ten:ten},function(data){
        		if(data=="1"){
        			toastr.success("Cập nhật thành công");
                    setTimeout(function(){
                        location.reload();
                    },500)
                }
        		else
        			toastr.error("Đã có lỗi xảy ra!!");
        	});
        })
	})
</script>