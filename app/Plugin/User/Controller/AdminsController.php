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

	    $this->loadModel('User.Ad');
	    $this->loadModel('User.Image');
	    $this->loadModel('User.Address');
	    // Allow users to register and logout.
	    $this->Auth->allow('register', 'logout');
	}

	public function index() {

		$this->layout = 'default';	
		$imgFolder = '/user/img/';
		$user = ClassRegistry::init('User');
		$user->bind(array('Ad','Address'));
		
		if(empty($this->data)){
		
			$user_data = $user->findById($this->Session->read('Auth.User.id'));
			$this->data = $user_data;
			//pr($user_data);exit();			
				
		}
		if ( empty($this->request->data['User']['avatar']) ){
			$this->request->data['User']['avatar'] = $imgFolder.'default-avatar.png';
		}
		
		//useradmmin ads
		$this->Ad->bind(array('User','Map','Image','PrimaryImage'));
			
		$this->Ad->recursive = 0;

		$conditions = array('Ad.modified_by' => $this->Session->read('Auth.User.id'));

		$this->paginate = array(
		  	'recursive' => -1,
		    'conditions' => $conditions,
		);

		$this->set('ads', $this->paginate('Ad'));		
	
		
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

			ClassRegistry::init('Image')->saveImages($ret);
			$ret['key'] = ClassRegistry::init('Image')->id;
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

}