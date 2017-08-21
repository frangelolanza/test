<div class="stories form">
<?php echo $this->Form->create('Story'); ?>
	<fieldset>
		<legend><?php echo __('Edit Story'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('status');
		echo $this->Form->input('priority');
		echo $this->Form->input('estimate');
		echo $this->Form->input('record');
		echo $this->Form->input('parent_id');
		echo $this->Form->input('sprint_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Story.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Story.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Stories'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Stories'), array('controller' => 'stories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parent Story'), array('controller' => 'stories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sprints'), array('controller' => 'sprints', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sprint'), array('controller' => 'sprints', 'action' => 'add')); ?> </li>
	</ul>
</div>
