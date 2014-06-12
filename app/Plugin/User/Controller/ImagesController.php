<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class ImagesController  extends UserAppController  {


	public function index() {

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

				$newFilename = str_replace(' ', '-', $fileName); // Replaces all spaces with hyphens.
				$newFilename = preg_replace('/[^A-Za-z0-9.\-]/', '', $newFilename);

			 	$pathinfo = pathinfo($output_dir. $_FILES["myfile"]["name"]);

			 	move_uploaded_file($_FILES["myfile"]["tmp_name"],$output_dir.$newFilename);
			 	 //echo "<br> Error: ".$_FILES["myfile"]["error"];
		 	 	$ret['extension'] = $pathinfo['extension'];
			 	
			 	$ret[$fileName]= $output_dir.$newFilename;
			 	
			 	$ret['file'] = $newFilename;
			}
			else
			{
				$fileCount = count($_FILES["myfile"]['name']);
			  for($i=0; $i < $fileCount; $i++)
			  {
			  	$pathinfo = pathinfo($output_dir.$fileName);

			  	$fileName = $_FILES["myfile"]["name"][$i];

			  	$newFilename = str_replace(' ', '-', $fileName); // Replaces all spaces with hyphens.
				$newFilename = preg_replace('/[^A-Za-z0-9.\-]/', '', $newFilename);


				$ret[$fileName]= $output_dir.$newFilename;
				$ret['extension']= $pathinfo['extension'];
				$ret['file'] = $fileName;
			    move_uploaded_file($_FILES["myfile"]["tmp_name"][$i],$output_dir.$newFilename );
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


	public function remove(){

		pr($this->request->data);
			
		if (!empty( $this->request->data )) {

			$imageIds = $this->request->data['img_id'];

			$condition = array('Image.id' => $imageIds );



			foreach ($imageIds as $key => $value) {
				$imgDetail = $this->Image->find('first', array(
				'conditions'=>array('id'=>$value),
				'fields'=>array('name','path')
				));

				/* if (!empty($imgDetail)) {

					unlink('../webroot/img/uploads/'.$imgDetail['Image']['name']);
				
				} */
				$this->Image->delete($value);
			}


			/* if ( $this->Image->deleteAll($condition,false) ) {


			} */

		}
		exit();
	}
}

?>