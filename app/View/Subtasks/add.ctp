<h3>Add a Subtask</h3>
<div class="subtasks">
<?php echo $this->Form->create('Subtask'); ?>
    <div class="col-xs-6">
	<?php
		echo $this->Form->input('title', array(
								'placeholder' => ' Title: e.g. Write copy',
								'label' => false
								));
		echo $this->Form->input('timer', array(
								'placeholder' => ' Timer: e.g. 4:00',
								'label' => false
								));
		echo $this->Form->input('starttime', array(
								'placeholder' => 'Start Time',
								'label' => false	
								));
		echo $this->Form->input('deadline', array(
								'placeholder' => 'Deadline',
								'label' => false	
								));
	?>
	</div>
	<div class="col-xs-6">
	<?php
		echo $this->Form->input('priority', array(
								'placeholder' => ' Priority: 1-Important, Urgent; 2-Important, Not Urgent; 3-Not Important, Urgent; 4-Not Important, Not Urgent',
								'label' => false
								));
		echo $this->Form->input('location', array(
								'placeholder' => ' Location: e.g. 15 Oak St., Ft. Worth, TX; or double click to go to Locations',
								'label' => false,
								'id' => 'autocomplete',
								'onFocus' => 'geolocate()',
								'ondblclick' => 'goToLocations()'
								));
		echo $this->Form->input('endtime', array(
								'placeholder' => 'End Time',
								'label' => false	
								));
	?>
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
<div class="actions">
<?php echo $this->Html->link(__('View Subtask List'), array('action' => 'index'), array('class' => 'btn btn-danger')); ?>
</div>
<div class="col-xs-6">
<?php echo $this->Form->end(__('Save Subtask')); ?>
</div>