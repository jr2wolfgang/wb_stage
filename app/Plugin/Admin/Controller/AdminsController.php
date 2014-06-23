<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class AdminsController extends AdminAppController  {

	var $uses = array('Ad','User');


	public function beforeFilter() {
	    
	    parent::beforeFilter();

		// Allow users to register and logout.
	    $this->Auth->allow('register', 'logout');
	}


	public function index() {
		
		$this->layout = 'default';

		$this->Ad->bind('PrimaryImage','Image','Adress');

		$conditions = array('');

		$this->paginate = array(
		  	'recursive' => -1,
		    'conditions' => $conditions,
		    'group' => array('Ad.id'),
		    'order' => array('Ad.id DESC'),
		    'limit' => '5'
		);

		$ads = $this->paginate('Ad');

		$this->User->bind(array('Group' => array('fields' => array('id','name'))));

		$users = $this->User->find('all',array(
			 'conditions' => array(''),
		    'group' => array('User.id'),
		    'order' => array('User.id DESC'),
		    'limit' => '5'
		));


		$this->set(compact('ads','users'));
		
		
	}


}