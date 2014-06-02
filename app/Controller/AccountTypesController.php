<?php
App::uses('AppController', 'Controller');
/**
 * AccountTypes Controller
 *
 * @property AccountType $AccountType
 * @property PaginatorComponent $Paginator
 */
class AccountTypesController extends AppController {

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
		$this->AccountType->recursive = 0;
		$this->set('accountTypes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->AccountType->exists($id)) {
			throw new NotFoundException(__('Invalid account type'));
		}
		$options = array('conditions' => array('AccountType.' . $this->AccountType->primaryKey => $id));
		$this->set('accountType', $this->AccountType->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->AccountType->create();
			if ($this->AccountType->save($this->request->data)) {
				$this->Session->setFlash(__('The account type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The account type could not be saved. Please, try again.'));
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
		if (!$this->AccountType->exists($id)) {
			throw new NotFoundException(__('Invalid account type'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->AccountType->save($this->request->data)) {
				$this->Session->setFlash(__('The account type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The account type could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('AccountType.' . $this->AccountType->primaryKey => $id));
			$this->request->data = $this->AccountType->find('first', $options);
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
		$this->AccountType->id = $id;
		if (!$this->AccountType->exists()) {
			throw new NotFoundException(__('Invalid account type'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->AccountType->delete()) {
			$this->Session->setFlash(__('The account type has been deleted.'));
		} else {
			$this->Session->setFlash(__('The account type could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
