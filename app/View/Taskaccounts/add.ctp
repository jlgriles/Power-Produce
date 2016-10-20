<h3>Add Task Account</h3>
<div class="taskaccounts">
<?php echo $this->Form->create('Taskaccount'); ?>
	<div class="col-xs-6">
	<?php
		echo $this->Form->input('title', array(
								'placeholder' => ' Title: e.g. Accounting Work',
								'label' => false
								));
		echo $this->Form->input('timer', array(
								'placeholder' => ' Timer: e.g. 4:00',
								'label' => false,
								'min' => '0',

								));
	?>
	</div>
	<div class="col-xs-6">
	<?php
		echo $this->Form->input('priority', array(
								'placeholder' => ' Priority: 1-Important, Urgent; 2-Important, Not Urgent; 3-Not Important, Urgent; 4-Not Important, Not Urgent',
								'label' => false,
								'min' => '1',
								'max' => '4'
								));
		echo $this->Form->input('location', array(
								'placeholder' => ' Location: e.g. 15 Oak St., Ft. Worth, TX; or double click to go to Locations',
								'label' => false,
								'id' => 'autocomplete',
								'onFocus' => 'geolocate()',
								'ondblclick' => 'goToLocations()'
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
<div class="col-xs-6">
<?php echo $this->Html->link(__('Back to Task Account List'), array('action' => 'index'), array('class' => 'btn', 'id' => 'menubtn')); ?></li>
</div>
	<div class="col-xs-6">
	<?php echo $this->Form->end(__('Save Task Account')); ?>
</div>
</div>
