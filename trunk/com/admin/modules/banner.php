<?php
class banner extends App{

	function beforeFilter(){
		global $LOCALE,$CONFIG;
		
		$this->bannerHelper = $this->useHelper('bannerHelper');
		$this->uploadHelper = $this->useHelper('uploadHelper');
		$this->assign('basedomain', $CONFIG['ADMIN_DOMAIN']);
		$this->assign('basedomainpath', $CONFIG['BASE_DOMAIN_PATH']);
		$this->assign('assets_domain', $CONFIG['ASSETS_DOMAIN_ADMIN']);
		$this->assign('locale', $LOCALE[1]);		
		$this->assign('pages', strip_tags($this->_g('page')));
		$this->assign('user',$this->user);
	}
	
	function main($start=null,$limit=1){

		
		$bannerList = $this->bannerHelper->banner($start=null,$limit=10);
		//pr($bannerList);exit;
		$time['time'] = '%H:%M:%S';
		
		$this->assign('total',$bannerList['total']);
		$this->assign('list',$bannerList['result']);
		
		return $this->View->toString(TEMPLATE_DOMAIN_ADMIN .'/apps/listbanner.html');
	}
	
	function pagingbanner(){
//pr('ss');exit;
		
		$bannerList = $this->bannerHelper->banner($start=null,$limit=10);
		//pr($storyList);exit;
		if($bannerList==true){
		print json_encode(array('status'=>true,'data'=>$bannerList['result'],'total'=>$bannerList['total']));
		}else{ 
			print json_encode(array('status'=>false));
		}
		
		exit;
		
	}
	function addbanner(){
	global $LOCALE,$CONFIG;
	if($this->_p('submit')==1)
		{
		//pr('ss');exit;
			$path = $CONFIG['LOCAL_PUBLIC_ASSET']."banner/";
			$img['name']=@$_FILES['imgbanner']['name'];
			$img['type']=@$_FILES['imgbanner']['type'];
			$img['tmp_name']=@$_FILES['imgbanner']['tmp_name'];
			$img['error']=@$_FILES['imgbanner']['error'];
			$img['size']=@$_FILES['imgbanner']['size'];
			//pr($img);exit;
			$uploadfiles = $this->uploadHelper->uploadThisImage($img,$path,1000,false,false);
			$uploadfilenya=$uploadfiles['arrImage']['filename'];
			
			//pr($uploadfilenya);exit;
			$addbanner = $this->bannerHelper->addbanner($uploadfilenya);
					
		}
	
	return $this->View->toString(TEMPLATE_DOMAIN_ADMIN .'/apps/addbanner.html');
	
	}
	function hapus(){

	//pr('ss');exit;
	$inisiasi=$this->_g('param');
	$deletebanner = $this->bannerHelper->deletebanner($inisiasi);
	if($deletebanner==true)
			{
				sendredirect('banner');
				die;
			}	
	
	}
		
	function checkit(){

		
		$storyList = $this->bannerHelper->checkbanner();
		//pr($storyList);exit;
		if($storyList==true){
		print json_encode(array('status'=>true));
		}else{ 
			print json_encode(array('status'=>false));
		}
		
		exit;
		
	}
	
	
	function incheckit(){

		
		$storyList = $this->bannerHelper->checkinactives();
		//pr($storyList);exit;
		if($storyList==true){
		print json_encode(array('status'=>true));
		}else{ 
			print json_encode(array('status'=>false));
		}
		
		exit;
		
	}
	
	
	function editbanner(){
	global $LOCALE,$CONFIG;
	//pr('ss');exit;
	$inisiasi=$this->_g('param');
	$this->assign('inisiasi',$inisiasi);
	
	//proses edit
	if($this->_p('submit')==1)
		{
		//pr('ss');exit;
			$inisiasi=$this->_p('inisiasi');
			if(@$_FILES['imgbanner'])
			{
			$path = $CONFIG['LOCAL_PUBLIC_ASSET']."banner/";
			$img['name']=@$_FILES['imgbanner']['name'];
			$img['type']=@$_FILES['imgbanner']['type'];
			$img['tmp_name']=@$_FILES['imgbanner']['tmp_name'];
			$img['error']=@$_FILES['imgbanner']['error'];
			$img['size']=@$_FILES['imgbanner']['size'];
			//pr($img);exit;
			$uploadfiles = $this->uploadHelper->uploadThisImage($img,$path,1000,false,false);
			$uploadfilenya=$uploadfiles['arrImage']['filename'];
			}else{
			$uploadfilenya='';
			}
			//pr($_POST);exit;
			$editbanner = $this->bannerHelper->editbanner($uploadfilenya,$inisiasi);
			if($editbanner){
				sendredirect('banner');
				die;
			}	
		}
		
		
	$selectbanner = $this->bannerHelper->selectbanner($inisiasi);
	//pr($selectbanner);exit;
	
	$this->assign('listnya',$selectbanner);
	
	return $this->View->toString(TEMPLATE_DOMAIN_ADMIN .'/apps/editbanner.html');
	}
	
	
}
?>