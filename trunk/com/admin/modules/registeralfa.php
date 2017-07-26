<?php
class registeralfa extends App{

	function beforeFilter(){
		global $LOCALE,$CONFIG;
		
		$this->registerHelper = $this->useHelper('registerHelper');
		
		$this->assign('basedomain', $CONFIG['ADMIN_DOMAIN']);
		$this->assign('basedomainpath', $CONFIG['BASE_DOMAIN_PATH']);
		$this->assign('assets_domain', $CONFIG['ASSETS_DOMAIN_ADMIN']);
		$this->assign('locale', $LOCALE[1]);		
		$this->assign('pages', strip_tags($this->_g('page')));
		$this->assign('user',$this->user);
	}
	
	function main(){

		
		
		$registerList = $this->registerHelper->registeralfa($start=null,$limit=10);
		//pr($registerList);exit;
		$time['time'] = '%H:%M:%S';
		
		$this->assign('total',$registerList['total']);
		$this->assign('list',$registerList['result']);
		
		return $this->View->toString(TEMPLATE_DOMAIN_ADMIN .'/apps/listregalfa.html');
	}
	
	

	function addregister(){
	global $LOCALE,$CONFIG;
	return $this->View->toString(TEMPLATE_DOMAIN_ADMIN .'/apps/addregister.html');
	
	}
	
	
}
?>