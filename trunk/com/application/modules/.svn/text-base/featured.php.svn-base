<?php
class featured extends App{
	
	function beforeFilter(){
 		
		global $LOCALE,$CONFIG;
		$this->assign('basedomain',$CONFIG['BASE_DOMAIN']); 
		
		
	}
	
	function main(){
		echo"aaaa";die;
		if(strip_tags($this->_g('page'))=='home') $this->log('surf','home');
		return $this->View->toString(TEMPLATE_DOMAIN_WEB .'/home.html');		
	}
	
}
?>
