<?php echo $this->Html->script('User.jquery.uploadfile.min'); ?>
<?php echo $this->Html->script('User.global'); ?>


<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places"></script>
<div class="page-header">
	<h1>
		Create ADS
		<small>
			<i class="ace-icon fa fa-angle-double-right"></i>
			Basic ADS Information
		</small>
	</h1>
</div>
<div class="clear"></div>
<?php echo $this->Form->create('Ad',array('class'=>'form-horizontal','role'=>'form','url'=>array('controller' => 'ads','action' => 'edit'))); ?>
	<?php echo $this->Form->input('id',array('type' => 'hidden')); ?>
	<div class="form-group">
		<label for="form-field-name" class="col-sm-3 control-label no-padding-right"> Item Name </label>
		<div class="col-sm-9">
			<?php echo $this->Form->input('name',array('id' => 'form-field-name','class' => 'required col-xs-10 col-sm-5','label' => false,'div' => false)); ?>
		</div>
	</div>

	<div class="form-group">
		<label for="form-field-desc" class="col-sm-3 control-label no-padding-right"> Description </label>
		<div class="col-sm-9">
			<?php echo $this->Form->input('description',array('label' => false,'div' => 'col-xs-12 col-lg-9 col-sm-5 no-padding-left','id' => 'form-field-desc','class' => 'redactor','contenteditable' => 'true','type' =>'textarea','cols' => '30','row' => '50')); ?>
		</div>
	</div>

	<div class="form-group">
		<label for="form-field-desc" class="col-sm-3 control-label no-padding-right"> Why Im Selling this </label>
		<div class="col-sm-9">
			<?php echo $this->Form->input('why_sell',array('label' => false,'div' => 'col-xs-12 col-lg-9 col-sm-5 no-padding-left','id' => 'form-field-desc','class' => 'redactor','contenteditable' => 'true','type' =>'textarea','cols' => '30','row' => '50')); ?>
		</div>
	</div>

	<div class="form-group">
		<label for="form-field-desc" class="col-sm-3 control-label no-padding-right"> Select Images </label>
		<div class="col-sm-9">
			<div class="btn btn-warning" data-toggle="modal" data-target=".bs-example-modal-sm" onclick="return false"><i class="ace-icon fa fa-picture-o bigger-130"></i><span>Open Image Manager</span></div>
			<div class="images_thumb_selected">
			<?php
			$DataImage = array();
			 foreach ($this->request->data['Image'] as $key => $imageList) :
			if ($imageList['model'] == 'Ad') :
				$DataImage[] = $imageList['id'];
			 ?>		
			<div class="selected_img">
				<i class="fa fa-times-circle-o remove_image" data-id="<?php echo $imageList['id']?>"></i>
				<a class="fancybox" href="<?php echo Configure::read('folder_name').$imageList['path'].$imageList['name'] ?>" data-fancybox-group="gallery-selected">
				<div class="img_prev" style="background:url(<?php echo Configure::read('folder_name').$imageList['path'].$imageList['name'] ?>);background-size:cover;"></div>
				</a>
				<div class="select_primary">
					<input type="radio" value="<?php echo $imageList['id']?>" name="data[PrimaryImage]" <?php echo ($imageList['is_primary'] == 1) ? 'checked' : ''; ?>>
							Select As Primary
							</div>
						</div>
			<?php 
			endif;
			endforeach; $ImageValue = implode(',',$DataImage);  ?>
			</div>
			<?php echo $this->Form->input('selected_img',array('label' => false,'type' => 'hidden','value' => $ImageValue)); ?>
		</div>
	</div>

	<div class="form-group">
		<label for="form-field-desc" class="col-sm-3 control-label no-padding-right"> Point your Location </label>
		<div class="col-sm-9">
			<div class="btn btn-danger" data-toggle="modal" data-target=".google_map_pop" onclick="return false"><i class="ace-icon fa fa-map-marker bigger-130"></i><span>Select your location for meet-ups</span></div>
		</div>
	</div>

	<div class="page-header">
		<h1>
			Create ADS
			<small><i class="ace-icon fa fa-angle-double-right"></i> ADS Price Settings</small>
		</h1>
	</div>
	
	<div class="form-group">
		<label for="form-field-orig" class="col-sm-3 control-label no-padding-right"> Original Price </label>
		<div class="col-sm-9">
			<?php echo $this->Form->input('orig_price',array('id' => 'form-field-orig','class' => 'required col-xs-10 col-sm-5','label' => false,'div' => false)); ?>
		</div>
	</div>

	<div class="form-group">
		<label for="form-field-price" class="col-sm-3 control-label no-padding-right"> Selling Price </label>
		<div class="col-sm-9">
			<?php echo $this->Form->input('selling_price',array('id' => 'form-field-price','class' => 'required col-xs-10 col-sm-5','label' => false,'div' => false)); ?>
		</div>
	</div>
	
	<div class="form-group">
		<label for="form-field-before" class="col-sm-3 control-label no-padding-right"> Before Price </label>
		<div class="col-sm-9">
			<?php echo $this->Form->input('before_price',array('id' => 'form-field-before','class' => 'required col-xs-10 col-sm-5','label' => false,'div' => false)); ?>
		</div>
	</div>

	<div class="form-group">
		<label for="form-field-discount" class="col-sm-3 control-label no-padding-right"> Discount Price </label>
		<div class="col-sm-9">
			<?php echo $this->Form->input('discount_price',array('id' => 'form-field-discount','class' => 'required col-xs-10 col-sm-5','label' => false,'div' => false)); ?>
		</div>
	</div>
	
	<div class="form-group">
		<label for="form-field-promo" class="col-sm-3 control-label no-padding-right"> Promo Price </label>
		<div class="col-sm-9">
			<?php echo $this->Form->input('promo_price',array('id' => 'form-field-promo','class' => 'required col-xs-10 col-sm-5','label' => false,'div' => false)); ?>
		</div>
	</div>

	<div class="clearfix form-actions">
		<div class="col-md-offset-3 col-md-9">
			<button type="submit" id="submit" class="btn btn-info">
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

	<?php echo $this->element('maps_popup'); ?>
	
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
	
<!-- Small modal -->
<div class="clear"></div>



<?php echo $this->element('image_manager'); ?>


<?php echo $this->Html->script('User.fancybox/source/jquery.fancybox');  ?>
<?php echo $this->Html->css('User./js/fancybox/source/jquery.fancybox');  ?>
<?php echo $this->Html->script('User.created_ads');  ?>