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
		// Please refer to User-jrr Model
		/*$this->User->bind(array('Ad'));*/

		$this->Ad->bind(array('Image','PrimaryImage'));

		$this->paginate = array(
		    'limit' => 8, // this was the option which you forgot to mention
		    'order' => array(
		        'Ad.id' => 'DESC')
		);


		$this->set('ads', $this->paginate('Ad'));
	}

	public function view($id) {
		$this->theme = 'Nakatipid';

		$imgFolder = '/user/img/';
		
		$ads = $this->Ad;
		$ads->bind(array('Image','User'));
		// Please refer to User-jrr Model
		/*$this->User->bind(array('Ad'));*/

	
		if(empty($this->data)){
			$ads_data = $ads->findById($id);
			$this->data = $ads_data;

			if ( empty($this->request->data['User']['avatar']) ){
				$this->request->data['User']['avatar'] = $imgFolder.'default-avatar.png';
			}

		}	
	}	
}