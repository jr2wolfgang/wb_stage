<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class UsersController extends UserAppController  {


	public function beforeFilter() {

	    parent::beforeFilter();

	    $userData = $this->Session->read('Auth');
	    
	    $this->User->bind(array('Group','AccountType','Addresses'));
	

	    $AccountType = $this->User->find('list');

		$this->set(compact('userData'));


	}


	public function index() {

	}


	public function edit() {

		$userData = $this->Session->read('Auth');
		$this->User->bind(array('Group','AccountType'));
		$this->request->data = $this->User->read(null,$userData['User']['id']);
		$this->set(compact('userData'));
		
	}

	public function profile(){ 
	
		$this->User->bind( array('Addresses'));

		$this->User->validate = array();


		if ($this->request->is('post')) {
			
			
			if (empty($this->request->data['User']['jrr_password'])){
				
				$this->request->data['User']['jrr_password'] = $this->Session->read('Auth.User.rxt');
				$this->request->data['User']['rxt'] = $this->Session->read('Auth.User.rxt');
			}
			else {
				$this->request->data['User']['rxt'] = $this->request->data['User']['jrr_password'];
			}
				
			$this->request->data['Addresses']['foreign_key'] = $this->request->data['User']['id'];


			if ($this->User->saveAssociated($this->request->data)) {

				$this->Session->setFlash(__('The Profile has been updated.'));
			} 
			else {			
				$this->Session->setFlash(__('The User could not be update. Please, try again.'));
			}
		} else {

			$this->User->bind( array('Addresses'));

			$this->request->data = $this->User->findById($this->Session->read('Auth.User.id'));


			$this->request->data['User']['jrr_password'] = '';

			if (empty($this->request->data['User']['avatar']) ){
				$this->request->data['User']['avatar'] = 'http://avatars.io/asds/?size=large';
			}

		
		 }
	}

}