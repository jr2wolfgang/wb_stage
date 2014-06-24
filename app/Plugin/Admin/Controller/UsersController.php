<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class UsersController extends AppController {

/**
 * Main View
 *
 * @param none
 * @return void
 */

	function beforeFilter() {
		
		$this->loadModel('Admin.Ad');
	    $this->loadModel('Admin.Image');
	    $this->loadModel('Admin.Address');
	    $this->loadModel('Admin.User');
		$this->Auth->allow('index');
		$userData = $this->Session->read('Auth');
		$this->set(compact('userData'));
 	}

	public function index() {

		$this->User->bind(array('Address','Group'));

		$conditions = array('');

		$this->paginate = array(
		  	'recursive' => -1,
		    'conditions' => $conditions,
		    'group' => array('User.id'),
		    'order' => array('User.id DESC'),
		    'limit' => '5'
		);

		$users = $this->paginate('User');	

		$this->set(compact('users'));
	}

	
	
	public function delete($id = null) {
		
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
		
		$this->User->bind(array('Address','Group'));

		$groups = $this->User->Group->find('list');
		
		$accountTypes = $this->User->AccountType->find('list');
		
		$this->set(compact('groups', 'accountTypes'));
	}
}