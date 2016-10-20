<h3><?php echo h($subtask['Subtask']['title']); ?></h3>
  <div class="col-xs-2" id="leftsidebar">
    	<ul>
		<li><?php echo $this->Html->link(__('Edit Subtask'), array('action' => 'edit', $subtask['Subtask']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Subtask'), array('action' => 'delete', $subtask['Subtask']['id']), array('confirm' => __('Are you sure you want to delete your subtask %s?', $subtask['Subtask']['title']))); ?> </li>
		<li><?php echo $this->Html->link(__('View Subtasks'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Add a New Subtask'), array('action' => 'add')); ?> </li>
	</ul>
  </div>
  <div class="col-xs-8">
	<dl>
		<dt class="hide"><?php echo __('Id'); ?></dt>
		<dd class="hide">
			<?php echo h($subtask['Subtask']['id']); ?>
			&nbsp;
		</dd>
		<dt class="hide"><?php echo __('Title'); ?></dt>
		<dd class="hide">
			<?php echo h($subtask['Subtask']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Timer'); ?></dt>
		<dd>
			<?php echo h($subtask['Subtask']['timer']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Deadline'); ?></dt>
		<dd>
			<?php echo h($subtask['Subtask']['deadline']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Priority'); ?></dt>
		<dd>
			<?php echo h($subtask['Subtask']['priority']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Starttime'); ?></dt>
		<dd>
			<?php echo h($subtask['Subtask']['starttime']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Endtime'); ?></dt>
		<dd>
			<?php echo h($subtask['Subtask']['endtime']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Notes'); ?></dt>
		<dd>
			<?php echo h($subtask['Subtask']['notes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Location'); ?></dt>
		<dd>
			<?php echo h($subtask['Subtask']['location']); ?>
			&nbsp;
		</dd>
		<dt class="hide"><?php echo __('Created'); ?></dt>
		<dd class="hide">
			<?php echo h($subtask['Subtask']['created']); ?>
			&nbsp;
		</dd>
		<dt class="hide"><?php echo __('Modified'); ?></dt>
		<dd class="hide">
			<?php echo h($subtask['Subtask']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
  </div>
  <div class="col-xs-2" id="leftsidebar">
  	
  </div>