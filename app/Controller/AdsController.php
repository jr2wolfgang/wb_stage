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
  		$this->Auth->allow('index','view','search','ajax_search');
 	}

	public function index() {
		echo 'Please disregard.. Testing the live server';
		echo '<br> still getting some error';
		echo '<br> isa pa!!';
		$this->Ad->bind(array('Image','PrimaryImage','Address'));

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


	public function ajax_search(){
		$this->autoRender = false; 
	    $this->request->onlyAllow('ajax');
		$this->Ad->bind( array('Address') );
		
		$keyword = $this->request->query('term');
		
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
		    'fields' => array('Ad.name','Address.street','Address.town','Address.province','Address.hometown'),
		    'order' => array('Ad.id' => 'DESC'),
		    'conditions' => $cond
		);	
		$getData = $this->paginate('Ad');
		foreach ($getData as $json) {
			$data[] = $json['Ad']['name'];
			// $data[] = $json['Address']['street'];
			// $data[] = $json['Address']['town'];
			// $data[] = $json['Address']['province'];
			// $data[] = $json['Address']['hometown'];
		}
		return json_encode($data);
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