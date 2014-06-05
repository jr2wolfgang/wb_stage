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


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $belongsTo = array(
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
	);

public function saveImages($data = null, $model = 'User') {


			if (!empty($data)) {

					$images['name'] = $data['file'];
					$images['model'] = $model;
					$images['foreign_key'] = $data['foreign_key'];
					$images['path'] =  $data['path'];
					$images['extension'] =  $data['extension'];

					$this->save($images);
			}
	}
	
}
