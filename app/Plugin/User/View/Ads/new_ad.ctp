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
<?php echo $this->Form->create('Ad',array('class'=>'form-horizontal','role'=>'form','url'=>array('controller' => 'ads','action' => 'new_ad'))); ?>

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
			<?php echo $this->Form->input('why_sell',array('label' => false,'div' => 'col-xs-12 col-lg-9 col-sm-5 no-padding-left','id' => 'form-field-desc','class' => 'redactor','contenteditable' => 'true','type' =>'textarea','cols' => '10','row' => '20')); ?>
		</div>
	</div>

	<div class="form-group">
		<label for="form-field-desc" class="col-sm-3 control-label no-padding-right"> Select Images </label>
		<div class="col-sm-9">
			<div class="btn btn-warning" data-toggle="modal" data-target=".bs-example-modal-sm" onclick="return false"><i class="ace-icon fa fa-picture-o bigger-130"></i><span>Open Image Manager</span></div>
			<div class="images_thumb_selected"></div>
			<?php echo $this->Form->input('selected_img',array('label' => false,'type' => 'hidden')); ?>
		</div>
	</div>

	<div class="form-group">
		<label for="form-field-desc" class="col-sm-3 control-label no-padding-right"> Point your Location </label>
		<div class="col-sm-9">
			<div class="btn btn-danger" data-toggle="modal" data-target=".google_map_pop" onclick="return false"><i class="ace-icon fa fa-map-marker bigger-130"></i><span>Select your location for meet-ups</span></div>
			<div id="location"></div>
		</div>
	</div>

	<div class="page-header">
		<h1>
			Create ADS
			<small><i class="ace-icon fa fa-angle-double-right"></i> ADS Price Settings</small>
		</h1>
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
			<?php echo $this->Form->input('discount_price',array('id' => 'form-field-discount','class' => 'col-xs-10 col-sm-5','label' => false,'div' => false)); ?>
		</div>
	</div>
	
	<div class="form-group">
		<label for="form-field-promo" class="col-sm-3 control-label no-padding-right"> Promo Price </label>
		<div class="col-sm-9">
			<?php echo $this->Form->input('promo_price',array('id' => 'form-field-promo','class' => 'col-xs-10 col-sm-5','label' => false,'div' => false)); ?>
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
	
<?php echo $this->Form->end(); ?> 

<div class="clear"></div>

<?php echo $this->element('redactor_settings')?>
<?php echo $this->element('image_manager'); ?>


<?php echo $this->Html->script('User.fancybox/source/jquery.fancybox');  ?>
<?php echo $this->Html->css('User./js/fancybox/source/jquery.fancybox');  ?>
<?php echo $this->Html->script('User.created_ads');  ?>