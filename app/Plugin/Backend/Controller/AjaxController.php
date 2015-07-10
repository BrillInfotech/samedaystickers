<?php
class AjaxController extends BackendAppController {
	var $name = 'Ajax';
	var $components = array('Session', 'Auth');
	//var $helpers = array('Form');
			
	function beforeFilter(){
		parent::beforeFilter();
	}
	
	function check_registration( $registration_no = null){
		$this->layout = false;
		$errors = array();
		$name = "";
		if(!empty($registration_no)){
			$this->loadModel('Backend.Patient');
			$record = $this->Patient->find('first', array(
								'conditions'=>array('Patient.registration_no'=>$registration_no),
								'fields'=>array('Patient.id','Patient.name')
								)
							);
			if(!empty($record)){
				$name = $record['Patient']['name'];
			}
		}
		
		echo json_encode(array('errors'=>$errors, 'name'=>$name));
		
		$this->autoRender = false;
	}
	
	
	
	
};?>