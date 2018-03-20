<div class="meetingsMenbers view">
<h2><?php echo __('Meetings Menber'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($meetingsMenber['MeetingsMenber']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meeting'); ?></dt>
		<dd>
			<?php echo $this->Html->link($meetingsMenber['Meeting']['title'], array('controller' => 'meetings', 'action' => 'view', $meetingsMenber['Meeting']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Member'); ?></dt>
		<dd>
			<?php echo $this->Html->link($meetingsMenber['Member']['name'], array('controller' => 'members', 'action' => 'view', $meetingsMenber['Member']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Meetings Menber'), array('action' => 'edit', $meetingsMenber['MeetingsMenber']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Meetings Menber'), array('action' => 'delete', $meetingsMenber['MeetingsMenber']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $meetingsMenber['MeetingsMenber']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Meetings Menbers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Meetings Menber'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Meetings'), array('controller' => 'meetings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Meeting'), array('controller' => 'meetings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Members'), array('controller' => 'members', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Member'), array('controller' => 'members', 'action' => 'add')); ?> </li>
	</ul>
</div>
