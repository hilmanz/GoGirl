<?php
class register extends App{
	
	function beforeFilter(){
 		
		global $LOCALE,$CONFIG;
		$this->assign('basedomain',$CONFIG['BASE_DOMAIN']); 
		$this->registerHelper = $this->useHelper('registerHelper');
		$this->uploadHelper = $this->useHelper('uploadHelper');
		
	}
	
	function main(){
	global $LOCALE,$CONFIG;
	
		if($this->_p('submit')==1)
		{
 /*  pr($_FILES);*/
	//pr($_POST);exit;   
			if ($this->_p('story')=='')
			{
				$story_no='kolom ini harus diisi';
				$pesan_erorr='ada';
			}
			if ($this->_p('name')=='')
			{
				$name_no='kolom ini harus diisi';
				$pesan_erorr='ada';
			}
			if ($this->_p('alamat')=='')
			{
				$alamat_no='kolom ini harus diisi';
				$pesan_erorr='ada';
			}
			if ($this->_p('telp')=='')
			{
				$telp_no='kolom ini harus diisi';
				$pesan_erorr='ada';
			}
			if ($this->_p('email')=='')
			{/* pr('ss');exit; */
				$email_no='kolom ini harus diisi';
				$pesan_erorr='ada';
			}
			
			
			
			if($pesan_erorr)
			{
				
				$this->assign('name',$name);
		
				$this->assign('alamat',$alamat);
			
				$this->assign('telp',$telp);
				
				$this->assign('email',$email);
				
				$this->assign('story',$story);
				
				$this->assign('error_no','Semua Data Wajib Diisi !');
			}else{
			
			
				$path = $CONFIG['LOCAL_PUBLIC_ASSET'].'docregistrasi/';
				$filenya= $_FILES['resume']; 	 
			//pr($path);exit;
				$uploadnews = $this->uploadHelper->uploadThisFile($filenya,$path);
				//pr($uploadnews);exit;
				$filedocument=$uploadnews['arrFile']['filename'];
				
				$path = $CONFIG['LOCAL_PUBLIC_ASSET'].'avatar/';
				$imgnya = $_FILES['resume2']; 	 
				$uploadnews = $this->uploadHelper->uploadThisImage($imgnya,$path,1000,false,false);
				$fileimage=$uploadnews['arrImage']['filename'];
				/*  pr($fileimage);
				pr($filedocument);exit;  */
				
				
				$register =  $this->registerHelper->addregister($filedocument,$fileimage);
				
				if($register==true)
				{
					sendRedirect('register/thanksreg');
					return $this->out(TEMPLATE_DOMAIN_WEB . '/login_message.html');
					die;
				}
				
			}
		
		}
	
		return $this->View->toString(TEMPLATE_DOMAIN_WEB .'/apps/registration.html');		
	}
	
	function thanksreg(){
	global $LOCALE,$CONFIG;
		return $this->View->toString(TEMPLATE_DOMAIN_WEB .'/apps/thanks_register.html');		
	}
	
	function termandcondition(){
		return $this->View->toString(TEMPLATE_DOMAIN_WEB .'/apps/term_register.html');		
	}
	function loading(){
	global $LOCALE,$CONFIG;
	return $this->View->toString(TEMPLATE_DOMAIN_WEB .'/login_message.html');	
}
	
}
?>
