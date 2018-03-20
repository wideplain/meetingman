<div class="meetingsMenbers form">
<?php echo $this->Form->create('MeetingsMenber'); ?>
	<fieldset>
		<legend><?php echo __('Edit Meetings Menber'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('meeting_id');
		echo $this->Form->input('member_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('MeetingsMenber.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('MeetingsMenber.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Meetings Menbers'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Meetings'), array('controller' => 'meetings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Meeting'), array('controller' => 'meetings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Members'), array('controller' => 'members', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Member'), array('controller' => 'members', 'action' => 'add')); ?> </li>
	</ul>
</div>
