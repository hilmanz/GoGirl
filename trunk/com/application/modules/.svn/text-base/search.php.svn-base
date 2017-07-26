<?php
class search extends App{
	
	function beforeFilter(){
 		
		global $LOCALE,$CONFIG;
		$this->assign('basedomain',$CONFIG['BASE_DOMAIN']); 
		$this->searchHelper = $this->useHelper('searchHelper');
		
	}
	
	function main(){
		$parameter=$this->_p('param');
		//pr($parameter);exit;
		if($parameter)
		{
		$listcontent=$this->searchHelper->search($parameter);
		$this->assign('listcontent',$listcontent);
		$this->assign('modul','SEARCH'); 
		$this->assign('contentmodul',$parameter); 
		return $this->View->toString(TEMPLATE_DOMAIN_WEB .'/apps/search.html');	
		}else{
		sendRedirect('home');die;
		}
	}
	
}
?>
