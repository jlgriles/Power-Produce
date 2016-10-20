<?php
App::uses('AppController', 'Controller');
/**
 * Taskaccounts Controller
 *
 * @property Taskaccount $Taskaccount
 * @property PaginatorComponent $Paginator
 */
class TaskaccountsController extends AppController {

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
		$this->Taskaccount->recursive = 0;
		$this->set('taskaccounts', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Taskaccount->exists($id)) {
			throw new NotFoundException(__('Invalid Task Account'));
		}
		$options = array('conditions' => array('Taskaccount.' . $this->Taskaccount->primaryKey => $id));
		$this->set('taskaccount', $this->Taskaccount->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Taskaccount->create();
			if ($this->Taskaccount->save($this->request->data)) {
				$this->Flash->success(__('The task account has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The task account could not be saved. Please, try again.'));
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
		if (!$this->Taskaccount->exists($id)) {
			throw new NotFoundException(__('Invalid taskaccount'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Taskaccount->save($this->request->data)) {
				$this->Flash->success(__('The task account has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The task account could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Taskaccount.' . $this->Taskaccount->primaryKey => $id));
			$this->request->data = $this->Taskaccount->find('first', $options);
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
		$this->Taskaccount->id = $id;
		if (!$this->Taskaccount->exists()) {
			throw new NotFoundException(__('Invalid taskaccount'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Taskaccount->delete()) {
			$this->Flash->success(__('The task account has been deleted.'));
		} else {
			$this->Flash->error(__('The task account could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
