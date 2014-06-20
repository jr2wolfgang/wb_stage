<?php
App::uses('AppController', 'Controller');

class UsersController extends AppController {

	public $components = array('Paginator');

	public function beforeFilter() {
	    parent::beforeFilter();

	    $this->Auth->allow('register', 'logout');
	}

	public function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
	}

	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

	public function add() {
		if ($this->request->is('post')) {
			$this->User->create();

			if (!empty($this->request->data['User']['password'])) {
				$this->request->data['User']['default_password'] = $this->request->data['User']['password'];
			}
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		}
		$groups = $this->User->Group->find('list');
		$accountTypes = $this->User->AccountType->find('list');
		$this->set(compact('groups', 'accountTypes'));
	}

	public function edit($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
		$groups = $this->User->Group->find('list');
		$accountTypes = $this->User->AccountType->find('list');
		$this->set(compact('groups', 'accountTypes'));
	}

	public function delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('The user has been deleted.'));
		} else {
			$this->Session->setFlash(__('The user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function register() {
		
		$this->layout = 'register';

		$this->User->bind('AccountType');

		if ($this->request->is('post')) {
			
			if (!empty($this->request->data['User']['email'])) {

				$this->User->create();

				$this->request->data['User']['group_id'] = 2;
				
				if ($this->User->save($this->request->data) ) {

					if ($this->Auth->login($this->request->data['User'])) {

						$account_type = $this->User->CheckData($this->Session->read('Auth'));

						$this->get_account_type(1);

					}
				} 

				else {
					$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
				}
			}

		}
		
		$groups = $this->User->Group->find('list');
		$accountTypes = $this->User->AccountType->find('list');
		
		$this->set(compact('groups', 'accountTypes'));

	}

	public function _checkAccountType($data = null) {
			
	}

	public function get_account_type($accountType = null) {

		$this->layout = 'register';

		$roleData = $this->Session->read('Auth');

		$this->User->bind('AccountType');

		if (!empty($accountType)){

			$checkData = $this->User->CheckData($roleData);
			$this->User->id = $checkData['User']['id'];

			if( $this->User->saveField('account_type_id', $accountType)) {
				$this->Session->write('Auth',$checkData);
				$this->redirect($this->Auth->redirect());
			}
		}
		exit();
	}

	public function login() {

		$this->layout = 'login';

	    if ($this->request->is('post')) {

	        if ($this->Auth->login()) {

	        	$this->User->LoginAction($this->Session->read('Auth'),'1');
				
				return $this->redirect($this->Auth->redirect());
	        }

	        $this->Session->setFlash(__('Invalid username or password, try again'));
	    }
	}

	public function logout() {
		
		if ($this->User->LoginAction($this->Session->read('Auth'),'0')) {
				 return $this->redirect($this->Auth->logout());
		}
	 
	}
}

