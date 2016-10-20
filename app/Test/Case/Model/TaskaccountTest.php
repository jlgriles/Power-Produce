<?php
App::uses('Taskaccount', 'Model');

/**
 * Taskaccount Test Case
 */
class TaskaccountTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.taskaccount'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Taskaccount = ClassRegistry::init('Taskaccount');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Taskaccount);

		parent::tearDown();
	}

}
