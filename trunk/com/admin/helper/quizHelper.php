<?php
class quizHelper {
	
	var $_mainLayout="";
	var $login = false;
	
	function __construct($apps=false){
		global $logger,$CONFIG;
		$this->logger = $logger;
		$this->apps = $apps;
		$this->config = $CONFIG;
		
	}
	function addquiz($img1){
	global $CONFIG;
	
		$url=$this->apps->_p('url');
	
		
	
		$sql="insert into {$CONFIG['DATABASE'][0]['DATABASE']}.quiz set `url`='{$url}'
		,`img`='{$img1}',date=NOW(),n_status=0";
		
		//pr($sql);exit;
		$fetch = $this->apps->query($sql);
		if($fetch)
		{
			return true;
		}else{
			return false;
		}
	}
	
	function checkquiz(){
	global $CONFIG;
	$idnya=$this->apps->_p('idnya');
	if($idnya)
	{
	$sql="update  {$CONFIG['DATABASE'][0]['DATABASE']}.quiz set n_status=1 where id={$idnya}";
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
	$sql="update  {$CONFIG['DATABASE'][0]['DATABASE']}.quiz set n_status=0 where id={$idnya}";

	$fetch=$this->apps->query($sql);
	return true;
	}else{
	return false;
	}
	
	}
	function editquiz($uploadfilenya=null,$inisiasi=null){
	global $CONFIG;
	
		$url=$this->apps->_p('url');
		
		
		
		if($uploadfilenya){
		$sql="update {$CONFIG['DATABASE'][0]['DATABASE']}.quiz set `img`='{$uploadfilenya}'
		,`url`='{$url}',`date`=NOW(),n_status=1 where `id`='{$inisiasi}'";
		}else{
		$sql="update {$CONFIG['DATABASE'][0]['DATABASE']}.quiz set `url`='{$url}',`date`=NOW() where `id`='{$inisiasi}'";
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
	
	function selectquiz($inisiasi){
		global $CONFIG;
			if ($inisiasi){
				$sql="select * from {$CONFIG['DATABASE'][0]['DATABASE']}.quiz where `id`='{$inisiasi}'";
				//pr($sql);exit;
				$fetch = $this->apps->fetch($sql,1);
				
				return $fetch;
				
			}
			
			}
			
			
	function deletequiz($inisiasi){
		global $CONFIG;
			if ($inisiasi){
				$sql="delete from {$CONFIG['DATABASE'][0]['DATABASE']}.quiz where `id`='{$inisiasi}'";
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
	
	function quizList($start=null,$limit=10){
		global $CONFIG;
		$rs['result'] = false;
		$rs['total'] = 0;		
		if($start==null)$start = intval($this->apps->_request('start'));
		$limit = intval($limit);
		$sql = "SELECT COUNT(*) total 
				FROM  {$CONFIG['DATABASE'][0]['DATABASE']}.quiz "; 
		$total = $this->apps->fetch($sql);		
		if(intval($total['total'])<=$limit) $start = 0;
		
		
		$sql="select * from  {$CONFIG['DATABASE'][0]['DATABASE']}.quiz where 1 order by id DESC LIMIT {$start}, {$limit} ";
		//pr($sql);exit;
		$rsut=$this->apps->fetch($sql,1);
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
	}
?>