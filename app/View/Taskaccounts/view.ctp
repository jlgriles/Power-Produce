<h3><?php echo h($taskaccount['Taskaccount']['title']); ?></h3>
  <div class="col-xs-2" id="leftsidebar">
  		<?php echo $this->Html->link(__('Add a Task Account'), array('action' => 'add'), array('class' => 'btn', 'id' => 'menubtn')); ?>
		<br />
	    <?php echo $this->Html->link(__('Add a Task'), array('controller' => 'tasks', 'action' => 'add'), array('class' => 'btn', 'id' => 'menubtn')); ?> 
  </div>
  <div class="col-xs-8">
	<dl>
		<dt class="hide"><?php echo __('Id'); ?></dt>
		<dd class="hide">
			<?php echo h($taskaccount['Taskaccount']['id']); ?>
			&nbsp;
		</dd>
		<dt class="hide"><?php echo __('Title'); ?></dt>
		<dd class="hide">
			<?php echo h($taskaccount['Taskaccount']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Priority'); ?></dt>
		<dd>
			<?php echo h($taskaccount['Taskaccount']['priority']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Timer'); ?></dt>
		<dd>
			<?php echo h($taskaccount['Taskaccount']['timer']), ' hours'; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Location'); ?></dt>
		<dd>
			<?php echo h($taskaccount['Taskaccount']['location']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Notes'); ?></dt>
		<dd>
			<?php echo h($taskaccount['Taskaccount']['notes']); ?>
			&nbsp;
		</dd>
		<dt class="hide"><?php echo __('Created'); ?></dt>
		<dd class="hide">
			<?php echo h($taskaccount['Taskaccount']['created']); ?>
			&nbsp;
		</dd>
		<dt class="hide"><?php echo __('Modified'); ?></dt>
		<dd class="hide">
			<?php echo h($taskaccount['Taskaccount']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
	</div>
   <div class="col-xs-2" id="leftsidebar">
        <?php echo $this->Html->link(__('Edit Task Account'), array('action' => 'edit', $taskaccount['Taskaccount']['id']), array('class' => 'btn', 'id' => 'menubtn')); ?>
        <br />
		<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $taskaccount['Taskaccount']['id']), array('confirm' => __('Are you sure you want to delete your task account %s?', $taskaccount['Taskaccount']['title']), 'class' => 'btn', 'id' => 'menubtn')); ?>
		<br />
		<?php echo $this->Html->link(__('View Task Account List'), array('action' => 'index'), array('class' => 'btn', 'id' => 'menubtn')); ?>
		<br />
   </div>