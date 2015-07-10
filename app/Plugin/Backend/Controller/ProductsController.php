<?php
class ProductsController extends BackendAppController {
	var $name = 'Products';
	var $uses = array('Backend.Product', 'Backend.ProductMaterial',);
	var $components = array('Session', 'Auth', 'Backend.General');
	var $paginate = array();
	
	function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow('create_material', 'material', 'delete_material', 'change_status');
	}
	 function create_material($material_id = null) {	
		// breadcrumb define
		$breadcrumb['Home'] = Configure::read('AdminSiteUrl').'Dashboard';
		$breadcrumb['Material'] = 'javascript:void(0)';
		$this->set('breadcrumb', $breadcrumb);
		$breadcrumb['Home'] = Configure::read('AdminSiteUrl').'backend/dashboard';
		$breadcrumb['Material'] = Configure::read('AdminSiteUrl').'products/material';
		$this->set('breadcrumb', $breadcrumb);
		if(!empty($this->data)){
		
			$this->ProductMaterial->set($this->data);
			$this->ProductMaterial->setValidation('NewMaterial');
			
			if($this->ProductMaterial->validates()){
				$this->request->data['ProductMaterial']['url'] = $this->General->parseSlug($this->data['ProductMaterial']['name']);
				if(empty($material_id)){
					$this->ProductMaterial->create();
				}
				$this->ProductMaterial->save($this->data);
				
				if(empty($material_id)){
					$this->Session->setFlash(__('Material has been created.'), null, null,'success');
				}else{
					$this->Session->setFlash(__('Material has been updated.'), null, null,'success');
				}
				$this->redirect(array('controller'=>'products', 'action'=>'material'));	
			}
		}else{
			if(!empty($material_id)){
				$this->request->data = $this->ProductMaterial->findById( $material_id );
				
			}
		}
	
	}
	function material() {
		// breadcrumb define
		$breadcrumb['Home'] = Configure::read('AdminSiteUrl').'Dashboard';
		$breadcrumb['Material'] = 'javascript:void(0)';
		$this->set('breadcrumb', $breadcrumb);
		$breadcrumb['Home'] = Configure::read('AdminSiteUrl').'Products/material';		
		$this->set('breadcrumb', $breadcrumb);
	
		$material_data = $this->paginate('ProductMaterial');		
		$this->set('material_data', $material_data);
	}
	function delete_material( $material_id = null){
		if(!empty($material_id)){

			$this->ProductMaterial->deleteAll(
				array('ProductMaterial.id'=>$material_id)
			);
		}
		$this->Session->setFlash(__('Material has been deleted'), null, null, 'success');
		$this->redirect(array('controller'=>'products', 'action'=>'material'));
	}
	
	function change_status_material( $material_id = null, $status = null ){
		if(empty($status)){
			$status = 0;
		}
		if(!empty($material_id)){
				$this->ProductMaterial->updateAll(
							array('ProductMaterial.enabled'=> $status),
							array('ProductMaterial.id'=> $material_id)
					);
						
					
		}
		$this->Session->setFlash(__('Material status has been updated.'), null, null,'success');
		$this->redirect(array('controller'=>'products', 'action'=>'material'));
	}
	
	


};?>