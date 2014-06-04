<?php echo $this->Html->script('User.jquery.uploadfile.min'); ?>
<h4>Post Advertisments</h4>
<?php echo $this->Form->create('User'); ?>
<section class="container">
		<table>
				<tr>
					<td> Name </td><td> <?php  echo $this->Form->input('name',array('label' => false)); ?> </td>
				</tr>
				<tr>
					<td> Description </td><td>
					 <?php echo $this->Form->input('Description',array('label' => false,'id' => 'editor1','contenteditable' => 'true' )); ?> </td>
					
					</tr>
				<tr>
					<td> Why Im Selling this </td><td> <?php echo $this->Form->input('why_sell',array('label' => false));?> </td>
				</tr>
				<tr>
					<td> Images </td><td> 
				

					<button class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm" onclick="return false">Open Image Manager</button>
					
					 </td>
				</tr>
				<tr>
					<td> <h5>Price</h5> </td><td> &nbsp  </td>
				</tr>
				<tr>
					<td> Orig Price </td><td> <?php  echo $this->Form->input('selling_price',array('label' => false)); ?> </td>
				</tr>
				<tr>
					<td> Old Price </td><td> <?php  echo $this->Form->input('before_price',array('label' => false)); ?> </td>
				</tr>
				<tr>
					<td> Before Price </td><td> <?php  echo $this->Form->input('before_price',array('label' => false)); ?> </td>
				</tr>
				<tr>
					<td> Discount Price </td><td> <?php  echo $this->Form->input('discount_price',array('label' => false)); ?> </td>
				</tr>
				<tr>
					<td> Promo Price </td><td> <?php  echo $this->Form->input('promo_price',array('label' => false)); ?> </td>
				</tr>

				<tr>
					<td> &nbsp </td><td> <?php echo $this->Form->end(__('Submit')); ?> </td>
				</tr>

				
		</table>
<?php echo $this->Form->end(); ?>
</section> 
	
<!-- Small modal -->
<button class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Small modal</button>

<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
   		
   		<div class="upload_images">Upload Images</div>
		<div id="mulitplefileuploader">Upload</div>
		<div id="status"></div>
		<div class="images_append">
				<table>
					<tr class="main_tr">
						<th> <input type="checkbox" class="check_all"></th>
						<th> Image </th>
						<th> ext </th>
						
					</tr>


				</table>
		</div>
    </div>
  </div>
</div>

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