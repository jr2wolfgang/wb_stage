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


	    // Allow users to register and logout.
	    $this->Auth->allow('register', 'logout');
	}

	public function index() {
		$this->layout = 'default';				
	}

	public function ads(){
		$ads = ClassRegistry::init('Ad');
		$session_id = $this->Session->read('Auth');
		$session_id = $session_id['User']['id'];

		if ($this->request->is('post')) { 
			$ads->create();
			$this->request->data['Ad']['modified_by'] = $session_id;

			if($ads->save($this->request->data)){
				$this->Session->setFlash(__('The ads has been saved.'));
			}else{
				$this->Session->setFlash(__('The ads could not be saved. Please, try again.'));
			}
		}
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
			 	move_uploaded_file($_FILES["myfile"]["tmp_name"],$output_dir. $_FILES["myfile"]["name"]);
			 	 //echo "<br> Error: ".$_FILES["myfile"]["error"];
			 	 
				 	 $ret[$fileName]= $output_dir.$fileName;
			}
			else
			{
				$fileCount = count($_FILES["myfile"]['name']);
			  for($i=0; $i < $fileCount; $i++)
			  {
			  	$fileName = $_FILES["myfile"]["name"][$i];
				 	 $ret[$fileName]= $output_dir.$fileName;
			    move_uploaded_file($_FILES["myfile"]["tmp_name"][$i],$output_dir.$fileName );
			  }

			}
		}
		echo json_encode($ret);

		}
		exit();
	}

}