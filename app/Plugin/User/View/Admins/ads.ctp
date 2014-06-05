<?php echo $this->Html->script('User.jquery.uploadfile.min'); ?>

<div class="page-header">
	<h1>
		Post Advertisment
		<small>
			<i class="ace-icon fa fa-angle-double-right"></i>
			In here you can create ads easily and fast
		</small>
	</h1>
</div>
<?php echo $this->Form->create('User',array('class'=>'form-horizontal','role'=>'form')); ?>

	<div class="form-group">
		<label for="form-field-1" class="col-sm-1 control-label no-padding-right"> Title </label>
		<div class="col-sm-9">
			<input type="text" class="col-xs-10 col-sm-5" placeholder="Title" id="form-field-1">
		</div>
	</div>

	<div class="form-group">
		<label for="form-field-1" class="col-sm-1 control-label no-padding-right"> Description </label>
		<div class="col-sm-9">
			<?php echo $this->Form->input('Description',array('label' => false,'id' => 'editor1','contenteditable' => 'true' )); ?>
			<div contenteditable="true" id="editor1" class="wysiwyg-editor"></div>
		</div>
	</div>

	<div class="form-group">
		<label for="form-field-1" class="col-sm-1 control-label no-padding-right"> Why Im Selling this </label>
		<div class="col-sm-9">
			<input type="text" class="col-xs-10 col-sm-5" placeholder="Title" id="form-field-1">
		</div>
	</div>

	<div class="form-group">
		<label for="form-field-1" class="col-sm-1 control-label no-padding-right"> Images </label>
		<div class="col-sm-9">
			<input type="text" class="col-xs-10 col-sm-5" placeholder="Title" id="form-field-1">
		</div>
	</div>

	<div class="form-group">
		<label for="form-field-1" class="col-sm-1 control-label no-padding-right"> Orig Price </label>
		<div class="col-sm-9">
			<input type="text" class="col-xs-10 col-sm-5" placeholder="Title" id="form-field-1">
		</div>
	</div>

	<div class="form-group">
		<label for="form-field-1" class="col-sm-1 control-label no-padding-right"> Before Price </label>
		<div class="col-sm-9">
			<input type="text" class="col-xs-10 col-sm-5" placeholder="Title" id="form-field-1">
		</div>
	</div>

	<div class="form-group">
		<label for="form-field-1" class="col-sm-1 control-label no-padding-right"> Discount Price </label>
		<div class="col-sm-9">
			<input type="text" class="col-xs-10 col-sm-5" placeholder="Title" id="form-field-1">
		</div>
	</div>

	<div class="form-group">
		<label for="form-field-1" class="col-sm-1 control-label no-padding-right"> Title </label>
		<div class="col-sm-9">
			<input type="text" class="col-xs-10 col-sm-5" placeholder="Title" id="form-field-1">
		</div>
	</div>

	<div class="form-group">
		<label for="form-field-1" class="col-sm-1 control-label no-padding-right"> Promo Price </label>
		<div class="col-sm-9">
			<input type="text" class="col-xs-10 col-sm-5" placeholder="Title" id="form-field-1">
		</div>
	</div>

	<div class="clearfix form-actions">
		<div class="col-md-offset-3 col-md-9">
			<button type="button" class="btn btn-info">
				<i class="ace-icon fa fa-check bigger-110"></i>
				Submit
			</button>

			&nbsp; &nbsp; &nbsp;
			<button type="reset" class="btn">
				<i class="ace-icon fa fa-undo bigger-110"></i>
				Reset
			</button>
		</div>
	</div>



</form>




<script>
$(document).ready(function()
{

var image_path = "/user/img/uploads/";
var settings = {
	url: "upload_multiple",
	method: "POST",
	allowedTypes:"jpg,png,gif,doc,pdf,zip",
	fileName: "myfile",
	multiple: true,
	onSuccess:function(files,data,xhr)
	{
			
			console.log(files);
			console.log(data);
	
			$.each(data, function(name, obj) {


					var html = '<tr><td><input type="checkbox" class="checks"></td><td><img src="'+image_path+obj+'" width="200"></td><td></td></tr>';
					$('.main_tr').append(html);
			});

		
	},
	onError: function(files,status,errMsg)
	{		
		$("#status").html("<font color='red'>Upload is Failed</font>");
	}
}
$("#mulitplefileuploader").uploadFile(settings);

});
</script>
