<?php
class style extends App{
	
	function beforeFilter(){
 		
		global $LOCALE,$CONFIG;
		$this->assign('basedomain',$CONFIG['BASE_DOMAIN']); 
		$this->contentHelper = $this->useHelper('contentHelper');
		
	}
	
	function main(){
		global $LOCALE,$CONFIG;
	
		//List lastest Story
		$modul='1';
		$this->contentHelper->trackingviewmodul($modul);
		$listcontent =  $this->contentHelper->listcontentall($modul);
		
		//pr($listcontent);exit;
		$this->assign('listcontent',$listcontent['result']);
		$this->assign('total',$listcontent['total']);
		$this->assign('modul','STYLE'); 
		$this->assign('contentmodul','Nggak cuma soal fashion terbaru, tapi juga gimana kita ngebangun karakter dari cara kita memilih gaya dan nunjukkin diri kita.'); 
		
		
		return $this->View->toString(TEMPLATE_DOMAIN_WEB .'/apps/style.html');
		
		
	}
	
	function detail(){
		global $LOCALE,$CONFIG;
	//pr($_POST);
		$param=$this->_g('param');
		
		$this->contentHelper->trackingview($param);
		
		if($_POST['submit']==1)
		{
			$idcerita=strip_tags($this->_p('idcerita'));
			$prosescomment =  $this->contentHelper->prosescomment();
			sendRedirect("{$CONFIG['BASE_DOMAIN']}style/detail?param={$idcerita}");
			return $this->out(TEMPLATE_DOMAIN_WEB . '/login_message.html');
			die();
		}
		$comment =  $this->contentHelper->selectcount($param);
		
		$this->assign('total',$comment['total']['total']);
		$this->assign('listcomment',$comment['result']);
		//List lastest Story
		$listcontent =  $this->contentHelper->listdetail($param);
		//pr($listcontent);exit;
		$this->assign('listcontent',$listcontent);
		$this->assign('paramcerita',$param);
		
		return $this->View->toString(TEMPLATE_DOMAIN_WEB .'/apps/style-detail.html');
		
		
	}
	
	function getStyle(){
		$modul='1';
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
