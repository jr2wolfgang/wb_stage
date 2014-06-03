<div class="row">


	<div class="large-12 column">
		<h2><?php echo __('Registration Type'); ?></h2>
		<div class="account_type">

		<?php foreach ($accountTypes as $key => $value) : ?>
				
			<?php echo $this->Form->postLink(__($value), array(
			'action' => 'get_account_type',$key), array(
			'class' => 'icon-selects'
			), __('Select %s?', $value)); ?>

		<?php endforeach; ?>	
		</div>
	</div>
</div>

<script type="text/javascript">
	$(function(){


			/* $('.account_type').click(function(){
					
					$('#UserAccountType').val($(this).data('id'));
			});

			$('.account_type').dblclick(function(){

					

			}); */
	});
</script>