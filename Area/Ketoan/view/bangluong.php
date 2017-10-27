<div class="row">
	<div class="col-md-12">
        <div class="x_panel">
            <div class="x_title">
                <h1 style="color:#3498db">BẢNG LƯƠNG</h1>
            	<div class="clearfix"></div>
        	</div>
        	<form action="controller/bangluong/import.php" method="post" enctype="multipart/form-data">
        	<div class="x_content">
				<div class="col-md-3" style="width: 190px">
            		<label class="control-label" style="float:left;line-height:20px;margin:7px;">Chọn tháng</label>
            		<select style="width: 80px;border-radius: 5px;" class="form-control" name="thang">
            			<?php $i=1; while ($i<=31) { ?>
 						<option value="<?php echo $i ?>"><?php echo $i ?></option>
 						<?php $i++; } ?>
            		</select>
            	</div>
            	<div class="col-md-3" style="width: 190px">
            		<label class="control-label" style="float:left;line-height:20px;margin:7px;">Chọn năm</label>
            		<select style="width: 80px;border-radius: 5px;" class="form-control" name="nam">
            			<?php $i=1990; while ($i<=2080) { ?>
 						<option value="<?php echo $i ?>"><?php echo $i ?></option>
 						<?php $i++; } ?>
            		</select>
            	</div>
            	<div class="col-md-3" style="width: 270px">
            		<label class="control-label" style="float:left;line-height:20px;margin:7px;">Chọn sheet cần inport</label>
            		<select style="width: 80px;border-radius: 5px;" class="form-control" name="sheet">
            			<?php $i=1; while ($i<=10) { ?>
 						<option value="<?php echo $i ?>"><?php echo $i ?></option>
 						<?php $i++; } ?>
            		</select>
            	</div>
            	<div class="col-md-3" style="width: 300px">
					<input type="file" class="form-control" style="border-radius: 5px;" name="file">
            	</div>
            	<div class="col-md-3" style="width: 100px">
					<input type="submit" class="form-control" value="Import" style="border-radius: 5px; background-color: #1ED422; color: white;">
            	</div>
        	</div>
        	</form>
    	</div>

    	<!-- -->

	</div>
</div>