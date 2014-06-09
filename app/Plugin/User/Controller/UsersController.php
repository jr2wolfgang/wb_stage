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

		$this->set(compact('userData',));


	}


	public function index() {


 

	}


	public function edit() {

		$userData = $this->Session->read('Auth');

		$this->User->bind(array('Group','AccountType'));
	
		$this->request->data = $this->User->read(null,$userData['User']['id']);

		
		$this->set(compact('userData'));
		
	}

	


}