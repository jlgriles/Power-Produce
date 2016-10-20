<h3><?php echo __('Tasks'); ?></h3>
<div class="tasksindex">
	<div class="col-xs-2" id="leftsidebar">
	  <?php echo $this->Html->link(__('Add a Task'), array('action' => 'add'), array('class' => 'btn', 'id' => 'menubtn')); ?>
	  <?php echo $this->Html->link(__('Add a Task Account'), array('controller' => 'taskaccounts', 'action' => 'add'), array('class' => 'btn', 'id' => 'menubtn')); ?> 
      <?php echo $this->Html->link(__('View Task Accounts'), array('controller' => 'taskaccounts', 'action' => 'index'), array('class' => 'btn', 'id' => 'menubtn')); ?>
	</div>
	<div class="col-xs-7">
	<table cellpadding="0" cellspacing="0" class="list">
	<thead>
	<tr>
			<th class="hide"><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('taskaccount_id'); ?></th>
			<th style="margin-right: 200px;"><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('priority'); ?></th>			
			<th><?php echo $this->Paginator->sort('timer'); ?></th>
			<th><?php echo $this->Paginator->sort('starttime'); ?></th>
			<th><?php echo $this->Paginator->sort('endtime'); ?></th>
			<th><?php echo $this->Paginator->sort('deadline'); ?></th>
			<th><?php echo $this->Paginator->sort('location'); ?></th>
			<th><?php echo $this->Paginator->sort('notes'); ?></th>
			<th class="hide"><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="hide"><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="hide"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($tasks as $task): ?>
	<tr>
		<td class="hide"><?php echo h($task['Task']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($task['Taskaccount']['title'], array('controller' => 'taskaccounts', 'action' => 'view', $task['Taskaccount']['priority'])); ?>
		</td>
		<td><?php echo h($task['Task']['title']); ?>&nbsp;</td>
		<td><?php echo h($task['Task']['priority']); ?>&nbsp;</td>
		<td><?php echo h($task['Task']['timer']); ?>&nbsp;</td>
		<td><?php echo h($task['Task']['starttime']); ?>&nbsp;</td>
		<td><?php echo h($task['Task']['endtime']); ?>&nbsp;</td>
		<td><?php echo h($task['Task']['deadline']); ?>&nbsp;</td>
		<td><?php echo h($task['Task']['location']); ?>&nbsp;</td>
		<td><?php echo h($task['Task']['notes']); ?>&nbsp;</td>
		<td class="hide"><?php echo h($task['Task']['created']); ?>&nbsp;</td>
		<td class="hide"><?php echo h($task['Task']['modified']); ?>&nbsp;</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p style="text-align:center;">
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, {:current} tasks out of {:count} total.')
	));
	?>	</p>
	<div class="paging" style="text-align:center;">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="col-xs-3" id="righttsksidebar">
	<?php foreach ($tasks as $task): ?>
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $task['Task']['id']), array('class' => 'btn', 'id' => 'taskbtns')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $task['Task']['id']), array('class' => 'btn', 'id' => 'taskbtns')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $task['Task']['id']), array('confirm' => __('Are you sure you want to delete your task %s?', $task['Task']['title']), 'class' => 'btn', 'id' => 'taskbtns')); ?>
			<br />
	<?php endforeach; ?>
</div>

