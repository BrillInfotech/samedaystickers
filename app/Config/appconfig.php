<?php
	$config = array(); 
	/* @ Configure SMTP Details  */	
	Configure::write('SMTP.Options', array(
		'port'		=> '465',
		'timeout'	=> '30',
		'host' 		=> 'ssl://smtp.gmail.com',
		'username'	=> 'mysmtp4@gmail.com',
		'password'	=> '9261586227'
	));
		
	Configure::write('AdminPluginFolder', 'backend');
	Configure::write('AdminSiteUrl', Configure::read('SiteSettings.siteUrl').Configure::read('AdminPluginFolder').'/');
		
	Configure::write('UserRole', array('1'=>'Super Admin', '2'=>'Admin', '3'=>'User'));
	
	Configure::write('WebsiteLogo.RelativePath',$_SERVER['DOCUMENT_ROOT'].Configure::read('SiteSettings.applicationFolder').'app/webroot/img/data/logo/' );
	Configure::write('WebsiteLogo.AbsolutePath', Configure::read('SiteSettings.siteUrl').'img/data/logo/');
		
	Configure::write('UserPhoto.RelativePath',$_SERVER['DOCUMENT_ROOT'].Configure::read('SiteSettings.applicationFolder').'app/webroot/img/data/user/' );
	Configure::write('UserPhoto.AbsolutePath', Configure::read('SiteSettings.siteUrl').'img/data/user/');
	
	Configure::write('PDF_File_Relative', $_SERVER['DOCUMENT_ROOT'].Configure::read('SiteSettings.applicationFolder').'/data/pdf/');
	Configure::write('PDF_File_Absolute', Configure::read('SiteSettings.siteUrl').'data/pdf/');
	?>