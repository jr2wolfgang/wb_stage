<?php
App::uses('AppModel', 'Model');
/**
 * AccountType Model
 *
 * @property User $User
 */
class Image extends AppModel {


public $recursive = -1;
public $actsAs = array('Containable');

public function bind($model = array('Group')){
	$this->bindModel(array(
		'belongsTo' => array(
			'Ad' => array(
				'className' => 'Ad',
				'foreignKey' => 'foreign_key',
				'dependent' => false,
				'conditions' => '',
				'fields' => '',
				'order' => '',
				'limit' => '',
				'offset' => '',
				'exclusive' => '',
				'finderQuery' => '',
				'counterQuery' => ''
			)
		),
	)

	);

$this->contain($model);
}

	
public function saveImages($ImageData = null, $model = 'User',$foreign_key = null,$primary = null) {

			if (!empty($ImageData)) {

				foreach ($ImageData as $key => $data) {
					
					if (!empty($data['id'])) {
						$images['id'] = $data['id'];
					}

					if (!empty($data['file'])) {
						$images['name'] = $data['file'];
					}

					if (!empty($data['model'])) {
						$images['model'] = $model;
					}

					if (!empty($foreign_key)) {
						$images['foreign_key'] = $foreign_key;
					} else {
						$images['foreign_key'] =  $data['foreign_key'];	
					}

					if (!empty($data['path'])) {
						$images['path'] = $data['path'];
					}
					if (!empty($data['extension'])) {
						$images['extension'] = $data['extension'];
					}
					if ($data['id'] == $primary) {
						$images['is_primary'] = 1;
					} else {
						$images['is_primary'] = 0;	
					}	

					
					$this->save($images);
				}

				
			}
	}


	function beforeDelete($options = array()){
		$relatedImages = $this->find('all',array('conditions' => array('Image.id' => $this->id)));
		$this->relatedImages = $relatedImages;
		$this->currentId = $this->id; //I am not sure if this is necessary
		return true;
	}

	function afterDelete(){
	  $relatedImages = $this->relatedImages;
	  $containerId = $this->currentId; //probably this could be just $this->id;
	  foreach ($relatedImages as $image) {
	  	
	  	$path = App::pluginPath('User') . WEBROOT_DIR.DS.'img/uploads/';

	  	$file = new File($path.$image['Image']['name']);
		$file->delete();
	 
	    }
	}

	function beforeSave($options = array()) {

		//pr($this->data);
		/* $this->updateAll(
		array('Image.is_primary' => '0'), 
		array('Image.foreign_key' => $this->data['Image']['foreign_key'])); */
	
    	return true;
	}
}
