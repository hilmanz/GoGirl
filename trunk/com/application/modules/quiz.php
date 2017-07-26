<?php
class quiz extends App{
	
	function beforeFilter(){
 		
		global $LOCALE,$CONFIG;
		$this->assign('basedomain',$CONFIG['BASE_DOMAIN']); 
		$this->contentHelper = $this->useHelper('contentHelper');
		
	}
	
	function main(){
		global $LOCALE,$CONFIG;
		$listquiz =  $this->contentHelper->listquiz();
		//pr($listquiz);exit;
		$this->assign('listquiz',$listquiz);
		return $this->View->toString(TEMPLATE_DOMAIN_WEB .'apps/quiz.html');		
	}
	
}
?>
