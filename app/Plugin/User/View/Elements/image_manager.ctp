<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">

    <i class="fa fa-times close_modal"></i>
   		
   		<div class="upload_images">Upload Images</div>
		<div id="mulitplefileuploader">Upload</div>
				
		
			<table>
			<tr >
			<td class="check_box"> <input type="checkbox" class="check_all"></td>
			<td class="images_td"> Image </td>
			<td class="img_name"> filename </td>
			<td> ext </td>
			</tr>
			</table>
		<div class="images_append">
				<table class="main_tr">
				
				<?php
				if (!empty($images['Image'])) : 
				foreach ($images['Image'] as $key => $value) : ?>
						<tr>
							<td> 
							<input type="checkbox" class="check_item" name="data[Ad][images][]" value="<?php echo $value['id']; ?>">
							</td>
							<td class="image_cont">
							<a class="fancybox" href="<?php echo Configure::read('folder_name').$value["path"].$value["name"]; ?>" data-fancybox-group="gallery" title="<?php echo $value['name']; ?>">
							 <?php echo $this->Html->image('/'.$value['path'].$value['name'],array('width' => '100')); ?>
							 </a>
							 </td>
							<td class="image_cont"> <?php echo $value['name']?></td>
							<td> <?php echo $value['extension'] ?></td>
						</tr>
				<?php  endforeach;
						endif;
				 ?>

				</table>
		</div>
		<div class="image_controls">

		<button id="use_image" onclick="return false">Use Images </button>

		<button id="delete_images" class="" onclick="return false">Delete </button>
		</div>


    </div>
  </div>
</div>