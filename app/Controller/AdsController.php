<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class AdsController extends AppController {

/**
 * Main View
 *
 * @param none
 * @return void
 */

	public $uses = array('User');

	function beforeFilter() {
		$this->theme = 'Nakatipid';
  		$this->Auth->allow('index');
 	}

	public function index() {

		// Please refer to User-jrr Model
		/*$this->User->bind(array('Ad'));
		pr($this->User->find('all'));*/
	}

}