<?php
App::uses('AppModel', 'Model');
/**
 * AccountType Model
 *
 * @property User $User
 */
class Ad extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */

	public $recursive = -1;
	
	public $actsAs = array('Containable');
	
	public $validate = array(
		// 'name' => array(
		// 	'notEmpty' => array(
		// 		'rule' => array('notEmpty'),
		// 		//'message' => 'Your custom message here',
		// 		//'allowEmpty' => false,
		// 		//'required' => false,
		// 		//'last' => false, // Stop validation after this rule
		// 		//'on' => 'create', // Limit validation to 'create' or 'update' operations
		// 	),
		// ),
		// 'modified_by' => array(
		// 	'numeric' => array(
		// 		'rule' => array('numeric'),
		// 		//'message' => 'Your custom message here',
		// 		'allowEmpty' => true,
		// 		//'required' => false,
		// 		//'last' => false, // Stop validation after this rule
		// 		//'on' => 'create', // Limit validation to 'create' or 'update' operations
		// 	),
		// ),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Image' => array(
					'className' => 'User',
					'foreignKey' => false,
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




	
	public function bind($model = array('Group')){

		$this->bindModel(
			array(
			'belongsTo' => array(
				'User' => array(
					'className' => 'User',
					'foreignKey' => 'modified_by',
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
			'hasMany' => array(
				'Image' => array(
					'className' => 'Image',
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
				),
				'Addresses' => array(
					'className' => 'Addresses',
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
			'hasOne' => array(
				'Map' => array(
					'className' => 'Map',
					'foreignKey' => 'foreign_key',
					'dependent' => true,
					'conditions' => '',
					'fields' => '',
					'order' => '',
					'limit' => '',
					'offset' => '',
					'exclusive' => '',
					'finderQuery' => '',
					'counterQuery' => ''
					),
				'PrimaryImage' => array(
					'className' => 'Image',
					'foreignKey' => 'foreign_key',
					'dependent' => '',
					'conditions' => array('PrimaryImage.is_primary' => 1),
					'fields' => '',
					'order' => '',
					'limit' => '',
					'offset' => '',
					'exclusive' => '',
					'finderQuery' => '',
					'counterQuery' => ''
					)
			)
		
		)
		
		);

		$this->contain($model);
	}


	public function GetData($adsData = null) {
		

		if (!empty($adsData['Ad']['selected_img'])) {
				$image_array = explode(',',$adsData['Ad']['selected_img']);	

				foreach ($image_array as $key => $value) {
					$adsData['Image'][$key]['id'] = $value;
					$adsData['Image'][$key]['model'] = 'Ad';
					
				}
			return $adsData;	
		}
	
	}


	
}
