<?php
App::uses('AppController', 'Controller');

class AdsController extends AppController {

	public $helpers = array(
        'Html',
        'Form',
    );

	function beforeFilter() {
		$this->theme = 'Nakatipid';
  		$this->Auth->allow('index','view');
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

	public function view($slugUrl = null) {

		$slug = !empty($this->params['slug']) ? $this->params['slug'] : $slugUrl;

		$this->theme = 'Nakatipid';
		$imgFolder = '/user/img/';
		
		$ads = $this->Ad;
		$ads->bind(array('Image','User','PrimaryImage'));

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