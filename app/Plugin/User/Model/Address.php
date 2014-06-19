<?php
App::uses('AppModel', 'Model');
/**
 * AccountType Model
 *
 * @property User $User
 */
class Address extends AppModel {

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
				'User' => array(
					'className' => 'User',
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
				'Ad' => array(
					'className' => 'Ad',
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
				)
			)
		)
		
		);

		$this->contain($model);
	}

	public function SavemyAddress($data = null) {
		
			$this->id = $data['User']['id'];
			return $this->saveField('is_login', $action);

	}


	
}
