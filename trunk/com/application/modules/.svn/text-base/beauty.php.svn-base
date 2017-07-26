<?php
class beauty extends App{
	
	function beforeFilter(){
 		
		global $LOCALE,$CONFIG;
		$this->assign('basedomain',$CONFIG['BASE_DOMAIN']); 
		$this->contentHelper = $this->useHelper('contentHelper');
			
		
	}
	
	function main(){
			$modul='2';
		$listcontent =  $this->contentHelper->listcontentall($modul);
		//pr($listcontent);exit;
		$this->assign('listcontent',$listcontent);
		
		$this->assign('modul','ENVENT\'S'); 
		$this->assign('contentmodul','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'); 
		
		
		return $this->View->toString(TEMPLATE_DOMAIN_WEB .'/apps/events.html');
	}
	
}
?>
