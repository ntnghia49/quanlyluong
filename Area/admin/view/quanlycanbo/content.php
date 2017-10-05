
<div class="modal fade" id="modal-xoa" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Xoa thông tin học sinh</h4>
            </div>
            <div class="modal-body">
                Bạn có muốn xóa?
                <br />
                Khi xóa, thông tin về cán bộ sẽ không phục hồi được.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info" data-dismiss="modal">Đóng</button>
                <button type="submit" class="btn btn-danger">Xóa</button>
            </div>
        </div>
    </div>
</div>

<div class="row">
	<div class="col-md-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Danh sách cán bộ</h2>
            	<div class="clearfix"></div>
        	</div>
    	</div>
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
					<tr>
						<td>data</td>
						<td>data</td>
						<td>data</td>
						<td>data</td>
						<td>data</td>
						<td>data</td>
						<td>data</td>
						<td>
							<center>
								<a href="#" class="btn btn-info">
									<i class="fa fa-pencil"></i> Sửa
								</a>
								<a href="#" class="btn btn-danger mo-modal-xoa">
									<i class="fa fa-trash"></i> Xóa
								</a>
							</center>
						</td>
					</tr>
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

		$('.mo-modal-xoa').click(function(){
			$('#modal-xoa').modal('show');
		});
	})
</script>