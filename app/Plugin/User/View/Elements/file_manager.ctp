
<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
   		<div id="mulitplefileuploader">Add Files</div>

   		<div class="search_input">
   		<input type="search" class="search_files"/> <button id="use_image" onclick="return false">Search</button>
   		</div>
		<div class="images_append">
				<table class="main_tr">
					<tr >
					<th> <input type="checkbox" class="check_all"></th>
					<th> Image </th>
					<th> ext </th>
					</tr>
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

		<button id="use_image" onclick="return false">Use Images </button>
		
		


    </div>
  </div>
</div>
