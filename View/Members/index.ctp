<div class="members index">
	<h2><?php echo __('Members'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('delete_flg'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($members as $member): ?>
	<tr>
		<td><?php echo h($member['Member']['id']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['name']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['email']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['delete_flg']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $member['Member']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $member['Member']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $member['Member']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $member['Member']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
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
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Member'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Meetings Menbers'), array('controller' => 'meetings_menbers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Meetings Menber'), array('controller' => 'meetings_menbers', 'action' => 'add')); ?> </li>
	</ul>
</div>
