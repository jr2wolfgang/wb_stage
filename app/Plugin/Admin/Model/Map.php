<?php
App::uses('AppModel', 'Model');


class Ad extends AdminAppModel {

	public $recursive = -1;
	
	public $actsAs = array('Containable');

	public function bind($model = array('Group')){

		$this->bindModel(array(
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
				),
				
			),
			'hasOne' => array(
			'Map' => array(
					'className' => 'Map',
					'foreignKey' => false,
					'dependent' => true,
					'conditions' => array('Map.foreign_key = Ad.id'),
					'fields' => '',
					'order' => '',
					'limit' => '',
					'offset' => '',
					'exclusive' => '',
					'finderQuery' => '',
					'counterQuery' => ''
				)
			)
		),
		
		);

		$this->contain($model);
	}


	
}
