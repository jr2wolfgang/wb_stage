<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class AdminsController extends UserAppController  {

	public function beforeFilter() {
	    parent::beforeFilter();


	    // Allow users to register and logout.
	    $this->Auth->allow('register', 'logout');
	}

	public function index() {
		$this->layout = 'default';				
	}

	public function ads(){
		$ads = ClassRegistry::init('Ad');
		$session_id = $this->Session->read('Auth');
		$session_id = $session_id['User']['id'];

		if ($this->request->is('post')) { 
			$ads->create();
			$this->request->data['Ad']['modified_by'] = $session_id;

			if($ads->save($this->request->data)){
				$this->Session->setFlash(__('The ads has been saved.'));
			}else{
				$this->Session->setFlash(__('The ads could not be saved. Please, try again.'));
			}
		}
	}

}