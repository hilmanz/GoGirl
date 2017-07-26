<?php
class registerHelper {
	
	var $_mainLayout="";
	var $login = false;
	
	function __construct($apps=false){
		global $logger,$CONFIG;
		$this->logger = $logger;
		$this->apps = $apps;
		$this->config = $CONFIG;
		
	}
	
	function addregister($file,$img){
		global $CONFIG;
		
		
		$tipe=strip_tags($this->apps->_p('tipe'));
		$name=strip_tags($this->apps->_p('name'));
		$alamat=strip_tags($this->apps->_p('alamat'));
		$telp=strip_tags($this->apps->_p('telp'));
		$email=strip_tags($this->apps->_p('email'));
		$story=strip_tags($this->apps->_p('story'));
		
		
		
		$sql="insert into  {$CONFIG['DATABASE'][0]['DATABASE']}.register set `tipe`='{$tipe}',
			`name`='{$name}',`alamat`='{$alamat}',`telp`='{$telp}',`email`='{$email}',`story`='{$story}',
			`resume`='{$file}',`avatar`='{$img}',`date`=NOW(),n_status=1
		
		";
		
		//pr($this->apps->getLastInsertId());exit;
		$result=$this->apps->query($sql);
		
		
		if($result){
			return true;
		}
		
		
		
	}
	
	function addregisteralfa($file,$img){
		global $CONFIG;
		
		//pr('ss');exit;
	
		$name=strip_tags($this->apps->_p('name'));
		$umur=strip_tags($this->apps->_p('umur'));
		$telp=strip_tags($this->apps->_p('telp'));
		//$email=strip_tags($this->apps->_p('email'));

		
		$sql="insert into  {$CONFIG['DATABASE'][0]['DATABASE']}.regalfa set 
			`nama`='{$name}',`umur`='{$umur}',`telp`='{$telp}',`date`=now()
			,n_status=1
		
		";
		
		// pr($sql);exit;
		$result=$this->apps->query($sql);
		
		if($result){
			return true;
		}
		
		
		
	}
	
	
}
?>
