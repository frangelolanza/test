<div class="sprints view">
<h2><?php  echo __('Sprint'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($sprint['Sprint']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($sprint['Sprint']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($sprint['Sprint']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($sprint['Sprint']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($sprint['Sprint']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($sprint['Sprint']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date From'); ?></dt>
		<dd>
			<?php echo h($sprint['Sprint']['date_from']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date To'); ?></dt>
		<dd>
			<?php echo h($sprint['Sprint']['date_to']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Sprint'), array('action' => 'edit', $sprint['Sprint']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Sprint'), array('action' => 'delete', $sprint['Sprint']['id']), null, __('Are you sure you want to delete # %s?', $sprint['Sprint']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Sprints'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sprint'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stories'), array('controller' => 'stories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Story'), array('controller' => 'stories', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Stories'); ?></h3>
	<?php if (!empty($sprint['Story'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Priority'); ?></th>
		<th><?php echo __('Estimate'); ?></th>
		<th><?php echo __('Record'); ?></th>
		<th><?php echo __('Parent Id'); ?></th>
		<th><?php echo __('Sprint Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($sprint['Story'] as $story): ?>
		<tr>
			<td><?php echo $story['id']; ?></td>
			<td><?php echo $story['created']; ?></td>
			<td><?php echo $story['modified']; ?></td>
			<td><?php echo $story['name']; ?></td>
			<td><?php echo $story['description']; ?></td>
			<td><?php echo $story['status']; ?></td>
			<td><?php echo $story['priority']; ?></td>
			<td><?php echo $story['estimate']; ?></td>
			<td><?php echo $story['record']; ?></td>
			<td><?php echo $story['parent_id']; ?></td>
			<td><?php echo $story['sprint_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'stories', 'action' => 'view', $story['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'stories', 'action' => 'edit', $story['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'stories', 'action' => 'delete', $story['id']), null, __('Are you sure you want to delete # %s?', $story['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Story'), array('controller' => 'stories', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
