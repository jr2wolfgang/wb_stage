<?php echo $this->Html->script('User.jquery.uploadfile.min'); ?>
<?php echo $this->Html->script('User.global'); ?>


<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places"></script>
<h4>Edit Post Advertisments</h4>
<?php echo $this->Form->create('Ad',array('controller' => 'ads','action' => 'edit')); ?>
<section class="row">
		<table>
				<tr>
					<td>  
					<?php echo $this->Form->input('id',array('type' => 'hidden','class' => 'required')); ?>
					<?php echo $this->Form->input('name',array('label' => 'Name','class' => 'required')); ?>
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


					<div class="images_thumb_selected">
						<?php if (!empty($this->request->data['Image'][0])) : ?>
							<?php echo $this->Html->image('/'.$this->request->data['Image'][0]['path'].$this->request->data['Image'][0]['name'],array('width' => '100')); ?>

						<?php endif; ?>	
					</div>
				</td>
				</tr>
				<tr>
					<td> <h5>Price</h5> </td><td> &nbsp  </td>
				</tr>
				<tr>
				<td> <?php  echo $this->Form->input('orig_price',array('label' => 'Orig Price','class' => 'required')); ?> </td>
				</tr>
				<tr>
					<td> <?php  echo $this->Form->input('selling_price',array('label' => 'Selling Price','class' => 'required')); ?> </td>
				</tr>
				<tr>
					<td> <?php  echo $this->Form->input('before_price',array('label' => 'Before Price','class' => 'required')); ?> </td>
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
					
				<?php echo $this->Form->input('Map.model',array('value' => 'Ad','type' => 'text')); ?>
				<?php echo $this->Form->input('Map.latitude',array('id' => 'lat','type' => 'text')); ?>
				<?php echo $this->Form->input('Map.longhitude',array('id' => 'lng','type' => 'text')); ?>
				
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



<?php echo $this->element('image_manager'); ?>


<?php echo $this->Html->script('User.fancybox/source/jquery.fancybox');  ?>
<?php echo $this->Html->css('User./js/fancybox/source/jquery.fancybox');  ?>
<?php echo $this->Html->script('User.created_ads');  ?>