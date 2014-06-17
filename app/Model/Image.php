<?php
App::uses('AppModel', 'Model');
/**
 * AccountType Model
 *
 * @property User $User
 */
class Image extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */

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
			)
		));

		$this->contain($model);

}

public function saveImages($ImageData = null, $model = 'User',$foreign_key = null) {


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


					
					$this->save($images);
				}


				
			}
	}
	
}
