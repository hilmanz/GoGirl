<?php
class video extends App{
	
	function beforeFilter(){
 		
		global $LOCALE,$CONFIG;
		$this->assign('basedomain',$CONFIG['BASE_DOMAIN']); 
			$this->contentHelper = $this->useHelper('contentHelper');
		
	}
	
	function main(){
		//List lastest Story
		
		$modul='6';
		$listvideoall =  $this->contentHelper->listvideoall();
		$listallyoutube =  $this->contentHelper->listallyoutube();
		
		$listyoutube =  $this->contentHelper->listyoutube();
		
		//$this->assign('listvideoall',$listvideoall['result']);
		$this->assign('total',$listvideoall['total']);
		$this->assign('listyoutube',$listyoutube);
		$this->assign('listallyoutube',$listvideoall['result']);
		//pr($listvideoall['result']);
		//exit;	
		
		$this->assign('modul','MORE VIDEO'); 
		
				
		return $this->View->toString(TEMPLATE_DOMAIN_WEB .'/apps/video.html');
	}
	
	function getvideo(){
		$modul='6';
		//$start = $this->_p('start');
		//pr($start);exit;
		$ajax =	 $this->contentHelper->listvideoall();
		//pr($ajax);exit;
	
		if ($ajax){ 
			print json_encode(array('status'=>true, 'data'=>$ajax['result'],'total'=>$ajax['total']));
		}else{ 
			print json_encode(array('status'=>false));
		}
		
		exit;
	}	
	
	function selectvideo(){

		
		$ajax = $this->contentHelper->selectyoutube();
		//pr('ghhh');exit;
		//pr($ajax);exit;
		if ($ajax){ 
			print json_encode(array('status'=>true, 'data'=>$ajax['result'],'total'=>$ajax['total']));
		}else{ 
			print json_encode(array('status'=>false));
		}
		exit;
		
	}
	
}
?>
