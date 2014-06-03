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

	function beforeFilter() {
		$this->theme = 'Nakatipid';
  		$this->Auth->allow('index');
 	}

	public function index() {
		
	}

}