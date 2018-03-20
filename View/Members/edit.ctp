<div class="members form">
<?php echo $this->Form->create('Member'); ?>
	<fieldset>
		<legend><?php echo __('Edit Member'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('email');
		echo $this->Form->input('delete_flg');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Member.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Member.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Members'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Meetings Menbers'), array('controller' => 'meetings_menbers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Meetings Menber'), array('controller' => 'meetings_menbers', 'action' => 'add')); ?> </li>
	</ul>
</div>
