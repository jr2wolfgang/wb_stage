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

	// public $uses = array('Ad','User');

	function beforeFilter() {
		$this->theme = 'Nakatipid';
  		$this->Auth->allow('index','view');
 	}

	public function index() {
		$ads = $this->Ad;
		$image = $ads->bind('Image');
		// Please refer to User-jrr Model
		/*$this->User->bind(array('Ad'));*/

		if(empty($this->data)){
			$ads_data = $ads->find('all');
			$this->data = $ads_data; 		
			/*
				pr($this->data);
				exit();
			*/
		}	
	}

	public function view($id) {
		$this->theme = 'Nakatipid';

		$ads = $this->Ad;
		$ads->bind(array('Image','User'));
		// Please refer to User-jrr Model
		/*$this->User->bind(array('Ad'));*/

	
		if(empty($this->data)){
			$ads_data = $ads->findById($id);
			$this->data = $ads_data; 					
			
		}	
	}	
}