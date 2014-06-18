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
			<div class="btn btn-warning"  data-rel="tooltip" data-original-title="Select image(s) for your ADS" data-toggle="modal" data-target=".bs-example-modal-sm" onclick="return false"><i class="ace-icon fa fa-picture-o bigger-130"></i><span>Open Image Manager</span></div>
			<div class="clearfix"></div>
			<div class="images_thumb_selected well col-lg-8 hide"><div class="clearfix"></div></div>
			<?php echo $this->Form->input('selected_img',array('label' => false,'type' => 'hidden')); ?>
		</div>
	</div>

	<div class="form-group">
		<label for="form-field-desc" class="col-sm-3 control-label no-padding-right"> Point your Location </label>
		<div class="col-sm-9">
			<div class="btn btn-danger" data-rel="tooltip" data-original-title="Choose respective place for your meetups" data-toggle="modal" data-target=".google_map_pop" onclick="return false"><i class="ace-icon fa fa-map-marker bigger-130"></i><span>Select Location</span></div>
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
			<?php echo $this->Form->input('selling_price',array('id' => 'form-field-price','class' => 'required col-xs-10 col-sm-5','label' => false,'div' => false,'data-rel'=>'tooltip','data-original-title'=>'Put here your selling price for this ADS')); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="form-field-before" class="col-sm-3 control-label no-padding-right"> Before Price </label>
		<div class="col-sm-9">
			<?php echo $this->Form->input('before_price',array('id' => 'form-field-before','class' => 'required col-xs-10 col-sm-5','label' => false,'div' => false,'data-rel'=>'tooltip','data-original-title'=>'Put here your ADS original price')); ?>
		</div>
	</div>

	<div class="form-group">
		<label for="form-field-is-discounted" class="col-sm-3 control-label no-padding-right"> Is Discounted </label>
		<div class="col-sm-9">
			<div class="checkbox is-disc">
				<label>
					<input type="checkbox" id="is-discounted" class="ace" name="form-field-checkbox">
					<span class="lbl"></span>
				</label>
				<span title="" data-content="Check this if you want to add discount on your selling price." data-placement="left" data-trigger="hover" data-rel="popover" class="help-button" data-original-title="Create ADS Guide">?</span>
			</div>
			<select id="form-field-select-1" class="select-disc-type hide col-xs-10 col-sm-5">
				<option value="0">Discount Percent</option>
				<option value="1">Promo Percent</option>
			</select>
			<div class="clearfix"></div>
			<?php echo $this->Form->input('discount_price',array('data-rel'=>'tooltip','min'=>"1",'max'=>"99",'data-original-title'=>'Must enter 1% to 99% only','id' => 'form-field-discount','class' => 'hide percent-limit col-xs-10 col-sm-5','type'=>'text','label' => false,'div' => false)); ?>
			<?php echo $this->Form->input('promo_price',array('data-rel'=>'tooltip','min'=>"1",'max'=>"99",'data-original-title'=>'Must enter 1% to 99% only','id' => 'form-field-promo','class' => 'hide percent-limit col-xs-10 col-sm-5','type'=>'text','label' => false,'div' => false)); ?>
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