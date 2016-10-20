<h3><?php echo h($task['Task']['title']); ?></h3>
  <div class="col-xs-2" id="leftsidebar">
  		<?php echo $this->Html->link(__('Add a Task Account'), array('action' => 'add'), array('class' => 'btn', 'id' => 'menubtn')); ?>
		<br />
	    <?php echo $this->Html->link(__('Add a Task'), array('controller' => 'tasks', 'action' => 'add'), array('class' => 'btn', 'id' => 'menubtn')); ?> 
  </div>
<div class="col-xs-8">
	<dl>
		<dt class="hide"><?php echo __('Id'); ?></dt>
		<dd class="hide">
			<?php echo h($task['Task']['id']); ?>
			&nbsp;
		</dd>
		<dt class="hide"><?php echo __('Title'); ?></dt>
		<dd class="hide">
			<?php echo h($task['Task']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Task Account'); ?></dt>
		<dd>
			<?php echo $this->Html->link($task['Taskaccount']['title'], array('controller' => 'taskaccounts', 'action' => 'view', $task['Taskaccount']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Priority'); ?></dt>
		<dd>
			<?php echo h($task['Task']['priority']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Timer'); ?></dt>
		<dd>
			<?php echo h($task['Task']['timer']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Start Time'); ?></dt>
		<dd>
			<?php echo h($task['Task']['starttime']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('End Time'); ?></dt>
		<dd>
			<?php echo h($task['Task']['endtime']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Deadline'); ?></dt>
		<dd>
			<?php echo h($task['Task']['deadline']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Location'); ?></dt>
		<dd>
			<?php echo h($task['Task']['location']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Notes'); ?></dt>
		<dd>
			<?php echo h($task['Task']['notes']); ?>
			&nbsp;
		</dd>
		<dt class="hide"><?php echo __('Created'); ?></dt>
		<dd class="hide">
			<?php echo h($task['Task']['created']); ?>
			&nbsp;
		</dd>
		<dt class="hide"><?php echo __('Modified'); ?></dt>
		<dd class="hide">
			<?php echo h($task['Task']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
   <div class="col-xs-2" id="leftsidebar">
        <?php echo $this->Html->link(__('Edit Task'), array('action' => 'edit', $task['Task']['id']), array('class' => 'btn', 'id' => 'menubtn')); ?>
        <br />
		<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $task['Task']['id']), array('confirm' => __('Are you sure you want to delete your task %s?', $task['Task']['title']), 'class' => 'btn', 'id' => 'menubtn')); ?>
		<br />
		<?php echo $this->Html->link(__('View Task Account List'), array('action' => 'index'), array('class' => 'btn', 'id' => 'menubtn')); ?>
		<br />
   </div>