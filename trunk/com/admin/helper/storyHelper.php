<?php
class storyHelper {
	
	var $_mainLayout="";
	var $login = false;
	
	function __construct($apps=false){
		global $logger,$CONFIG;
		$this->logger = $logger;
		$this->apps = $apps;
		$this->config = $CONFIG;
		
	}
	function addstory($img1,$img2){
	global $CONFIG;
	
		$title=$this->apps->_p('title');
		$description=$_POST['description'];
		$category=$this->apps->_p('category');
		$paramreg=$this->apps->_p('userreg');
		$nama=$this->apps->_p('nama');
		
		if($nama)
		{
		$sql="insert into {$CONFIG['DATABASE'][0]['DATABASE']}.story_article set `title`='{$title}'
		,`content`='{$description}',`img_home`='{$img1}',`img`='{$img2}',`id_category`='{$category}',
		`id_user`='{$paramreg}',date=NOW(),`name`='{$nama}',n_status=0";
		}else{
		$sql="insert into {$CONFIG['DATABASE'][0]['DATABASE']}.story_article set `title`='{$title}'
		,`content`='{$description}',`img_home`='{$img1}',`img`='{$img2}',`id_category`='{$category}',
		`id_user`='{$paramreg}',date=NOW(),n_status=0";
		}
		
		//pr($sql);exit;
		$fetch = $this->apps->query($sql);
		if($fetch)
		{
			return true;
		}else{
			return false;
		}
	}
	
	function checkstory(){
	global $CONFIG;
	$idnya=$this->apps->_p('idnya');
	if($idnya)
	{
	$sql="update  {$CONFIG['DATABASE'][0]['DATABASE']}.story_article set n_status=1 where id={$idnya}";
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
	$sql="update  {$CONFIG['DATABASE'][0]['DATABASE']}.story_article set n_status=0 where id={$idnya}";

	$fetch=$this->apps->query($sql);
	return true;
	}else{
	return false;
	}
	
	}
	function edit($idnya=null){
		global $CONFIG;
		
		if($idnya)
		{
			$sql="select * from  {$CONFIG['DATABASE'][0]['DATABASE']}.story_article where 1 AND id={$idnya}";
			
			$fetch=$this->apps->fetch($sql);
			// pr($fetch);die;
			return $fetch;
		}else{
			return false;
		}
	
	}
	function prosesedit($data){
		global $CONFIG;
		$imghome='';
		$imgconten='';
		if(isset($data['imgHome']))
		{
			
			$imghome='img = "'.$data['imgHome'].'", ';
		}
		if(isset($data['imgContent']))
		{
			
			$imgconten='img_home = "'.$data['imgContent'].'", ';
		}
		$sql="UPDATE  {$CONFIG['DATABASE'][0]['DATABASE']}.story_article 
				SET 
					id_category='{$data['category']}',
					title='{$data['title']}',
					content='{$data['description']}',
					{$imghome}
					{$imgconten}
					n_status=1
			where id={$data['id']}";
	// pr($sql);die;
	$fetch=$this->apps->query($sql);
	return true;
		
	}
	function deletestory($inisiasi){
		global $CONFIG;
			if ($inisiasi){
				$sql="delete from {$CONFIG['DATABASE'][0]['DATABASE']}.story_article where `id`='{$inisiasi}'";
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
	
	function storyList($start=null,$limit=10){
		global $CONFIG;
		$rs['result'] = false;
		$rs['total'] = 0;		
		if($start==null)$start = intval($this->apps->_request('start'));
		$limit = intval($limit);
		$sql = "SELECT COUNT(*) total 
				FROM  {$CONFIG['DATABASE'][0]['DATABASE']}.story_article "; 
		$total = $this->apps->fetch($sql);		
		if(intval($total['total'])<=$limit) $start = 0;
		
		
		$sql="select * from  {$CONFIG['DATABASE'][0]['DATABASE']}.story_article where 1 order by id DESC LIMIT {$start}, {$limit} ";
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
			
			$rsut[$key]['content'] = strip_tags($val['content']);
		}
		
		
		//pr($rsut);exit;
		$rs['status'] = true;
		$rs['result'] = $rsut;
		$rs['total'] = intval($total['total']); 
		return $rs;
	}
	}
?>