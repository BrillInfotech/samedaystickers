<?php
class StickersController extends BackendAppController {
	var $name = 'Stickers';
	var $uses = array('Backend.Sticker');
	var $components = array('Session', 'Auth', 'Backend.General');
	var $paginate = array();
	
	function index() {
		// breadcrumb define
		$breadcrumb['Home'] = Configure::read('AdminSiteUrl').'Dashboard';
		$breadcrumb['Sticker'] = 'javascript:void(0)';
		$this->set('breadcrumb', $breadcrumb);
		$breadcrumb['Home'] = Configure::read('AdminSiteUrl').'stickers/index';		
		$this->set('breadcrumb', $breadcrumb);
	
		$material_data = $this->paginate('Sticker');		
		$this->set('material_data', $material_data);
	}
	function create_sticker() {
		// breadcrumb define
		$breadcrumb['Home'] = Configure::read('AdminSiteUrl').'Dashboard';
		$breadcrumb['Sticker'] = 'javascript:void(0)';
		$this->set('breadcrumb', $breadcrumb);
		$breadcrumb['Home'] = Configure::read('AdminSiteUrl').'stickers/index';		
		$this->set('breadcrumb', $breadcrumb);
	}

};?>