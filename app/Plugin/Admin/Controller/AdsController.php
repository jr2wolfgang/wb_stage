<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class AdsController extends AdminAppController {

/**
 * Main View
 *
 * @param none
 * @return void
 */

	function beforeFilter() {
			$userData = $this->Session->read('Auth');
			$this->set(compact('userData'));
			$this->Auth->allow('index');
 	}

	public function index() {

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

		$this->set(compact('ads'));
	}

	
	public function delete($id = null) {
	
		$this->Ad->bind(array('Map'));
		$this->Ad->id = $id;
		if (!$this->Ad->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Ad->delete()) {
			$this->Session->setFlash(__('Ad has been deleted.'),'warning');
		} else {
			$this->Session->setFlash(__('Ad could not be deleted. Please, try again.'),'error');
		}
		return $this->redirect(array('action' => 'index'));

	}

	public function view($id = null) {

		$imgFolder = '/user/img/';
		
		$ads = $this->Ad;

		$ads->bind(array('Image','User','PrimaryImage'));
		
		if(empty($this->data)) {
			$ads = $ads->findById($id);
			
			
			if ( empty($this->request->data['User']['avatar']) ){
				$this->request->data['User']['avatar'] = $imgFolder.'default-avatar.png';
			}
			

			$this->set(compact('ads'));

			
		}	
	}	
}