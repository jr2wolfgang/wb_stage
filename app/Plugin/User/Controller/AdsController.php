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
	    $this->loadModel('User.Image');
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

	  $this->Ad->bind(array('User','Map','Image','PrimaryImage'));
				
	  $this->Ad->recursive = 0;

	  $conditions = array('Ad.modified_by' => $this->Session->read('Auth.User.id'));
	  
	  $this->paginate = array(
          	'recursive' => -1,
            'conditions' => $conditions,
          	'order' => array('Ad.created DESC')
            
         );
		$ads =  $this->paginate();

	$this->set(compact('ads'));		
	}

	public function new_ad(){

		
		$ads = ClassRegistry::init('Ad');
		
		$this->loadModel('User.User');

		$User = ClassRegistry::init('User');

		$User->bind(array('Image'));

		$images = $User->read(null,$this->Session->read('Auth.User.id'));



		if ($this->request->is('post')) {

			$this->Ad->create();

			$this->request->data['Ad']['modified_by'] = $this->request->data['Map']['modified_by'] = $this->request->data['Address']['modified_by'] = $images['User']['id'];

			$AdsData = $this->Ad->GetData($this->request->data);
			
			$this->Ad->bind(array('Map','Address'));

			$this->request->data['Address']['id'] = '';

			$this->request->data['Address']['model'] = 'Ad';

			$this->request->data['Ad']['slug'] = $this->Ad->getUniqueUrl(Inflector::slug($this->request->data['Ad']['name']));


		if ($this->Ad->saveAssociated($this->request->data)) {

			ClassRegistry::init('Image')->saveImages($AdsData['Image'],'Ad',$this->Ad->id,$this->request->data['PrimaryImage']);
			
			$this->Session->setFlash(__('The ads has been saved.'),'success');

			$this->redirect(array('action' => 'index'));
				
		} else {
					
			$this->Session->setFlash(__('The ads could not be saved. Please, try again.'),'error');
		}
		
		}

		$this->create_json_data();

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
			
			ClassRegistry::init('Image')->saveImages($AdsData['Image'],'User');
				
			

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
				$this->Session->setFlash(__('The Maps has been saved.'),'success');
			}else{
				$this->Session->setFlash(__('The Maps could not be saved. Please, try again.'),'error');
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
			$this->Session->setFlash(__('Ad has been deleted.'),'warning');
		} else {
			$this->Session->setFlash(__('Ad could not be deleted. Please, try again.'),'error');
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function edit($id = null) {
		
		$User = ClassRegistry::init('User');

		if (!$this->Ad->exists($id)) {
			throw new NotFoundException(__('Invalid group'));
		}
		if ($this->request->is(array('post', 'put'))) {

			$AdsData = $this->Ad->GetData($this->request->data);
			
			$current_id = $this->request->data['Ad']['id'];

			$this->Ad->bind(array('Image','Address'));

			$this->request->data['Ad']['modified_by'] = $this->request->data['Map']['modified_by'] = $this->request->data['Address']['modified_by'] = $this->Session->read('Auth.User.id');

			$this->request->data['Address'][0] = $this->request->data['Address'];

			$this->request->data['Ad']['slug'] = $this->Ad->getUniqueUrl(Inflector::slug($this->request->data['Ad']['name']));
		
			if ($this->Ad->saveAssociated($this->request->data,array('deep' => true))) {
				
				ClassRegistry::init('Address')->save($this->request->data['Address']);

				ClassRegistry::init('Image')->saveImages($AdsData['Image'],'Ad',$current_id,$this->request->data['PrimaryImage']);
				
				$this->Session->setFlash(__('The Ads has been saved.'),'success');
				return $this->redirect(array('action' => 'index'));

			} else {
				$this->Session->setFlash(__('The Ads could not be saved. Please, try again.'),'error');
			}
		} else {
			$options = array('conditions' => array('Ad.id' => $id));
				
			$this->Ad->bind(array('Image','PrimaryImage','Address'));
			$this->request->data = $this->Ad->find('first', $options);

			$User->bind(array('Image'));

			$images = $User->read(null,$this->Session->read('Auth.User.id'));

			
		}

		 $this->create_json_data();

		$this->set(compact('image','images'));


	}

	public function redactor_upload_image() {

		 	$isHTTPS = (isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == "on");
            $port = (isset($_SERVER["SERVER_PORT"]) && ((!$isHTTPS && $_SERVER["SERVER_PORT"] != "80") || ($isHTTPS && $_SERVER["SERVER_PORT"] != "443")));
            $port = ($port) ? ':'.$_SERVER["SERVER_PORT"] : '';
            $url = ($isHTTPS ? 'https://' : 'http://').$_SERVER["SERVER_NAME"];

			$dir = App::pluginPath('User') . WEBROOT_DIR.DS.'img/redactor_uploads/';

		
			$_FILES['file']['type'] = strtolower($_FILES['file']['type']);


            if ($_FILES['file']['type'] == 'image/png' 
            || $_FILES['file']['type'] == 'image/jpg' 
            || $_FILES['file']['type'] == 'image/gif' 
            || $_FILES['file']['type'] == 'image/jpeg'
            || $_FILES['file']['type'] == 'image/pjpeg')
            {
             
            $filename = $_FILES['file']['name'];
            $file = $dir.$filename;

            copy($_FILES['file']['tmp_name'], $file);
            
            $array = array(
                    'filelink' => Configure::read('folder_name').'user/img/redactor_uploads/'.$filename
            );


            echo stripslashes(json_encode($array));   
            
            exit();
        }

	}


	 public function create_json_data() {


        //$directory = WWW_ROOT . "/images/post_upload/";

        $directory = App::pluginPath('User') . WEBROOT_DIR.DS.'img/redactor_uploads/';

        $imageDirectory = Configure::read('folder_name').'user/img/redactor_uploads/';


        if (!is_dir($directory)) {
            exit('Invalid diretory path');
        }

        $files = array();

        foreach (scandir($directory) as $file) {
            if ('.' === $file)
                continue;
            if ('..' === $file)
                continue;

            $files[] = $file;
        }
       
         $data = array();

        $index = 1;

        foreach ($files as $key => $list) {
        	if ($key % 10 == 0 && $key != 0 ) {
        		 $data[] = '{ "thumb": "'. $imageDirectory . $list . '", "image": "'.$imageDirectory. $list . '", "title": "Image' . $key . '", "folder": "Folder '.$index++.'" },';
 
        	} else {
        		 $data[] = '{ "thumb": "'. $imageDirectory . $list . '", "image": "'.$imageDirectory. $list . '", "title": "Image' . $key . '", "folder": "Folder '.$index.'" },';
 
        	}


       }


        $new_data = implode('', $data);
        $new_data = trim($new_data);

        $new_data_replace = substr_replace($new_data, " ", -1);


        $content = '[' . $new_data_replace . ']';
        $fp = fopen(App::pluginPath('User') . WEBROOT_DIR . DS . "js" . DS . "json_data" . DS . "new_data.json", "wb");
        fwrite($fp, $content);
        fclose($fp);
    }



}