<div class="stories view">
<h2><?php  echo __('Story'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($story['Story']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($story['Story']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($story['Story']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($story['Story']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($story['Story']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($story['Story']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Priority'); ?></dt>
		<dd>
			<?php echo h($story['Story']['priority']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estimate'); ?></dt>
		<dd>
			<?php echo h($story['Story']['estimate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Record'); ?></dt>
		<dd>
			<?php echo h($story['Story']['record']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Parent Story'); ?></dt>
		<dd>
			<?php echo $this->Html->link($story['ParentStory']['name'], array('controller' => 'stories', 'action' => 'view', $story['ParentStory']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sprint'); ?></dt>
		<dd>
			<?php echo $this->Html->link($story['Sprint']['name'], array('controller' => 'sprints', 'action' => 'view', $story['Sprint']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Story'), array('action' => 'edit', $story['Story']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Story'), array('action' => 'delete', $story['Story']['id']), null, __('Are you sure you want to delete # %s?', $story['Story']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Stories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Story'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stories'), array('controller' => 'stories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parent Story'), array('controller' => 'stories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sprints'), array('controller' => 'sprints', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sprint'), array('controller' => 'sprints', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Stories'); ?></h3>
	<?php if (!empty($story['ChildStory'])): ?>
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
		foreach ($story['ChildStory'] as $childStory): ?>
		<tr>
			<td><?php echo $childStory['id']; ?></td>
			<td><?php echo $childStory['created']; ?></td>
			<td><?php echo $childStory['modified']; ?></td>
			<td><?php echo $childStory['name']; ?></td>
			<td><?php echo $childStory['description']; ?></td>
			<td><?php echo $childStory['status']; ?></td>
			<td><?php echo $childStory['priority']; ?></td>
			<td><?php echo $childStory['estimate']; ?></td>
			<td><?php echo $childStory['record']; ?></td>
			<td><?php echo $childStory['parent_id']; ?></td>
			<td><?php echo $childStory['sprint_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'stories', 'action' => 'view', $childStory['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'stories', 'action' => 'edit', $childStory['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'stories', 'action' => 'delete', $childStory['id']), null, __('Are you sure you want to delete # %s?', $childStory['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Child Story'), array('controller' => 'stories', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
