<?php
App::uses('AppController', 'Controller');
/**
 * Subtasks Controller
 *
 * @property Subtask $Subtask
 * @property PaginatorComponent $Paginator
 */
class SubtasksController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Subtask->recursive = 0;
		$this->set('subtasks', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Subtask->exists($id)) {
			throw new NotFoundException(__('Invalid subtask'));
		}
		$options = array('conditions' => array('Subtask.' . $this->Subtask->primaryKey => $id));
		$this->set('subtask', $this->Subtask->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Subtask->create();
			if ($this->Subtask->save($this->request->data)) {
				$this->Flash->success(__('The subtask has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The subtask could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Subtask->exists($id)) {
			throw new NotFoundException(__('Invalid subtask'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Subtask->save($this->request->data)) {
				$this->Flash->success(__('The subtask has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The subtask could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Subtask.' . $this->Subtask->primaryKey => $id));
			$this->request->data = $this->Subtask->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Subtask->id = $id;
		if (!$this->Subtask->exists()) {
			throw new NotFoundException(__('Invalid subtask'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Subtask->delete()) {
			$this->Flash->success(__('The subtask has been deleted.'));
		} else {
			$this->Flash->error(__('The subtask could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
