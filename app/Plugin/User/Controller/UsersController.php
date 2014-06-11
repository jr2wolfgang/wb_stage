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
	    
	    $this->User->bind(array('Group','AccountType'));
	

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
		$user = $this->User;
	
		if(empty($this->data)){
			$user_data = $user->findById($this->Session->read('Auth.User.id'));
			$this->data = $user_data;
			$this->request->data['User']['jrr_password'] = '';
		}

		if ( empty($this->request->data['User']['avatar']) ){
			$this->request->data['User']['avatar'] = 'http://avatars.io/asds/?size=large';
		}


		$user->validate = array();
		if ($this->request->is('post')) {
			$user->id = $this->Session->read('Auth.User.id');

			if (empty($this->request->data['User']['jrr_password'])){
				$this->request->data['User']['jrr_password'] = $this->Session->read('Auth.User.rxt');
				$this->request->data['User']['rxt'] = $this->Session->read('Auth.User.rxt');
			}
			else {
				$this->request->data['User']['rxt'] = $this->request->data['User']['jrr_password'];
			}


			if ($user->save($this->request->data)) {
				$this->Session->setFlash(__('The User has been saved.'));
			} 
			else {			
				$this->Session->setFlash(__('The User could not be saved. Please, try again.'));
			}
		}
	}

}