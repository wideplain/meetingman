<div class="meetingsMenbers index">
	<h2><?php echo __('Meetings Menbers'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('meeting_id'); ?></th>
			<th><?php echo $this->Paginator->sort('member_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($meetingsMenbers as $meetingsMenber): ?>
	<tr>
		<td><?php echo h($meetingsMenber['MeetingsMenber']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($meetingsMenber['Meeting']['title'], array('controller' => 'meetings', 'action' => 'view', $meetingsMenber['Meeting']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($meetingsMenber['Member']['name'], array('controller' => 'members', 'action' => 'view', $meetingsMenber['Member']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $meetingsMenber['MeetingsMenber']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $meetingsMenber['MeetingsMenber']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $meetingsMenber['MeetingsMenber']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $meetingsMenber['MeetingsMenber']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Meetings Menber'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Meetings'), array('controller' => 'meetings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Meeting'), array('controller' => 'meetings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Members'), array('controller' => 'members', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Member'), array('controller' => 'members', 'action' => 'add')); ?> </li>
	</ul>
</div>
