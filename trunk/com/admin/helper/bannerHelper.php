<?php
class bannerHelper {
	
	var $_mainLayout="";
	var $login = false;
	
	function __construct($apps=false){
		global $logger,$CONFIG;
		$this->logger = $logger;
		$this->apps = $apps;
		$this->config = $CONFIG;
		
	}
	
	function banner($start=null,$limit=10){
		global $CONFIG;
		$rs['result'] = false;
		$rs['total'] = 0;		
		if($start==null)$start = intval($this->apps->_request('start'));
		$limit = intval($limit);
		$sql = "SELECT COUNT(*) total 
				FROM  {$CONFIG['DATABASE'][0]['DATABASE']}.banner where n_status=1"; 
		$total = $this->apps->fetch($sql);		
		if(intval($total['total'])<=$limit) $start = 0;
		
		
		$sql="select * from  {$CONFIG['DATABASE'][0]['DATABASE']}.banner where 1 LIMIT {$start}, {$limit} ";
		//pr($sql);exit;
		$rsut=$this->apps->fetch($sql,1);
		//pr($rsut);exit;
		if(!$rsut){ return false;} 
		$no = 1;
		if( $start>0)
		{
			$no = $start+1;
		}
		foreach ($rsut as $key => $val){
			
			$rsut[$key]['no'] = $no++;
		}
		
		
		//pr($rsut);exit;
		$rs['status'] = true;
		$rs['result'] = $rsut;
		$rs['total'] = intval($total['total']); 
		return $rs;
	}
	function addbanner($uploadfilenya=null){
	global $CONFIG;
	
		$url=@$_POST['url'];
		$link= str_replace('http://','',$url);
		
		$type='2';
		if($url){
			$type='1';
		}
		
		
		$sql="insert into {$CONFIG['DATABASE'][0]['DATABASE']}.banner set `images`='{$uploadfilenya}'
		,`type`='{$type}',`link`='{$link}',`date`=NOW(),n_status=0";
		//pr($sql);exit;
		$fetch = $this->apps->query($sql);
		if($fetch)
		{
			return true;
		}else{
			return false;
		}
	}
	function editbanner($uploadfilenya=null,$inisiasi=null){
	global $CONFIG;
	
		$url=$this->apps->_p('url');
		
		
		$type='2';
		if($url){
			$type='1';
		}
		if($uploadfilenya){
		$sql="update {$CONFIG['DATABASE'][0]['DATABASE']}.banner set `images`='{$uploadfilenya}'
		,`type`='{$type}',`link`='{$url}',`date`=NOW(),n_status=1 where `id`='{$inisiasi}'";
		}else{
		$sql="update {$CONFIG['DATABASE'][0]['DATABASE']}.banner set `type`='{$type}',`link`='{$url}',`date`=NOW() where `id`='{$inisiasi}'";
		}
		
	
	//	pr($sql);exit;
		$fetch = $this->apps->query($sql);
		if($fetch)
		{
			return true;
		}else{
			return false;
		}
	}
	
	
	function checkbanner(){
	global $CONFIG;
	$idnya=$this->apps->_p('idnya');
	if($idnya)
	{
	$sql="update  {$CONFIG['DATABASE'][0]['DATABASE']}.banner set n_status=1 where id={$idnya}";
	$fetch=$this->apps->query($sql);
	return true;
	}else{
	return false;
	}
	
	}
	
	function checkinactives(){
	global $CONFIG;
	$idnya=intval($_POST['idnya']);
	//	pr($idnya);exit;
	if($idnya)
	{
	$sql="update  {$CONFIG['DATABASE'][0]['DATABASE']}.banner set n_status=0 where id={$idnya}";

	$fetch=$this->apps->query($sql);
	return true;
	}else{
	return false;
	}
	
	}
	
		function deletebanner($inisiasi){
		global $CONFIG;
			if ($inisiasi){
				$sql="delete from {$CONFIG['DATABASE'][0]['DATABASE']}.banner where `id`='{$inisiasi}'";
				//pr($sql);exit;
				$fetch = $this->apps->query($sql);
				if($fetch)
				{
					return true;
				}else{
					return false;
				}
				
			}
			
			}
	
	function selectbanner($inisiasi){
		global $CONFIG;
			if ($inisiasi){
				$sql="select * from {$CONFIG['DATABASE'][0]['DATABASE']}.banner where `id`='{$inisiasi}'";
				//pr($sql);exit;
				$fetch = $this->apps->fetch($sql,1);
				return $fetch;
				
			}
			
			}
	
	
	}
?>