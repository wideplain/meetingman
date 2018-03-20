<div class="members view">
<h2><?php echo __('Member'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($member['Member']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($member['Member']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($member['Member']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Delete Flg'); ?></dt>
		<dd>
			<?php echo h($member['Member']['delete_flg']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Member'), array('action' => 'edit', $member['Member']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Member'), array('action' => 'delete', $member['Member']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $member['Member']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Members'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Member'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Meetings Menbers'), array('controller' => 'meetings_menbers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Meetings Menber'), array('controller' => 'meetings_menbers', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Meetings Menbers'); ?></h3>
	<?php if (!empty($member['MeetingsMenber'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Meeting Id'); ?></th>
		<th><?php echo __('Member Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($member['MeetingsMenber'] as $meetingsMenber): ?>
		<tr>
			<td><?php echo $meetingsMenber['id']; ?></td>
			<td><?php echo $meetingsMenber['meeting_id']; ?></td>
			<td><?php echo $meetingsMenber['member_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'meetings_menbers', 'action' => 'view', $meetingsMenber['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'meetings_menbers', 'action' => 'edit', $meetingsMenber['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'meetings_menbers', 'action' => 'delete', $meetingsMenber['id']), array('confirm' => __('Are you sure you want to delete # %s?', $meetingsMenber['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Meetings Menber'), array('controller' => 'meetings_menbers', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
