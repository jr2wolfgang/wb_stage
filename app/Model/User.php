<?php
App::uses('AppModel', 'Model');
App::uses('SimplePasswordHasher', 'Controller/Component/Auth');
/**
 * User Model
 *
 * @property Group $Group
 * @property AccountType $AccountType
 */
class User extends AppModel { 
	
	public $recursive = -1;
	
	public $actsAs = array('Containable');

	public $validate = array(

		'email' => array(
			'email' => array(
				'rule' => array('email'),
			),
			'unique' => array(
				'rule'    => 'isUnique',
				'message' => 'This Email has already been taken.'
			)
		),
		'jrr_user' => array(
			
			'required' => array(
				'rule' => array('notEmpty'),
				'message' => 'You must enter a username.'
			),
			'length' => array(
				'rule' => array('between', 3, 15),
				'message' => 'Your username must be between 3 and 15 characters long.'
			),
			'unique' => array(
				'rule'    => 'isUnique',
				'message' => 'This username has already been taken.'
			)
		),
		'jrr_password' => array(
			'identicalFieldValues' => array( 
				'rule' => array('identicalFieldValues', 'rxt' ), 
				'message' => 'Please re-enter your password twice so that the values match' 
				) 
		),		
		'firstname' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
			),
		),
		'lastname' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
			),
		),
		'birthdate' => array(
			'date' => array(
				'rule' => array('date'),
			),
		),
		'gender' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
			),
		)
	
	);

	public function bind($model = array('Group')){

		$this->bindModel(array(
			'belongsTo' => array(
				'Group' => array(
					'className' => 'Group',
					'foreignKey' => 'group_id',
					'conditions' => '',
					'fields' => '',
					'order' => ''
				),
				'AccountType' => array(
					'className' => 'AccountType',
					'foreignKey' => 'account_type_id',
					'conditions' => '',
					'fields' => '',
					'order' => ''
				)
			),
			'hasMany' => array(
				'Ad' => array(
					'className' => 'Ad',
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
				),
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
				'Address' => array(
					'className' => 'Address',
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

	function identicalFieldValues( $field=array(), $compare_field=null )  
    { 
        foreach( $field as $key => $value ){ 
            $v1 = $value; 
            $v2 = $this->data[$this->name][ $compare_field ];                  
            if($v1 !== $v2) { 
                return FALSE; 
            } else { 
                continue; 
            } 
        } 
        return TRUE; 
    } 

	public function beforeSave($options = array()) {
	    if (isset($this->data[$this->alias]['jrr_password'])) {
	        $passwordHasher = new SimplePasswordHasher();
	        $this->data[$this->alias]['jrr_password'] = $passwordHasher->hash(
	            $this->data[$this->alias]['jrr_password']
	        );
	    }

	    return true;
	}

	public function LoginAction($data = null,$action = null) {

		$this->id = $data['User']['id'];
		return $this->saveField('is_login', $action);

	}

	public function CheckData($data) {

			$userData = $this->find('first',array('conditions' => array(
				'User.email' => $data['User']['email'])));
			return $userData;
	}


}

