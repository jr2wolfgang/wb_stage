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


	public function beforeFilter() {
	    parent::beforeFilter();


	    // Allow users to register and logout.
	    $this->Auth->allow('register', 'logout');
	}


	public function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
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

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
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

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
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



/**
 * Register Method
 *
 *
 */

	public function register(){
		$this->layout = 'register';

		if ($this->request->is('post')) {

			$this->User->create();


					
			$data = array('User' => array('firstname' => $this->request->data['User']['firstname'],
										  'lastname' => $this->request->data['User']['lastname'],
										  'email' => $this->request->data['User']['email'],
										  'group_id' => $this->request->data['User']['group_id'],
										  'account_type_id' => $this->request->data['User']['account_type_id'],
										  'birthdate' => $this->request->data['User']['birthdate'],
										  'gender' => $this->request->data['User']['gender'],
										  'jrr_user' => $this->request->data['User']['jrr_user'],
										  'jrr_password' => $this->request->data['User']['jrr_password'],
										  'is_active' => 0,
										  'rxt' => $this->request->data['User']['re_password']));
	
			if ( $this->User->save($data) ) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'login'));
			} 

			else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}

		}

		$groups = $this->User->Group->find('list');
		$accountTypes = $this->User->AccountType->find('list');
		$this->set(compact('groups', 'accountTypes'));

	}




	public function login() {

		$this->layout = 'login';

	    if ($this->request->is('post')) {

	    
	        if ($this->Auth->login()) {

	        	// set login to 1
	        	$this->User->LoginAction($this->Session->read('Auth'),'1');
				
				return $this->redirect($this->Auth->redirect());
	        }
	        $this->Session->setFlash(__('Invalid username or password, try again'));
	    }
	}

	public function logout() {
		// set login to 1
		if ($this->User->LoginAction($this->Session->read('Auth'),'0')) {
				 return $this->redirect($this->Auth->logout());
		}
	   
	}


}

