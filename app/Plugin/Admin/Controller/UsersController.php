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

		$this->User->bind(array('Group' => array('fields' => array('id','name'))));

		$conditions = array('');

		$this->paginate = array(
		  	'recursive' => -1,
		    'conditions' => $conditions,
		    'group' => array('User.id'),
		    'order' => array('User.id DESC'),
		    'limit' => '10',

		);

		$users = $this->paginate('User');	


		$this->set(compact('users'));
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
		
		$this->User->bind(array('Group' => array('fields' => array('id','name'))));

		$groups = $this->User->Group->find('list');
		
		$accountTypes = $this->User->AccountType->find('list');
		
		$this->set(compact('groups', 'accountTypes'));
	}


	public function edit($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {

			if (!empty($this->request->data['User']['password'])) {
				$this->request->data['User']['default_password'] = $this->request->data['User']['password'];
			}

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
		$this->User->bind(array('Group' => array('fields' => array('id','name'))));

		$groups = $this->User->Group->find('list');

		$accountTypes = $this->User->AccountType->find('list');

		$this->set(compact('groups', 'accountTypes'));
	}


			$this->User->bind( array('Address'));

			$this->request->data = $this->User->findById($this->Session->read('Auth.User.id'));

			//pr($this->request->data);exit();
			$this->request->data['User']['jrr_password'] = '';

			if (empty($this->request->data['User']['avatar']) ){
				$this->request->data['User']['avatar'] = 'http://avatars.io/asds/?size=large';
			}

		
		 }
	}
	
	public function setting(){

		$this->User->bind( array('Address'));

		$this->User->validate = array();
		$address = $this->User->Address->find('first', array(
	        'conditions' => array('Address.foreign_key' => $this->Session->read('Auth.User.id')
	    )));
		
		if ($this->request->is('post')) {
			
			if (empty($this->request->data['User']['jrr_password'])){
				
				$this->request->data['User']['jrr_password'] = $this->Session->read('Auth.User.rxt');
				$this->request->data['User']['rxt'] = $this->Session->read('Auth.User.rxt');
			}
			else {
				$this->request->data['User']['rxt'] = $this->request->data['User']['jrr_password'];
			}

			if ($this->User->saveAssociated($this->request->data)) {

				ClassRegistry::init('Address')->save($this->request->data['Address']);
				
				$this->Session->setFlash(__('The Profile has been updated.'),'success');
			} 
			else {			
				$this->Session->setFlash(__('The User could not be update. Please, try again.'),'error');
			}
		} else {

			$this->User->bind( array('Address'));

			$this->request->data = $this->User->findById($this->Session->read('Auth.User.id'));

			//pr($this->request->data);exit();
			$this->request->data['User']['jrr_password'] = '';

			if (empty($this->request->data['User']['avatar']) ){
				$this->request->data['User']['avatar'] = 'http://avatars.io/asds/?size=large';
			}

		
		 }
	}

}