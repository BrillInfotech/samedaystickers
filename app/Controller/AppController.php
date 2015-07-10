<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
 
 
class AppController extends Controller {
	var $helpers = array('Form');
	var $uses = array();
	var $components = array('Session');
	function beforeFilter(){
		
		/*Set Default Title*/
		$this->set('title_for_layout', 'Same Day Custom Stickers');
	
		
		$this->set('accountDetail', $this->getAccountDetail());
		$this->set('getWebsitesSetting', $this->getWebsitesSetting());
		
	}
	
	/*Get Religion List*/
	
	
	
	/*Check is logon*/
	function isLogin(){
		if($this->Session->check('unid')){
			return true;
		}else{
			$this->redirect('/');
		}
	}
	/*Get User Detals*/
	function getAccountDetail(){
		if($this->Session->check('unid')){
			$data = $this->Member->find('first', array(
							'conditions'=>array('Member.id'=>$this->Session->read('unid')),
							)
						);
			return $data;			
		}
	}
	/*Get Websites Detals*/
	function getWebsitesSetting(){
			$this->loadModel('Setting');
			$data = $this->Setting->find('first');
			return $data;			
		}
	
	function ajaxLogout(){
		$this->layout = false;
		$this->Session->delete('unid');
		$this->autoRender = false;
	}
}
