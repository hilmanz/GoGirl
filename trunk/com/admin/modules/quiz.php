<?php
class quiz extends App{

	function beforeFilter(){
		global $LOCALE,$CONFIG;
		
		$this->quizHelper = $this->useHelper('quizHelper');
		$this->uploadHelper = $this->useHelper('uploadHelper');
		$this->assign('basedomain', $CONFIG['ADMIN_DOMAIN']);
		$this->assign('basedomainpath', $CONFIG['BASE_DOMAIN_PATH']);
		$this->assign('assets_domain', $CONFIG['ASSETS_DOMAIN_ADMIN']);
		$this->assign('locale', $LOCALE[1]);		
		$this->assign('pages', strip_tags($this->_g('page')));
		$this->assign('user',$this->user);
	}
	
	function main($start=null,$limit=1){

		
		$quizList = $this->quizHelper->quizList($start=null,$limit=10);
	//pr($quizList);exit;
		$time['time'] = '%H:%M:%S';
		
		$this->assign('total',$quizList['total']);
		$this->assign('list',$quizList['result']);
		
		return $this->View->toString(TEMPLATE_DOMAIN_ADMIN .'/apps/listquiz.html');
	}
	
	function pagingquiz(){
//pr('ss');exit;
		
		$quizList = $this->quizHelper->quizList($start=null,$limit=10);
		//pr($quizList);exit;
		if($quizList==true){
		print json_encode(array('status'=>true,'data'=>$quizList['result'],'total'=>$quizList['total']));
		}else{ 
			print json_encode(array('status'=>false));
		}
		
		exit;
		
	}
	
		
	function checkit(){

		
		$quizList = $this->quizHelper->checkquiz();
		//pr($quizList);exit;
		if($quizList==true){
		print json_encode(array('status'=>true));
		}else{ 
			print json_encode(array('status'=>false));
		}
		
		exit;
		
	}
	
	
	function incheckit(){

		
		$quizList = $this->quizHelper->checkinactives();
		//pr($quizList);exit;
		if($quizList==true){
		print json_encode(array('status'=>true));
		}else{ 
			print json_encode(array('status'=>false));
		}
		
		exit;
		
	}
	
	function hapus(){

	
	$inisiasi=$this->_g('param');
	$deletequiz = $this->quizHelper->deletequiz($inisiasi);
	if($deletequiz==true)
			{
				sendredirect('quiz');
				die;
			}	
	
	}
	
	function edit(){
	global $LOCALE,$CONFIG;
	//pr('ss');exit;
	$inisiasi=$this->_g('id');
	$this->assign('inisiasi',$inisiasi);
	
	//proses edit
	if($this->_p('submit')==1)
		{
		//pr('ss');exit;
			$inisiasi=$this->_p('inisiasi');
			if(@$_FILES['imgquiz'])
			{
			$path = $CONFIG['LOCAL_PUBLIC_ASSET']."quiz/";
			$img['name']=@$_FILES['imgquiz']['name'];
			$img['type']=@$_FILES['imgquiz']['type'];
			$img['tmp_name']=@$_FILES['imgquiz']['tmp_name'];
			$img['error']=@$_FILES['imgquiz']['error'];
			$img['size']=@$_FILES['imgquiz']['size'];
			//pr($img);exit;
			$uploadfiles = $this->uploadHelper->uploadThisImage($img,$path,1000,false,false);
			$uploadfilenya=$uploadfiles['arrImage']['filename'];
			}else{
			$uploadfilenya='';
			}
			//pr($_POST);exit;
			$editquiz = $this->quizHelper->editquiz($uploadfilenya,$inisiasi);
			if($editquiz){
				sendredirect('quiz');
				die;
			}	
		}
		
		
	$selectquiz = $this->quizHelper->selectquiz($inisiasi);
//pr($selectquiz);exit;
	
	$this->assign('listnya',$selectquiz);
	
	return $this->View->toString(TEMPLATE_DOMAIN_ADMIN .'/apps/editquiz.html');
	}
	
	
	function addquiz(){
	global $LOCALE,$CONFIG;
	// pr($_FILES);pr($_POST);exit;
	if($this->_p('submit')==1)
		{
		//pr('ss');exit;
			$path = $CONFIG['LOCAL_PUBLIC_ASSET']."quiz/";
			$img1['name']=@$_FILES['imgquiz']['name'];
			$img1['type']=@$_FILES['imgquiz']['type'];
			$img1['tmp_name']=@$_FILES['imgquiz']['tmp_name'];
			$img1['error']=@$_FILES['imgquiz']['error'];
			$img1['size']=@$_FILES['imgquiz']['size'];
			//pr($img);exit;
			$uploadfiles = $this->uploadHelper->uploadThisImage($img1,$path,1000,false,false);
			$img1=$uploadfiles['arrImage']['filename'];
			//pr($img1);exit;
			$addquiz = $this->quizHelper->addquiz($img1);
			if($addquiz){
			sendRedirect('quiz');
			die;
			
			} 
		}
		
	$id=$this->_request('reguser');
	$this->assign('paramreg',$id);
	return $this->View->toString(TEMPLATE_DOMAIN_ADMIN .'/apps/addquiz.html');
	
	}
	
	
}
?>