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
					<div contenteditable="true" id="editor1" class="wysiwyg-editor"></div>
					</tr>
				<tr>
					<td> Why Im Selling this </td><td> <?php echo $this->Form->input('why_sell',array('label' => false));?> </td>
				</tr>
				<tr>
					<td> Images </td><td> <div class="choose_images"> Open Image Manager</div> </td>
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
	