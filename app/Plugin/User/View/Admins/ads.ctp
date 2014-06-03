<h4>Post Advertisments</h4>

<div class="container">
	<?php echo $this->Form->create('Ad'); ?>
	<fieldset>
	<?php
		$option = array('1' => 'Yes', '0' => 'No');

		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('why_sell');
		echo $this->Form->input('selling_price');
		echo $this->Form->input('before_price');
		echo $this->Form->input('orig_price');
		echo $this->Form->input('discount_price');
		echo $this->Form->input('promo_price');
		echo $this->Form->input('save_price');
		echo $this->Form->radio('is_published', $option);
	?>
	</fieldset>
	<?php echo $this->Form->end(__('Submit')); ?>
</div>