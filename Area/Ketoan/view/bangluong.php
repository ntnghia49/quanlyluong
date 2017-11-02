<div class="row">
	<div class="col-md-12">
        <div class="x_panel">
            <div class="x_title">
                <h1 style="color:#3498db">BẢNG LƯƠNG</h1>
            	<div class="clearfix"></div>
        	</div>
        	<form id="files" method="post" enctype="multipart/form-data">
        	<div class="x_content">
				<div class="col-md-3" style="width: 190px">
            		<label class="control-label" style="float:left;line-height:20px;margin:7px;">Chọn tháng</label>
            		<select style="width: 80px;border-radius: 5px;" class="form-control" id="thang">
            			<?php $i=1; while ($i<=31) { ?>
 						<option value="<?php echo $i ?>"><?php echo $i ?></option>
 						<?php $i++; } ?>
            		</select>
            	</div>
            	<div class="col-md-3" style="width: 190px">
            		<label class="control-label" style="float:left;line-height:20px;margin:7px;">Chọn năm</label>
            		<select style="width: 80px;border-radius: 5px;" class="form-control" id="nam">
            			<?php $i=1990; while ($i<=2080) { ?>
 						<option value="<?php echo $i ?>"><?php echo $i ?></option>
 						<?php $i++; } ?>
            		</select>
            	</div>
            	<div class="col-md-3" style="width: 270px">
            		<label class="control-label" style="float:left;line-height:20px;margin:7px;">Chọn sheet cần inport</label>
            		<select style="width: 80px;border-radius: 5px;" class="form-control" id="sheet">
            			<?php $i=1; while ($i<=10) { ?>
 						<option value="<?php echo $i ?>"><?php echo $i ?></option>
 						<?php $i++; } ?>
            		</select>
            	</div>
            	<div class="col-md-3" style="width: 300px">
					<input type="file" class="form-control" id="file" style="border-radius: 5px;" name="media">
            	</div>
            	<div class="col-md-3" style="width: 100px">
					<input type="button" class="form-control" id="nhan" value="Import" style="border-radius: 5px; background-color: #1ED422; color: white;">
            	</div>
        	</div>
        	</form>
    	</div>

    	<!-- -->

	</div>
</div>
<script>
	$(document).ready(function(){

        $('#nhan').click(function(){
            var sheet=$('#sheet').val();
            var thang=$('#thang').val();
            var nam=$('#nam').val();
            //
            var file_data = $('#file').prop('files')[0];
            var form_data = new FormData();
            //thêm files vào trong form data
            form_data.append('file', file_data);
            form_data.append('thang',thang);
            form_data.append('nam',nam);
            form_data.append('sheet',sheet);
            //sử dụng ajax post
            $.ajax({
                url: 'controller/bangluong/import.php', // gửi đến file upload.php 
                dataType: 'text',
                cache: false,
                contentType: false,
                processData: false,
                data:form_data,                    
                type: 'post',
                success: function(res){
                    alert(res);
                }
            });
        })

	})
</script>