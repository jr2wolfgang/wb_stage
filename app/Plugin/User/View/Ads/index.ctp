
<div class="users index">
<h2> MY ADS </h2>
<?php echo $this->Html->link('New Ads',array('controller' => 'ads','action' => 'new_ad')); ?>
	<br>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('ads'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($ads as $adslist): ?>
	<tr>
		
		<td>
			<?php echo $this->Html->link($adslist['Ad']['name'], array('controller' => 'ads', 'action' => 'view',
			 $adslist['Ad']['id'])); ?>
		</td>
		<td>
			<?php echo $adslist['Ad']['created']?>
		</td>
		<td>
			<?php echo $adslist['Ad']['modified']?>
		</td>
		
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $adslist['Ad']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $adslist['Ad']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $adslist['Ad']['id']), array(), __('Are you sure you want to delete # %s?', $adslist['Ad']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>