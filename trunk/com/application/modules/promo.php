<?php
class promo extends App{
	
	function beforeFilter(){
 		
		global $LOCALE,$CONFIG;
		$this->assign('basedomain',$CONFIG['BASE_DOMAIN']); 
		$this->registerHelper = $this->useHelper('registerHelper');
		$this->uploadHelper = $this->useHelper('uploadHelper');
		
	}
	
	function main(){
	global $LOCALE,$CONFIG;
	// pr($_POST);exit;   
		
		if($this->_p('submit')==1)
		{
 /*  pr($_FILES);*/
	
			if ($this->_p('name')=='')
			{
				$name_no='kolom ini harus diisi';
				$pesan_erorr='ada';
			}
			/*if ($this->_p('alamat')=='')
			{
				$alamat_no='kolom ini harus diisi';
				$pesan_erorr='ada';
			}*/
			if ($this->_p('telp')=='')
			{
				$telp_no='kolom ini harus diisi';
				$pesan_erorr='ada';
			}
			if ($this->_p('umur')=='')
			{
				$telp_no='kolom ini harus diisi';
				$pesan_erorr='ada';
			}
			/*if ($this->_p('email')=='')
			{
				$email_no='kolom ini harus diisi';
				$pesan_erorr='ada';
			}*/
			
			
			
			if($pesan_erorr)
			{
				
				$this->assign('name',$this->_p('name'));
		
				//$this->assign('alamat',$alamat);
			
				$this->assign('telp',$this->_p('telp'));
				
				$this->assign('umur',$this->_p('umur'));
				
			
				
				$this->assign('error_no','Semua Data Wajib Diisi !');
			}else{
			
				$register =  $this->registerHelper->addregisteralfa();
				
				if($register==true)
				{
					sendRedirect('regalfa/thxreg');
					return $this->out(TEMPLATE_DOMAIN_WEB . '/login_message.html');
					exit;
				}
				
			}
		
		}
	
		return $this->View->toString(TEMPLATE_DOMAIN_WEB .'/apps/regalfa.html');		
	}
	
	function thxreg(){
		return $this->View->toString(TEMPLATE_DOMAIN_WEB .'/apps/thanks_alfa.html');		
	}
	
	function termandconditions(){
		return $this->View->toString(TEMPLATE_DOMAIN_WEB .'/apps/term_alfa.html');		
	}
	
}
?>
