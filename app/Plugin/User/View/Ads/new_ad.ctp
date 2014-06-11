<?php echo $this->Html->script('User.jquery.uploadfile.min'); ?>
<?php echo $this->Html->script('User.global'); ?>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places"></script>
<h4>Post Advertisments</h4>
<?php echo $this->Form->create('Ad',array('controller' => 'ads','action' => 'new_ad')); ?>
<section class="row">
		<table>
				<tr>
					<td>  
					<?php echo $this->Form->input('name',array('label' => 'Name')); ?>
					</td>
				</tr>
				<tr>
					<td> <label>Description</label>
						<?php echo $this->Form->input('description',array('label' => false,'class' => 'redactor','contenteditable' => 'true','type' =>'textarea','cols' => '50','row' => '50')); ?>
						</div>
					</td>
					
				</tr>
				<tr>
					<td> 
					<?php echo $this->Form->input('why_sell',array('type' =>'textarea','class' => 'redactor',
					'label' => 'Why Im Selling this'));?>
					</td>
				</tr>
				<tr>
				<td> 
				
					<label>Images</label>
					<div class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm" onclick="return false">Open Image Manager</div>

					<?php  echo $this->Form->input('selected_img',array('label' => false,'type' => 'hidden')); ?>


						<div class="images_thumb_selected"></div>
				</td>
				</tr>
				<tr>
					<td> <h5>Price</h5> </td><td> &nbsp  </td>
				</tr>
				<tr>
					<td> <?php  echo $this->Form->input('orig_price',array('label' => 'Orig Price')); ?> </td>
				</tr>
				<tr>
					<td> <?php  echo $this->Form->input('selling_price',array('label' => 'Selling Price')); ?> </td>
				</tr>
				<tr>
					<td> <?php  echo $this->Form->input('before_price',array('label' => 'Before Price')); ?> </td>
				</tr>
				<tr>
					<td> <?php  echo $this->Form->input('discount_price',array('label' => 'Discount Price','class' => 'disabled_field discount_price')); ?> </td>
				</tr>
				<tr>
					<td> <?php  echo $this->Form->input('promo_price',array('label' => 'Promo Price','class' => 'disabled_field promo_price')); ?> </td>
				</tr>

					
				<tr >
					<td>
						
						<button class="btn btn-primary" id="add_map"  data-toggle="modal" data-target=".google_map_pop" onclick="return false">Add Google Map ?</button>
						<!-- MAPS SEARCH & DRAGGABLE -->

						

					</td>

				</tr>

				<tr>
					<td colspan="2"> <?php echo $this->Form->input('location',array('type' => 'hidden','class' => "locationField")); ?> <button id="submit" > Save Ads</button> </td>
				</tr>

				
		</table>

	
<div class="modal fade google_map_pop" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="map_container" style="display:block" >
			
				<?php echo $this->Html->script('User.map'); ?>

				<input id="pac-input" class="controls" type="text" placeholder="Search Box">

				<div id="map-canvas" style="width:100%; height:600px;"></div>
					
				<?php echo $this->Form->input('Map.model',array('value' => 'Ad','type' => 'hidden')); ?>
				<?php echo $this->Form->input('Map.latitude',array('id' => 'lat','type' => 'hidden')); ?>
				<?php echo $this->Form->input('Map.longhitude',array('id' => 'lng','type' => 'hidden')); ?>
				
				<button id="close" onclick="return false">Close </button>
				<!--ENDS-->
			</div>
		</div>
	</div>
</div>
		<?php echo $this->Form->end(); ?>
</section> 
	
<!-- Small modal -->
<div class="clear"></div>



<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
   		
   		<div class="upload_images">Upload Images</div>
		<div id="mulitplefileuploader">Upload</div>
				
		<button id="use_image" onclick="return false">Use Images </button>
			<table>
			<tr >
			<th> <input type="checkbox" class="check_all"></th>
			<th> Image </th>
			<th> ext </th>
			</tr>
			</table>
		<div class="images_append">
				<table class="main_tr">
				
				<?php foreach ($images['Image'] as $key => $value) : ?>
						<tr>
							<td> 
							<input type="checkbox" class="check_item" name="data[Ad][images][]" value="<?php echo $value['id']; ?>">
							</td>
							<td> <?php echo $this->Html->image('/'.$value['path'].$value['name'],array('width' => '100')); ?></td>
							<td> <?php echo $value['extension'] ?></td>
						</tr>
				<?php endforeach;  ?>

				</table>
		</div>
    </div>
  </div>
</div>



<script>
$(document).ready(function() {


$('.redactor').redactor({
	/* imageUpload: '/tagroom_cake/admins/redactor_upload_image',
	//fileUpload: 'redactor/demo/scripts/file_upload.php',
	imageGetJson: '/tagroom_cake/js/json_data/new_data.json',
    focus: true,
    plugins: ['fontfamily'] */
});  
                
$('#add_map').click(function(){


	if ($('.map_container').append('<input id="pac-input" class="controls" type="text" placeholder="Search Box">')) {

		setTimeout(function(){

		initialize();


	},1000); 

	}

	
});
$('#close').click(function() {
	$('.google_map_pop').modal('hide');
 }); 

$('#use_image').click(function(){
		$('.bs-example-modal-sm ').modal('hide');

		$('#AdSelectedImg').empty();

		var imgArray = [];

		$('.images_append .check_item:checked').each(function(){

				var appendImage = "<div class='selected_img'>";
					appendImage += "<img src="+$(this).parent().next().find('img').attr('src')+">";
					appendImage += "</div>";
				imgArray.push($(this).val());		
			$('.images_thumb_selected').append( appendImage);
		
		}); 

		$('#AdSelectedImg').val(imgArray);	
});		

$('.check_all').click(function () {
$('input:checkbox').prop('checked', this.checked);
});

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
			var html_table = '<tr><td><input type="checkbox" class="check_item" name="data[Ad][images][]" value="'+item.key+'"></td><td><img src="'+image_path+item.file+'" width="100" ></td>';
				html_table += '<td>'+item.extension+'</td></tr>';

			$('.main_tr').append(html_table);
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
