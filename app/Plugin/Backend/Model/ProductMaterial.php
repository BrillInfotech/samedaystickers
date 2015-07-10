<?php
class ProductMaterial extends BackendAppModel {

	var $name = 'ProductMaterial';
	var $useTable = 'product_materials';
	var $actsAs = array('Multivalidatable');
	var $validationSets = array(
	'NewMaterial'=>array(
			'name' => array(
				'notEmpty' =>array(
					'rule' 		=> 'notEmpty',
					'required' 	=> true,
					'message' 	=> 'Please enter Material name'
				),
				'isUnique' =>  array(				   
					'rule'		=> 'isUniqueName',
					'required'	=> true,
					'message' 	=> 'Material name already exist'	
				)
			)
			
		)
	);
	
	// Check unique name ID
	function isUniqueName() {
		if(isset($this->data['ProductMaterial']['name'])){
			$conditions = array();
			if(!empty($this->data['ProductMaterial']['id'])){
				$conditions['id <>'] 	= $this->data['ProductMaterial']['id'];
				$conditions['name'] = $this->data['ProductMaterial']['name'];
			}else{
				$conditions['name']  = $this->data['ProductMaterial']['name'];
			}			
			$get_rec = $this->find('count',array('conditions'=>$conditions));
			
			if($get_rec > 0){
				return false;
			}else{
				return true;
			}
		}
	}
};?>