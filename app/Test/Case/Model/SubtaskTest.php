<?php
App::uses('Subtask', 'Model');

/**
 * Subtask Test Case
 */
class SubtaskTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.subtask'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Subtask = ClassRegistry::init('Subtask');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Subtask);

		parent::tearDown();
	}

}
