<?php
class comment extends App{

	function beforeFilter(){
		global $LOCALE,$CONFIG;
		
		$this->commentHelper = $this->useHelper('commentHelper');
		$this->uploadHelper = $this->useHelper('uploadHelper');
		$this->assign('basedomain', $CONFIG['ADMIN_DOMAIN']);
		$this->assign('basedomainpath', $CONFIG['BASE_DOMAIN_PATH']);
		$this->assign('assets_domain', $CONFIG['ASSETS_DOMAIN_ADMIN']);
		$this->assign('locale', $LOCALE[1]);		
		$this->assign('pages', strip_tags($this->_g('page')));
		$this->assign('user',$this->user);
	}
	
	function main($start=null,$limit=1){

		
		$commentList = $this->commentHelper->commentList($start=null,$limit=10);
		//pr($storyList);exit;
		$time['time'] = '%H:%M:%S';
		
		$this->assign('total',$commentList['total']);
		$this->assign('list',$commentList['result']);
		
		return $this->View->toString(TEMPLATE_DOMAIN_ADMIN .'/apps/listcomment.html');
	}
	
	function pagingcomment(){
//pr('ss');exit;
		
		$commentList = $this->commentHelper->commentList($start=null,$limit=10);
		//pr($storyList);exit;
		if($commentList==true){
		print json_encode(array('status'=>true,'data'=>$commentList['result'],'total'=>$commentList['total']));
		}else{ 
			print json_encode(array('status'=>false));
		}
		
		exit;
		
	}
	
		
	function checkit(){

		
		$commentList = $this->commentHelper->checkcomment();
		//pr($storyList);exit;
		if($commentList==true){
		print json_encode(array('status'=>true));
		}else{ 
			print json_encode(array('status'=>false));
		}
		
		exit;
		
	}
	
	
	function incheckit(){

		
		$commentList = $this->commentHelper->checkinactives();
		//pr($storyList);exit;
		if($commentList==true){
		print json_encode(array('status'=>true));
		}else{ 
			print json_encode(array('status'=>false));
		}
		
		exit;
		
	}
	
	function hapus(){

	
	$inisiasi=$this->_g('param');
	$deletestory = $this->storyHelper->deletestory($inisiasi);
	if($deletestory==true)
			{
				sendredirect('story');
				die;
			}	
	
	}
	function addstory(){
	global $LOCALE,$CONFIG;
	//pr($_FILES);pr($_POST);exit;
	if($this->_p('submit')==1)
		{
		//pr('ss');exit;
			$path = $CONFIG['LOCAL_PUBLIC_ASSET']."imgregistrasi/";
			$img1['name']=@$_FILES['img_home']['name'];
			$img1['type']=@$_FILES['img_home']['type'];
			$img1['tmp_name']=@$_FILES['img_home']['tmp_name'];
			$img1['error']=@$_FILES['img_home']['error'];
			$img1['size']=@$_FILES['img_home']['size'];
			//pr($img);exit;
			$uploadfiles = $this->uploadHelper->uploadThisImage($img1,$path,1000,false,false);
			$img1=$uploadfiles['arrImage']['filename'];
			
			
			$img2['name']=@$_FILES['img_content']['name'];
			$img2['type']=@$_FILES['img_content']['type'];
			$img2['tmp_name']=@$_FILES['img_content']['tmp_name'];
			$img2['error']=@$_FILES['img_content']['error'];
			$img2['size']=@$_FILES['img_content']['size'];
			//pr($img);exit;
			$uploadfiles1 = $this->uploadHelper->uploadThisImage($img2,$path,1000,false,false);
			$img2=$uploadfiles1['arrImage']['filename'];
			//pr($uploadfilenya);exit;
			$addstory = $this->storyHelper->addstory($img1,$img2);
			if($addstory){
			sendRedirect('story');
			die;
			
			} 
		}
		
	$id=$this->_request('reguser');
	$this->assign('paramreg',$id);
	return $this->View->toString(TEMPLATE_DOMAIN_ADMIN .'/apps/addstory.html');
	
	}
	
	
}
?>