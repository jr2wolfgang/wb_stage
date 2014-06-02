<div class="users view">
<h2><?php echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Group'); ?></dt>
		<dd>
			<?php echo $this->Html->link($user['Group']['name'], array('controller' => 'groups', 'action' => 'view', $user['Group']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Account Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($user['AccountType']['name'], array('controller' => 'account_types', 'action' => 'view', $user['AccountType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Firstname'); ?></dt>
		<dd>
			<?php echo h($user['User']['firstname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lastname'); ?></dt>
		<dd>
			<?php echo h($user['User']['lastname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Birthdate'); ?></dt>
		<dd>
			<?php echo h($user['User']['birthdate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gender'); ?></dt>
		<dd>
			<?php echo h($user['User']['gender']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Jrr User'); ?></dt>
		<dd>
			<?php echo h($user['User']['jrr_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Jrr Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['jrr_password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Default Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['default_password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rxt'); ?></dt>
		<dd>
			<?php echo h($user['User']['rxt']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Login'); ?></dt>
		<dd>
			<?php echo h($user['User']['is_login']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Active'); ?></dt>
		<dd>
			<?php echo h($user['User']['is_active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($user['User']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), array(), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Account Types'), array('controller' => 'account_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account Type'), array('controller' => 'account_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
