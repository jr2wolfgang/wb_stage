<?php
App::uses('AppModel', 'Model');
/**
 * AccountType Model
 *
 * @property User $User
 */
class Ad extends AppModel {


	public $recursive = -1;
	
	public $actsAs = array('Containable');
	
	public $validate = array();

	 public $usetable = 'Ads';
	


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
				'Address' => array(
					'className' => 'Address',
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
					),
				
			)
		
		)
		
		,false);

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




	public function getUniqueUrl($slugName = null, $field = 'slug') 
    { 
          
        $currentUrl = $this->_getStringAsURL($slugName); 
         
        $conditions = array('Ad.slug like' => '%'.$slugName.'%'); 
         
        $result = $this->find('all',array('conditions' => $conditions)); 
         
        if ($result !== false && count($result) > 0) 
        { 
            $sameUrls = array(); 
             
            foreach($result as $record) 
            { 
                $sameUrls[] = $record[$this->name][$field]; 
            } 
        } 
       
        if (isset($sameUrls) && count($sameUrls) > 0) 
        { 
            $currentBegginingUrl = $currentUrl; 
     
            $currentIndex = 1; 
     
            while($currentIndex > 0) 
            { 
                if (!in_array($currentBegginingUrl . '_' . $currentIndex, $sameUrls)) 
                { 
	            	 if ( count($result) > 0) {
	            	 	
	            	 	$currentUrl = $currentBegginingUrl . '_' . $currentIndex; 

	            	 } else {
	            	 	$currentUrl = $currentBegginingUrl;

	            	 }
                	
     
                    $currentIndex = -1; 
                } 
     
                $currentIndex++; 
            } 
        } 
         
        return $currentUrl; 
    }


   public function _getStringAsURL($string = null) 
    { 
         
        $currentMaximumURLLength = 100; 
         
        $string = strtolower($string); 
         
        $string = preg_replace('/[^a-z0-9_]/i', '_', $string); 
        $string = preg_replace('/_[_]*/i', '_', $string); 
         
         
        if (strlen($string) > $currentMaximumURLLength) 
        { 
            $string = substr($string, 0, $currentMaximumURLLength); 
        } 
         
         
        $string = preg_replace('/_$/i', '', $string); 
        $string = preg_replace('/^_/i', '', $string); 
         
        return $string; 
    }  

	
}
