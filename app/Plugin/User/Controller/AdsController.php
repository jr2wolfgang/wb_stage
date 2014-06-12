<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class AdsController extends UserAppController  {

	public function beforeFilter() {

	    parent::beforeFilter();

	    $this->layout = 'default';
	    $this->loadModel('User.Ad');
	    // Allow users to register and logout.
	    $this->Auth->allow('register', 'logout');
	}

	public $paginate = array(
        'limit' => 10,
        'order' => array(
            'Ad.created' => 'DESC'
        )
    );

	public function index() {

	  $this->Ad->bind(array('User','Map'));
				
	  $this->Ad->recursive = 0;

	  $conditions = array('Ad.modified_by' => $this->Session->read('Auth.User.id'));
	  
	  $this->paginate = array(
          	'recursive' => -1,
            'conditions' => $conditions,
            
            
         );


		
		$this->set('ads', $this->paginate('Ad'));		
	}

	public function new_ad(){

	
		$ads = ClassRegistry::init('Ad');
		
		$User = ClassRegistry::init('User');

		$User->bind(array('Image'));

		$images = $User->read(null,$this->Session->read('Auth.User.id'));

		if ($this->request->is('post')) {

			$this->Ad->create();

		

			$this->request->data['Ad']['modified_by'] = $this->request->data['Map']['modified_by'] = $images['User']['id'];

			$AdsData = $this->Ad->GetData($this->request->data);
				

			$this->Ad->bind(array('Map'));
			
			if ($this->Ad->saveAssociated($this->request->data)) {

				ClassRegistry::init('Image')->saveImages($AdsData['Image'],'Ad',$this->Ad->id);
				
				$this->Session->setFlash(__('The ads has been saved.'));

				$this->redirect(array('action' => 'index'));
			
			} else {
				
				$this->Session->setFlash(__('The ads could not be saved. Please, try again.'));
			}
		}

		$this->set(compact('images'));
	}

	public function upload_multiple(){


		$output_dir = App::pluginPath('User') . WEBROOT_DIR.DS.'img/uploads/';

		if(isset($_FILES["myfile"]))
		{
		$ret = array();

			$error =$_FILES["myfile"]["error"];
			{

			if(!is_array($_FILES["myfile"]['name'])) //single file
			{

			 	$fileName = $_FILES["myfile"]["name"];

			 	$pathinfo = pathinfo($output_dir. $_FILES["myfile"]["name"]);

			 	move_uploaded_file($_FILES["myfile"]["tmp_name"],$output_dir. $_FILES["myfile"]["name"]);
			 	 //echo "<br> Error: ".$_FILES["myfile"]["error"];
		 	 	$ret['extension'] = $pathinfo['extension'];
			 	
			 	$ret[$fileName]= $output_dir.$fileName;
			 	
			 	$ret['file'] = $fileName;
			}
			else
			{
				$fileCount = count($_FILES["myfile"]['name']);
			  for($i=0; $i < $fileCount; $i++)
			  {
			  	$pathinfo = pathinfo($output_dir.$fileName);

			  	$fileName = $_FILES["myfile"]["name"][$i];
				$ret[$fileName]= $output_dir.$fileName;
				$ret['extension']= $pathinfo['extension'];
				$ret['file'] = $fileName;
			    move_uploaded_file($_FILES["myfile"]["tmp_name"][$i],$output_dir.$fileName );
			  }

			}
			$ret['path'] = 'user/img/uploads/';
			$ret['foreign_key'] = $this->Session->read('Auth.User.id');
			
			$saveImage[0] = $ret;

			ClassRegistry::init('Image')->saveImages($saveImage);

			$ret['key'] = ClassRegistry::init('Image')->id;
			//$ret['name'] = ClassRegistry::init('Image')->id;
		}

		echo json_encode($ret);



		}
		exit();
	}

	public function maps($coordinate){
		
		$maps = ClassRegistry::init('Map');

		$session_id = $this->Session->read('Auth');
		$session_id = $session_id['User']['id'];
		
		if ($coordinate){
			$coordinate = split(", ", $coordinate);
			$coordinate[0] = str_replace("(","",$coordinate[0]);
			$coordinate[1] = str_replace(")","",$coordinate[1]);

			$this->request->data['Map']['longhitude'] = $coordinate[0];
			$this->request->data['Map']['latitude'] = $coordinate[1];
			$this->request->data['Map']['modified_by'] = $session_id;

			if ($maps->hasAny(array('modified_by' => $this->request->data['Map']['modified_by']))) {
			  // update
			  $existing = $maps->find('first', array(
			    'conditions' => array(
			      'modified_by' => $this->request->data['Map']['modified_by']
			    )
			  ));
			  $maps->id = $existing['Map']['id'];
			} else {
			  $maps->create();
			}
			
			// save or update
			if($maps->save($this->request->data)){
				$this->Session->setFlash(__('The Maps has been saved.'));
			}else{
				$this->Session->setFlash(__('The Maps could not be saved. Please, try again.'));
			}

		}
		exit();		
	}

	


	public function delete($id = null) {
		$this->Ad->bind(array('Map'));
		$this->Ad->id = $id;
		if (!$this->Ad->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Ad->delete()) {
			$this->Session->setFlash(__('Ad has been deleted.'));
		} else {
			$this->Session->setFlash(__('Ad could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}


}