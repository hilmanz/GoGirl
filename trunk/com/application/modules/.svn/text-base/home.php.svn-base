<?php
class home extends App{
	
	function beforeFilter(){
 		
		global $LOCALE,$CONFIG;
		$this->assign('basedomain',$CONFIG['BASE_DOMAIN']); 
		$this->contentHelper = $this->useHelper('contentHelper');
		
		
	}
	
	function main(){
	global $LOCALE,$CONFIG;
		//list meta
		$listmeta =  $this->contentHelper->listmeta();
		//pr($listmeta);exit;
		$this->assign('listmeta',$listmeta);
		
		//pr($listmeta);exit;
		//List Banner
		$listbanner =  $this->contentHelper->listbanner();
		$this->assign('listbanner',$listbanner);
		
		//List lastest Story
		$listcontent =  $this->contentHelper->listcontent();
		// pr($listcontent);exit;
		$this->assign('listcontent',$listcontent);
		
		$listyoutube =  $this->contentHelper->listyoutube();
		// pr($listcontent);exit;
		$this->assign('listyoutube',$listyoutube);
		
		//List Content Popular
		$listcontentpopular =  $this->contentHelper->listcontentpopular();
		//pr($listcontentpopular);exit;
		$this->assign('listcontentpopular',$listcontentpopular);
		
		//List Feture Girl
		$listfeaturegirl =  $this->contentHelper->listfeaturegirl();
		$this->assign('listfeaturegirl',$listfeaturegirl);
		
		
		return $this->View->toString(TEMPLATE_DOMAIN_WEB .'/home.html');		
	}
	
}
?>
