<h3>Add a Task</h3>
<div class="tasks">
<?php echo $this->Form->create('Task'); ?>
    <div class="col-xs-12" style="text-align: center;">
    <?php
        echo $this->Form->input('taskaccount_id');
    ?>
    </div>
    <div class="col-xs-6">
	<?php
		echo $this->Form->input('title', array(
								'label' => false,
								'placeholder' => 'Title: e.g. Write Copy'
								));
		echo $this->Form->input('timer', array(
								'label' => false,
								'placeholder' => 'Timer: e.g. 4:00',
								'min' => '0',
								'step' => '0.01'
								));
	?>
	<div id="marginer">
	<?php
		echo $this->Form->input('starttime', array('style' => 'color:black;'));
	?>
	</div>
	<div id="marginer">
	<?php
		echo $this->Form->input('endtime', array('style' => 'color:black;'));
	?>
	</div>
	</div>
	<div class="col-xs-6">
	<?php
		echo $this->Form->input('priority', array(
								'label' => false,
								'placeholder' => '  Priority: 1-Important, Urgent; 2-Important, Not Urgent; 3-Not Important, Urgent; 4-Not Important, Not Urgent',
								'min' => '1',
								'max' => '4'
								));
		echo $this->Form->input('location', array(
								'label' => false,
								'placeholder' => 'Location: e.g. 15 Oak St., Ft. Worth, TX; or double click to go to Locations',
								'ondblclick' => 'goToLocations()'
								));
	?>
	<div id="marginer">
	<?php 
		echo $this->Form->input('deadline', array('style' => 'color:black;'));
	?>
	</div>
	</div>
	<div class="col-xs-12">
	<?php 
	    echo $this->Form->input('notes', array(
								'placeholder' => ' Notes: Type brief notes here, or double click to go to Notes Editor.',
								'label' => false,
								'style' => 'width: 100%; height: 10em;'
								));
	?>
	</div>
</div>	
<div class="col-xs-6">
<?php echo $this->Html->link(__('View Task Accounts'), array('controller' => 'taskaccounts', 'action' => 'index'), array('class' => 'btn', 'id' => 'menubtn')); ?>
</div>
<div class="col-xs-6">
<?php echo $this->Form->end(__('Save Task')); ?>
</div>
<div class="col-xs-6">
<?php echo $this->Html->link(__('Back to Task List'), array('action' => 'index',), array('class' => 'btn', 'id' => 'menubtn')); ?>
</div>
<div class="col-xs-6">
<?php echo $this->Html->link(__('Add a Task Account'), array('controller' => 'taskaccounts', 'action' => 'add'), array('class' => 'btn', 'id' => 'menubtn')); ?>
</div>
