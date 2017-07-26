<?php
class meta extends App{
	
	function beforeFilter(){
 		
		global $LOCALE,$CONFIG;
		$this->assign('basedomain',$CONFIG['BASE_DOMAIN']); 
		$this->contentHelper = $this->useHelper('contentHelper');
		
		
	}
	
	function main(){
	global $LOCALE,$CONFIG;
	//pr('ss');exit;
		
		$listmeta =  $this->contentHelper->listmeta();
		//pr($listmeta);exit;
		$this->assign('listmeta',$listmeta);
		$this->assign('ceklistmeta','tes 123456789');
		return $this->View->toString(TEMPLATE_DOMAIN_WEB .'/header.html');		
	}
	
}
?>
