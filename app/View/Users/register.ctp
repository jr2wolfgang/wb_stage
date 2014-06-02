<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Add User'); ?></legend>
	<?php
		$group_type = array('admin', 'user');
		$accout_type = array('individual', 'business', 'services');
		$gender_type = array('M' => 'Male', 'F' => 'Female');

		echo $this->Form->input('group_id');
		echo $this->Form->input('account_type_id');
		
		echo $this->Form->input('firstname');
		echo $this->Form->input('lastname');
		echo $this->Form->input('birthdate');
		echo $this->Form->radio('gender', $gender_type);
		echo $this->Form->input('email');
		echo $this->Form->input('jrr_user',array('label' => 'Username'));
		echo $this->Form->input('jrr_password',array('type' => 'password','label' =>'Password'));
		echo $this->Form->input('re_password', array('type'=>'password', 'label'=>'Re-Enter Password', 'value'=>'', 'autocomplete'=>'off'));
		echo $this->Form->input('is_login');
		echo $this->Form->input('is_active');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Account Types'), array('controller' => 'account_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account Type'), array('controller' => 'account_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
