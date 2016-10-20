<h3><?php echo __('Task Accounts'); ?></h3>
<div class="taskaccountsindex">
     <div class="col-md-2" id="leftsidebar">
      <?php echo $this->Html->link(__('Add a Task Account'), array('action' => 'add'), array('class' => 'btn', 'id' => 'menubtn')); ?>
      <?php echo $this->Html->link(__('Add a Task'), array('controller' => 'tasks', 'action' => 'add'), array('class' => 'btn', 'id' => 'menubtn')); ?> 
  </div>
   <div class="col-md-7">
    <table cellpadding="0" cellspacing="0" class="list">
	<thead>
	<tr>
			<th class="hide"><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('timer'); ?></th>
			<th><?php echo $this->Paginator->sort('priority'); ?></th>
			<th><?php echo $this->Paginator->sort('location'); ?></th>
			<th><?php echo $this->Paginator->sort('notes'); ?></th>
			<th class="hide"><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="hide"><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="hide" class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($taskaccounts as $taskaccount): ?>
	<tr>
		<td class="hide"><?php echo h($taskaccount['Taskaccount']['id']); ?>&nbsp;</td>
		<td><?php echo h($taskaccount['Taskaccount']['title']); ?>&nbsp;</td>
		<td><?php echo h($taskaccount['Taskaccount']['timer']), ' hours'; ?>&nbsp;</td>
		<td><?php echo h($taskaccount['Taskaccount']['priority']); ?>&nbsp;</td>
		<td><?php echo h($taskaccount['Taskaccount']['location']); ?>&nbsp;</td>
		<td><?php echo h($taskaccount['Taskaccount']['notes']); ?>&nbsp;</td>
		<td class="hide"><?php echo h($taskaccount['Taskaccount']['created']); ?>&nbsp;</td>
		<td class="hide"><?php echo h($taskaccount['Taskaccount']['modified']); ?>&nbsp;</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p style="text-align:center;">
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} Task Accounts out of {:count}. ')
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
   <div class="col-md-3" id="leftsidebar">
	<?php foreach ($taskaccounts as $taskaccount): ?>
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $taskaccount['Taskaccount']['id']), array('class' => 'btn')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $taskaccount['Taskaccount']['id']), array('class' => 'btn')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $taskaccount['Taskaccount']['id']), array('confirm' => __('Are you sure you want to delete your task account %s?', $taskaccount['Taskaccount']['title']), 'class' => 'btn')); ?>
			<br />
<?php endforeach; ?>
   </div>
 </div>
</div>
