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

					<div contenteditable="true" id="editor1" class="wysiwyg-editor">
						
						<?php //echo $this->Form->input('Description',array('label' => false,'id' => 'editor1','contenteditable' => 'true' )); ?>
					</div>

					  </td>
					
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
<div class="clear"></div>


<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<?php echo $this->Html->script('User.map'); ?>

Click on the map to find a street
<div id="map_canvas" style="width:400px;height:300px;"></div>


<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
   		
   		<div class="upload_images">Upload Images</div>
		<div id="mulitplefileuploader">Upload</div>
				
		<button id="use_image" onclick="return false">Use Images </button>
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

var image_path = "/wb_stage/user/img/uploads/";
var settings = {
	url: "upload_multiple",
	method: "POST",
	allowedTypes:"jpg,png,gif,doc,pdf,zip",
	fileName: "myfile",
	multiple: true,
	onSuccess:function(files,data,xhr)
	{	


	var imageDetails = [jQuery.parseJSON(data)];


			console.log(imageDetails)
		for(var i =0;i <= imageDetails.length-1;i++)
		{
			var item = imageDetails[i];
			var html_table = '<tr><td><input type="checkbox" name="images[]" value="'+i+'"></td><td><img src="'+image_path+item.file+'" width="100" ></td>';
				html_table += '<td>'+item.extension+'</td></tr>';

			$('.main_tr').after(html_table);
		}
			
			//console.log(data);
	

		
	},
	onError: function(files,status,errMsg)
	{		
		$("#status").html("<font color='red'>Upload is Failed</font>");
	}
}
$("#mulitplefileuploader").uploadFile(settings);

});
</script>
