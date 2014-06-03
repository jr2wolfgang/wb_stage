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


}