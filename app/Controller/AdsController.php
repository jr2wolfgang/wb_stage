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
  		$this->Auth->allow('index','view','search');
 	}

	public function index() {
		$this->Ad->bind(array('Image','PrimaryImage'));

		$this->paginate = array(
		    'limit' => 8, 
		    'order' => array(
		        'Ad.id' => 'DESC')		    
		);
		$this->set('ads', $this->paginate('Ad'));

	}


	public function search(){
		$keyword = $this->request->query('q');
		$this->Ad->bind(array('Image','PrimaryImage','Address'));

		if ( !empty($keyword) ){
			$cond=array( 'OR'=>array("Ad.name LIKE '%$keyword%'",
									 "Address.street LIKE '%$keyword%'",
									 "Address.town LIKE '%$keyword%'",
									 "Address.province LIKE '%$keyword%'",
									 "Address.hometown LIKE '%$keyword%'")  );
		} else {
			$cond=array();
		}

		$this->paginate = array(
		    'limit' => 8, 
		    'order' => array(
		        'Ad.id' => 'DESC'),
		    'conditions' => $cond
		);
		$this->set('ads', $this->paginate('Ad'));
	}


	public function view($slugUrl = null) {

		$slug = !empty($this->params['slug']) ? $this->params['slug'] : $slugUrl;

		$this->theme = 'Nakatipid';
		$imgFolder = '/user/img/';
		
		$ads = $this->Ad;
		$ads->bind(array('Image','User','PrimaryImage'));
		// Please refer to User-jrr Model
		/*$this->User->bind(array('Ad'));*/

		if(empty($this->data)){
			$ads_data = $ads->findBySlug($slug);
			$this->data = $ads_data;

			if ( empty($this->request->data['User']['avatar']) ){
				$this->request->data['User']['avatar'] = $imgFolder.'default-avatar.png';
			}

			$this->set('ad', $this->data);
		}	
	}	
}