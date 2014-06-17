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
