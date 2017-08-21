<div class="sprints index">
	<h2><?php echo __('Sprints'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('date_from'); ?></th>
			<th><?php echo $this->Paginator->sort('date_to'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($sprints as $sprint): ?>
	<tr>
		<td><?php echo h($sprint['Sprint']['id']); ?>&nbsp;</td>
		<td><?php echo h($sprint['Sprint']['created']); ?>&nbsp;</td>
		<td><?php echo h($sprint['Sprint']['modified']); ?>&nbsp;</td>
		<td><?php echo h($sprint['Sprint']['name']); ?>&nbsp;</td>
		<td><?php echo h($sprint['Sprint']['description']); ?>&nbsp;</td>
		<td><?php echo h($sprint['Sprint']['status']); ?>&nbsp;</td>
		<td><?php echo h($sprint['Sprint']['date_from']); ?>&nbsp;</td>
		<td><?php echo h($sprint['Sprint']['date_to']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $sprint['Sprint']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $sprint['Sprint']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $sprint['Sprint']['id']), null, __('Are you sure you want to delete # %s?', $sprint['Sprint']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Sprint'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Stories'), array('controller' => 'stories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Story'), array('controller' => 'stories', 'action' => 'add')); ?> </li>
	</ul>
</div>
