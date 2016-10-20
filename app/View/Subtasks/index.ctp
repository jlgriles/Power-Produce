<h3><?php echo __('Subtasks'); ?></h3>
<div class="subtasks">
    <div class="col-xs-2" id="leftsidebar">
     <?php echo $this->Html->link(__('Add a Subtask'), array('action' => 'add'), array('class' => 'btn btn-success')); ?>
     </div>
   <div class="col-xs-8">
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th class="hide"><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('timer'); ?></th>
			<th><?php echo $this->Paginator->sort('starttime'); ?></th>
			<th><?php echo $this->Paginator->sort('deadline'); ?></th>
			<th><?php echo $this->Paginator->sort('notes'); ?></th>
			<th><?php echo $this->Paginator->sort('priority'); ?></th>
			<th><?php echo $this->Paginator->sort('location'); ?></th>
			<th><?php echo $this->Paginator->sort('endtime'); ?></th>
			<th class="hide"><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="hide"><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="hide"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($subtasks as $subtask): ?>
	<tr>
		<td><?php echo h($subtask['Subtask']['id']); ?>&nbsp;</td>
		<td><?php echo h($subtask['Subtask']['title']); ?>&nbsp;</td>
		<td><?php echo h($subtask['Subtask']['timer']); ?>&nbsp;</td>
		<td><?php echo h($subtask['Subtask']['starttime']); ?>&nbsp;</td>
		<td><?php echo h($subtask['Subtask']['deadline']); ?>&nbsp;</td>
		<td><?php echo h($subtask['Subtask']['notes']); ?>&nbsp;</td>
		<td><?php echo h($subtask['Subtask']['priority']); ?>&nbsp;</td>
		<td><?php echo h($subtask['Subtask']['location']); ?>&nbsp;</td>
		<td><?php echo h($subtask['Subtask']['endtime']); ?>&nbsp;</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p style="text-align:center;">
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} subtasks out of {:count} total subtasks.')
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
 <div class="col-xs-2" id="leftsidebar">
	<?php foreach ($subtasks as $subtask): ?>
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $subtask['Subtask']['id']), array('class' => 'btn btn-primary')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $subtask['Subtask']['id']), array('class' => 'btn btn-primary')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $subtask['Subtask']['id']), array('confirm' => __('Are you sure you want to delete your subtask %s?', $subtask['Subtask']['title']))); ?>
<?php endforeach; ?>
</div>
