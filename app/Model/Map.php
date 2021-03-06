<?php
App::uses('AppModel', 'Model');
App::uses('SimplePasswordHasher', 'Controller/Component/Auth');
/**
 * User Model
 *
 * @property Group $Group
 * @property AccountType $AccountType
 */
class Map extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */

	/** -----------------------------------------
	 * jRr added this */
	public $recursive = -1;
	
	public $actsAs = array('Containable');

	public function bind($model = array('Group')){

		$this->bindModel(array(
			'belongsTo' => array(
				'Ads' => array(
					'className' => 'Ad',
					'foreignKey' => 'ads_id',
					'conditions' => '',
					'fields' => '',
					'order' => ''
				)
			)
		));

		$this->contain($model);
	}

}

