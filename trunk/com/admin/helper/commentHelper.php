<?php
class commentHelper {
	
	var $_mainLayout="";
	var $login = false;
	
	function __construct($apps=false){
		global $logger,$CONFIG;
		$this->logger = $logger;
		$this->apps = $apps;
		$this->config = $CONFIG;
		
	}
	
	
	function checkcomment(){
	global $CONFIG;
	$idnya=$this->apps->_p('idnya');
	if($idnya)
	{
	$sql="update  {$CONFIG['DATABASE'][0]['DATABASE']}.comment set n_status=1 where id={$idnya}";
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
	$sql="update  {$CONFIG['DATABASE'][0]['DATABASE']}.comment set n_status=0 where id={$idnya}";

	$fetch=$this->apps->query($sql);
	return true;
	}else{
	return false;
	}
	
	}
	function deletestory($inisiasi){
		global $CONFIG;
			if ($inisiasi){
				$sql="delete from {$CONFIG['DATABASE'][0]['DATABASE']}.comment where `id`='{$inisiasi}'";
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
	
	function commentList($start=null,$limit=10){
		global $CONFIG;
		$rs['result'] = false;
		$rs['total'] = 0;		
		if($start==null)$start = intval($this->apps->_request('start'));
		$limit = intval($limit);
		$sql = "SELECT COUNT(*) total 
				FROM  {$CONFIG['DATABASE'][0]['DATABASE']}.comment "; 
		$total = $this->apps->fetch($sql);		
		if(intval($total['total'])<=$limit) $start = 0;
		
		
		$sql="select * from  {$CONFIG['DATABASE'][0]['DATABASE']}.comment where 1 order by id DESC LIMIT {$start}, {$limit} ";
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