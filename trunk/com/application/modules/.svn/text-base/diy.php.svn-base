<?php
class diy extends App{
	
	function beforeFilter(){
 		
		global $LOCALE,$CONFIG;
		$this->assign('basedomain',$CONFIG['BASE_DOMAIN']); 
		$this->contentHelper = $this->useHelper('contentHelper');
			
		
	}
	
	function main(){
		
	
		$modul='4';
		$this->contentHelper->trackingviewmodul($modul);
		$listcontent =  $this->contentHelper->listcontentall($modul);
		//pr($listcontent['total']);exit;
		$this->assign('listcontent',$listcontent['result']);
		$this->assign('total',$listcontent['total']);
		
		$this->assign('modul','D.I.Y'); 
		$this->assign('contentmodul','Punya barang yang nggak dipake atau lagi butuh sebuah barang? Yuk bikin sendiri!'); 
		
		
		return $this->View->toString(TEMPLATE_DOMAIN_WEB .'/apps/diy.html');
	}
	
	function detail(){
		global $LOCALE,$CONFIG;
	//pr($_POST);
		$param=$this->_g('param');
		$this->contentHelper->trackingview($param);
		
		if($_POST['submit']==1)
		{
			$prosescomment =  $this->contentHelper->prosescomment();
		}
		$comment =  $this->contentHelper->selectcount($param);
		
		$this->assign('total',$comment['total']['total']);
		$this->assign('listcomment',$comment['result']);
		$listmeta =  $this->contentHelper->listmeta($param);
		$this->assign('listmeta',$listmeta);
		//List lastest Story
		$listcontent =  $this->contentHelper->listdetail($param);
		$selectlistcontent =  $this->contentHelper->selectlistdetail($param);		
		$relatedcontent =  $this->contentHelper->relatedcontent($param,$selectlistcontent);
		//pr($keyword);exit;
		
		$this->assign('listcontent',$listcontent);
		$this->assign('paramcerita',$param);
		$this->assign('relatedcontent',$relatedcontent);
		$this->assign('modul','diy');
		$this->assign('listkeyword',$selectlistcontent);		
		
		return $this->View->toString(TEMPLATE_DOMAIN_WEB .'/apps/style-detail.html');
		
		
	}
	
	function getdiy(){
		$modul='4';
		//$start = $this->_p('start');
		//pr($start);exit;
		$ajax =	 $this->contentHelper->listcontentall($modul);
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
