<?php
App::uses('AppModel', 'Model');
/**
 * Task Model
 *
 * @property Taskaccount $Taskaccount
 */
class Task extends AppModel {


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Taskaccount' => array(
			'className' => 'Taskaccount',
			'foreignKey' => 'taskaccount_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
