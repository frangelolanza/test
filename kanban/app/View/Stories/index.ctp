<div class="stories index">
	<h2><?php echo __('Stories'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('priority'); ?></th>
			<th><?php echo $this->Paginator->sort('estimate'); ?></th>
			<th><?php echo $this->Paginator->sort('record'); ?></th>
			<th><?php echo $this->Paginator->sort('parent_id'); ?></th>
			<th><?php echo $this->Paginator->sort('sprint_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($stories as $story): ?>
	<tr>
		<td><?php echo h($story['Story']['id']); ?>&nbsp;</td>
		<td><?php echo h($story['Story']['created']); ?>&nbsp;</td>
		<td><?php echo h($story['Story']['modified']); ?>&nbsp;</td>
		<td><?php echo h($story['Story']['name']); ?>&nbsp;</td>
		<td><?php echo h($story['Story']['description']); ?>&nbsp;</td>
		<td><?php echo h($story['Story']['status']); ?>&nbsp;</td>
		<td><?php echo h($story['Story']['priority']); ?>&nbsp;</td>
		<td><?php echo h($story['Story']['estimate']); ?>&nbsp;</td>
		<td><?php echo h($story['Story']['record']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($story['ParentStory']['name'], array('controller' => 'stories', 'action' => 'view', $story['ParentStory']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($story['Sprint']['name'], array('controller' => 'sprints', 'action' => 'view', $story['Sprint']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $story['Story']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $story['Story']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $story['Story']['id']), null, __('Are you sure you want to delete # %s?', $story['Story']['id'])); ?>
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
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Story'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Stories'), array('controller' => 'stories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parent Story'), array('controller' => 'stories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sprints'), array('controller' => 'sprints', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sprint'), array('controller' => 'sprints', 'action' => 'add')); ?> </li>
	</ul>
</div>
