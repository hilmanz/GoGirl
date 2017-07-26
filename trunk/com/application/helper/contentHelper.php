<?php
class contentHelper {
	
	var $_mainLayout="";
	var $login = false;
	
	function __construct($apps=false){
		global $logger,$CONFIG;
		$this->logger = $logger;
		$this->apps = $apps;
		$this->config = $CONFIG;
		
	}
	
	function listbanner(){
		global $CONFIG;
		$sql="select * from  {$CONFIG['DATABASE'][0]['DATABASE']}.banner where n_status=1
		
		";
		$result=$this->apps->fetch($sql,1);
		
		if($result){
			return $result;
		}
		
	}
	
	function listmeta($id){
		global $CONFIG;		
		$sql="select `meta_title`,  `meta_description`, `n_status` from  {$CONFIG['DATABASE'][0]['DATABASE']}.story_article where id='{$id}' and n_status=1
		
		";
		//pr($sql);exit;
		$result=$this->apps->fetch($sql,1);
		foreach ($result as $key => $val){
			$result[$key]['meta_title'] = stripslashes($val['meta_title']);
			$result[$key]['meta_description'] = stripslashes($val['meta_description']);			
		}
		if($result){
			return $result;
		}
		
	}
	
	function listgirl(){
		global $CONFIG;
		$sql="select * from  {$CONFIG['DATABASE'][0]['DATABASE']}.register where n_status=1";
		$result=$this->apps->fetch($sql,1);
		
		if($result){
			return $result;
		}
		
	}
	
	function likearticle($id){
		global $CONFIG;
		$sql="update  {$CONFIG['DATABASE'][0]['DATABASE']}.story_article set `like`=`like`+1 where id='{$id}'";
		//pr($sql);exit;
		$res=$this->apps->query($sql);
		
		$sql="select `like` as total from {$CONFIG['DATABASE'][0]['DATABASE']}.story_article where id='{$id}'";
		//pr($sql);exit;
		$result=$this->apps->fetch($sql,1);
		if($result){
			return $result;
		}
		
	}
	
	function liketwitter($id){
		global $CONFIG;
		$sql="update  {$CONFIG['DATABASE'][0]['DATABASE']}.story_article set `share_twitter`=`share_twitter`+1 where id='{$id}'";
		//pr($sql);exit;
		$res=$this->apps->query($sql);
		
		
		if($res){
			return $true;
		}
		
	}
	function likefb($id){
		global $CONFIG;
		$sql="update  {$CONFIG['DATABASE'][0]['DATABASE']}.story_article set `share_fb`=`share_fb`+1 where id='{$id}'";
		//($sql);exit;
		$res=$this->apps->query($sql);
		
		
		if($res){
			return $true;
		}
		
	}
	
	function trackingview($param){
		global $CONFIG;
		$sql="update  {$CONFIG['DATABASE'][0]['DATABASE']}.story_article  sa 
			set sa.view_count=sa.view_count+1 where sa.id={$param} 
		
		";

		$result=$this->apps->query($sql);
		
	}
	
	function trackingviewmodul($modul){
		global $CONFIG;
		$sql="update  {$CONFIG['DATABASE'][0]['DATABASE']}.category 
			set view_count=view_count+1 where id={$modul} 
		
		";

		$result=$this->apps->query($sql);
		
	}
	
	
	function listcontent(){
		global $CONFIG;
		$sql="select * from  {$CONFIG['DATABASE'][0]['DATABASE']}.story_article  sa 
			where sa.n_status=1 order by sa.id DESC limit 10
		
		";

		$result=$this->apps->fetch($sql,1);
		foreach ($result as $key => $val){
			$result[$key]['title'] = stripslashes($val['title']);
			$result[$key]['content'] = strip_tags($val['content']);
			$result[$key]['contentisi'] = $val['content'];
			$result[$key]['contentisitwitter'] =stripslashes ($this->apps->truncate(trim(strip_tags($val['content']),90))); 			
			$result[$key]['contentisifb'] = str_replace(str_split('\'\/:*?"<>|'),"",trim(preg_replace('/\s\s+/', ' ', str_replace('#','',$this->apps->truncate(trim(strip_tags($val['content'])),90)))));
			$result[$key]['titleurl'] = str_replace(' ','-',stripslashes($val['title']));
		}
		
		if($result){
			return $result;
		}
		
	}
	
/* 	function listyoutube(){
		global $CONFIG;
		$sql="select * from  {$CONFIG['DATABASE'][0]['DATABASE']}.story_youtube  sa 
			where sa.n_status=1 order by sa.id DESC limit 4
		
		";

		$result=$this->apps->fetch($sql,1);
		foreach ($result as $key => $val){
			$result[$key]['title'] = stripslashes($val['title']);
			$result[$key]['content'] = strip_tags($val['content']);
			$result[$key]['contentisi'] = $val['content'];
			$result[$key]['contentisitwitter'] =stripslashes ($this->apps->truncate(trim(strip_tags($val['content']),90))); 			
			$result[$key]['contentisifb'] = str_replace(str_split('\'\/:*?"<>|'),"",trim(preg_replace('/\s\s+/', ' ', str_replace('#','',$this->apps->truncate(trim(strip_tags($val['content'])),90)))));
			$result[$key]['titleurl'] = str_replace(' ','-',stripslashes($val['title']));
		}
		
		if($result){
			return $result;
		}
		
	}
	 */
	function relatedcontent($param,$selectlistcontent){
		global $CONFIG;
		
		$pieces = explode(", ", $selectlistcontent);
		//pr($pieces[1]);exit;
			if (!empty($pieces[0])){
				$search1 ="content like'%{$pieces[0]}%' and sa.id <>'{$param}' and sa.n_status=1";
			}
			if (!empty($pieces[1])){
				$search2 ="or content like'%{$pieces[1]}%' and sa.id <>'{$param}' and sa.n_status=1";
			}
			if (!empty($pieces[2])){
				$search3 ="or content like'%{$pieces[2]}%' and sa.id <>'{$param}' and sa.n_status=1";
			}
			if (!empty($pieces[3])){
				$search4 ="or content like'%{$pieces[3]}%' and sa.id <>'{$param}' and sa.n_status=1";
			}
			if (!empty($pieces[4])){
				$search5 ="or content like'%{$pieces[4]}%' and sa.id <>'{$param}' and sa.n_status=1";
			}
			if (!empty($pieces[5])){
				$search6 ="or content like'%{$pieces[5]}%' and sa.id <>'{$param}' and sa.n_status=1";
			}
			if (!empty($pieces[6])){
				$search7 ="or content like'%{$pieces[6]}%' and sa.id <>'{$param}' and sa.n_status=1";
			}
			if (!empty($pieces[7])){
				$search8 ="or content like'%{$pieces[7]}%' and sa.id <>'{$param}' and sa.n_status=1";
			}
			if (!empty($pieces[8])){
				$search9 ="or content like'%{$pieces[8]}%' and sa.id <>'{$param}' and sa.n_status=1";
			}
			if (!empty($pieces[9])){
				$search10 ="or content like'%{$pieces[9]}%' and sa.id <>'{$param}' and sa.n_status=1";
			}
			if (!empty($pieces[10])){
				$search11 ="or content like'%{$pieces[10]}%' and sa.id <>'{$param}' and sa.n_status=1";
			}
			
		
		$sql="select * from  {$CONFIG['DATABASE'][0]['DATABASE']}.story_article  sa 
			where $search1 $search2 $search3 $search4 $search5 $search6 $search7 $search8 $search9 $search10 $search11			
			order by sa.id DESC limit 3		
		";
		//pr($sql);exit;

		$result=$this->apps->fetch($sql,1);
		foreach ($result as $key => $val){
			$result[$key]['title'] = stripslashes($val['title']);
			$result[$key]['content'] = strip_tags($val['content']);
			$result[$key]['contentisi'] = trim(preg_replace('/\s\s+/', ' ', str_replace('#','',$this->apps->truncate(trim(strip_tags($val['content'])),90)))); 
			$result[$key]['contentisitwitter'] =str_replace(str_split('\'\/:*?"<>|'),"",stripslashes ($this->apps->truncate(trim(strip_tags($val['content']),90)))); 			
			$result[$key]['contentisifb'] = str_replace(str_split('\'\/:*?"<>|'),"",trim(preg_replace('/\s\s+/', ' ', str_replace('#','',$this->apps->truncate(trim(strip_tags($val['content'])),90)))));
			$result[$key]['titleurl'] = str_replace(' ','-',stripslashes($val['title']));
		}
		
		if($result){
			return $result;
		}
		
	}
	
	function listyoutube(){
		global $CONFIG;
		$sql="select * from  {$CONFIG['DATABASE'][0]['DATABASE']}.story_youtube  sa 
			where sa.view=1 order by sa.id DESC limit 1
		
		";

		$result=$this->apps->fetch($sql,1);
		foreach ($result as $key => $val){
			
			$result[$key]['url'] = $val['url'];
			$parts2 = explode('v/', $result[$key]['url']);
			$last2 = end($parts2);
			$result[$key]['img_url']=$last2;
		}
		$idnya='1';
		//$result['result'] = $result;
		//pr($result);die;
		if($result){
			return $result;
		}
		
	}
	
	function selectyoutube(){
		global $CONFIG;
		$sql="select * from  {$CONFIG['DATABASE'][0]['DATABASE']}.story_youtube  sa 
			where sa.view=1 order by sa.id DESC limit 1
		
		";

		$result=$this->apps->fetch($sql,1);
		foreach ($result as $key => $val){
			
			$result[$key]['url'] = $val['url'];
			$parts2 = explode('v/', $result[$key]['url']);
			$last2 = end($parts2);
			$result[$key]['img_url']=$last2;
		}
		$idnya='1';
		$result['result'] = $result;
		//pr($result);die;
		if($result){
			return $result;
		}
		
	}
	
	
	function listallyoutube(){
		$result['result'] = false;
		$result['total'] = 0;
		$result['status'] = 0;
		global $CONFIG;
		$sql="select * from  {$CONFIG['DATABASE'][0]['DATABASE']}.story_youtube  sa 
			where sa.n_status=1 and sa.view<>1 order by sa.id DESC
		
		";
		//pr($sql);exit;

		$result=$this->apps->fetch($sql,1);
		foreach ($result as $key => $val){
			$result[$key]['url'] = $val['url'];
			$result[$key]['title'] = $val['title'];
			$result[$key]['like'] = $val['like'];
			$result[$key]['name'] = $val['name'];
			$result[$key]['id_user'] = $val['id_user'];
		}
		
		if($result){
			return $result;
		}
		
	}
	
	function likeyoutube($id){
		global $CONFIG;
		$sql="update  {$CONFIG['DATABASE'][0]['DATABASE']}.story_youtube set `like`=`like`+1 where id='{$id}'";
		//pr($sql);exit;
		$res=$this->apps->query($sql);
		
		$sql="select `like` as total from {$CONFIG['DATABASE'][0]['DATABASE']}.story_youtube where id='{$id}'";
		//pr($sql);exit;
		$result=$this->apps->fetch($sql,1);
		if($result){
			return $result;
		}
		
	}
	function listcontentall($modul,$start=null,$limit=9){
		global $CONFIG;
			$result['result'] = false;
		$result['total'] = 0;
		$result['status'] = 0;
		
		if($start==null)
		$start = intval($this->apps->_request('start'));
		//pr($start);exit;
		$limit = intval($limit);
		$sql = "SELECT count(*) total
			FROM {$CONFIG['DATABASE'][0]['DATABASE']}.story_article  sa 
			left join register  reg on sa.id_user=reg.id 
			where sa.n_status=1 and id_category='{$modul}' ";
		$total = $this->apps->fetch($sql);		
		if(intval($total['total'])<=$limit) ;
		
		$start=$start*9;
		
		
		 $sql="select *,sa.date as date,sa.name as name, sa.id as id from  {$CONFIG['DATABASE'][0]['DATABASE']}.story_article  sa 
			left join register  reg on sa.id_user=reg.id 
			where sa.n_status=1 and id_category='{$modul}' order by sa.id DESC LIMIT {$start},{$limit} 
				
		
		"; 
		
		/* $sql="select *,sa.date as date,sa.name as name, sa.id as id from  {$CONFIG['DATABASE'][0]['DATABASE']}.story_article  sa 
			left join register  reg on sa.id_user=reg.id 
			where sa.n_status=1 and id_category='{$modul}' order by sa.id 
				
		
		"; */
		//pr($sql);exit;
		$rs=$this->apps->fetch($sql,1);
		foreach ($rs as $key => $val){
			$rs[$key]['title'] = stripslashes($val['title']);
			$rs[$key]['titleshare'] = $val['title'];
			$rs[$key]['content'] = strip_tags($val['content']);
			$rs[$key]['contentisi'] = trim(preg_replace('/\s\s+/', ' ', str_replace('#','',$this->apps->truncate(trim(strip_tags($val['content'])),90)))); 
			$rs[$key]['contentisitwitter'] =str_replace(str_split('\'\/:*?"<>|'),"",stripslashes ($this->apps->truncate(trim(strip_tags($val['content']),90)))); 			
			$rs[$key]['contentisifb'] = str_replace(str_split('\'\/:*?"<>|'),"",trim(preg_replace('/\s\s+/', ' ', str_replace('#','',$this->apps->truncate(trim(strip_tags($val['content'])),90)))));
			$rs[$key]['titleurl'] = str_replace(' ','-',stripslashes($val['title']));
			//pr($rs[$key]['contentisifb']);
		}
		
		$result['total'] = intval($total['total']);
		$result['result'] = $rs;
		// pr($result); 
		if($result){
			return $result;
		}
		
	}
	
	function listvideoall($modul,$start=null,$limit=9){
	
		global $CONFIG;
			$result['result'] = false;
		$result['total'] = 0;
		$result['status'] = 0;
		
		if($start==null)
		$start = intval($this->apps->_request('start'));
		//pr($start);exit;
		$limit = intval($limit);
		$sql = "SELECT count(*) total
			FROM {$CONFIG['DATABASE'][0]['DATABASE']}.story_youtube where n_status='1' and view<>'1'";
		$total = $this->apps->fetch($sql);	
		//pr($sql);exit;
		if(intval($total['total'])<=$limit) ;
		
		$start=$start*9;
		/* 
		$sql="select * from  {$CONFIG['DATABASE'][0]['DATABASE']}.story_youtube where n_status='1' and view<>'1'
			 order by id DESC LIMIT {$start},{$limit}
		
		"; */
		
		$sql="select * from  {$CONFIG['DATABASE'][0]['DATABASE']}.story_youtube where n_status='1' and view<>'1'
			 order by id DESC
		
		";
		//pr($sql);exit;
		$rs=$this->apps->fetch($sql,1);
		foreach ($rs as $key => $val){
			$rs[$key]['url'] = $val['url'];
			$rs[$key]['title'] = $val['title'];
			$rs[$key]['content'] = strip_tags($val['content']);	
			$rs[$key]['waktu'] = $val['waktu'];
			list($tahun,$bulan,$tanggal) = explode("-",$val['waktu']);
			list($hari) = explode(" ",$tanggal);
			$rs[$key]['thn']=$tahun;
			$rs[$key]['tgl']=$hari;			
			$rs[$key]['hari']=date('l',$hari);
			switch ($bulan) {
				case "1":
				$rs[$key]['bln']="January";
				break;
				case "2":
				$rs[$key]['bln']="February ";
				break;
				case "3":
				$rs[$key]['bln']="March";
				break;
				case "4":
				$rs[$key]['bln']="April ";
				break;
				case "5":
				$rs[$key]['bln']="May";
				break;
				case "6":
				$rs[$key]['bln']="June";
				break;
				case "7":
				$rs[$key]['bln']="July";
				break;
				case "8":
				$rs[$key]['bln']="August";
				break;
				case "9":
				$rs[$key]['bln']="September";
				break;
				case "10":
				$rs[$key]['bln']="October";
				break;
				case "11":
				$rs[$key]['bln']="November";
				break;
				case "12":
				$rs[$key]['bln']="December";
				break;
			}
			$rs[$key]['thn']=$tahun;
			$rs[$key]['name'] = $val['name'];
			$parts2 = explode('v/', $rs[$key]['url']);
			$last2 = end($parts2);
			$rs[$key]['img_url']=$last2;
			//$rs[$key]['titleurl'] = str_replace(' ','-',stripslashes($val['title']));
			//pr($rs[$key]['contentisifb']);
			//pr($b)."|";
			//pr($hari);exit;
		}
		
		$result['total'] = intval($total['total']);
		$result['result'] = $rs;
		 //pr($result); 
		if($result){
			return $result;
		}
		
	}
	
	function listcontentpopular(){
	//pr('ss');exit;
		global $CONFIG;
		$sql="select *,sa.date as date,sa.id as id,cat.category_page as page,sa.name as name from  {$CONFIG['DATABASE'][0]['DATABASE']}.story_article sa 
		left join register  reg on sa.id_user=reg.id 
		left join category cat on sa.id_category=cat.id
		where sa.n_status=1 order by sa.like DESC limit 1
		
		";
		//pr($sql);exit;
		$result=$this->apps->fetch($sql,1);
		foreach ($result as $key => $val){
			$result[$key]['title'] = stripslashes($val['title']);
			$result[$key]['content'] = strip_tags($val['content']);
			$result[$key]['contentisi'] = trim(preg_replace('/\s\s+/', ' ', str_replace('#','',$this->apps->truncate(trim(strip_tags($val['content'])),90))));
                        $result[$key]['contentisitwitter'] =stripslashes ($this->apps->truncate(trim(strip_tags($val['content']),90)));
                        $result[$key]['contentisifb'] = str_replace("'s","",trim(preg_replace('/\s\s+/', ' ', str_replace('#','',$this->apps->truncate(trim(strip_tags($val['content'])),90)))));
			$result[$key]['titleurl'] = str_replace(' ','-',stripslashes($val['title']));			
		}
		
		if($result){
			return $result;
		}
	}
	
	function listcontentstyle(){
		global $CONFIG;
		$sql="select *,sa.date as date from  {$CONFIG['DATABASE'][0]['DATABASE']}.story_article  sa 
			left join register  reg on sa.id_user=reg.id 
			where sa.n_status=1 order by sa.id DESC limit 4
		
		";
//pr('ss');exit;
		$result=$this->apps->fetch($sql,1);
		foreach ($result as $key => $val){
			$result[$key]['title'] = stripslashes($val['title']);
			$result[$key]['content'] = strip_tags($val['content']);
			$result[$key]['contentisi'] = $val['content'];
			$result[$key]['titleurl'] = str_replace(' ','-',stripslashes($val['title']));
		}
		
		//pr($result);exit;
		if($result){
			return $result;
		}
		
	}
	function listdetail($param){
		global $CONFIG;
		$sql="select *,sa.keyword as keyword, sa.date as date,sa.id as id,cat.category_page as page,sa.name as name from  {$CONFIG['DATABASE'][0]['DATABASE']}.story_article  sa 
			left join register  reg on sa.id_user=reg.id 
			left join category cat on sa.id_category=cat.id
			where sa.id={$param} 
			and sa.n_status=1
		
		";

		$result=$this->apps->fetch($sql,1);
		foreach ($result as $key => $val){
			$result[$key]['title'] = stripslashes($val['title']);
			$result[$key]['content'] = strip_tags($val['content']);
			$result[$key]['contentisi'] = str_replace('#','',$this->apps->truncate(strip_tags($val['content']),90));
			$result[$key]['titleshare'] = $val['title']; 
			$result[$key]['contentnya'] =$val['content'];
			$result[$key]['keyword'] =$val['keyword'];
			$result[$key]['contentisitwitter'] =str_replace(str_split('\'\/:*?"<>|'),"",stripslashes ($this->apps->truncate(trim(strip_tags($val['content']),90)))); 			
			$result[$key]['contentisifb'] = str_replace("'","",trim(preg_replace('/\s\s+/', ' ', str_replace('#','',$this->apps->truncate(trim(strip_tags($val['content'])),90)))));
			$result[$key]['titleurl'] = str_replace(' ','-',stripslashes($val['title']));
		}
		
		
		//pr($result);exit;
		if($result){
			return $result;
		}
		
	}
	
	function listquiz(){
		global $CONFIG;
			
				$sql="select * from {$CONFIG['DATABASE'][0]['DATABASE']}.quiz where 1 and n_status=1 order by id DESC LIMIT 1";
				//pr($sql);exit;
				$fetch = $this->apps->fetch($sql,1);
				
				return $fetch;
			
		}
	function listfeaturegirl(){
		global $CONFIG;
		$sql="select * from  {$CONFIG['DATABASE'][0]['DATABASE']}.register where n_status=1 order by id DESC limit 10
		
		";

		$result=$this->apps->fetch($sql,1);
		//pr($result);exit;
		if($result){
			return $result;
		}
		
	}
	
	function selectlistdetail($param){
		$sql="select keyword from  {$CONFIG['DATABASE'][0]['DATABASE']}.story_article  where id='{$param}' and n_status=1
		order by id DESC 
		";
		//pr($sql);exit;
		$result=$this->apps->fetch($sql,1);
		//$result=$this->apps->query($sql);
		
		//pr($result['keyword']);exit;
		foreach ($result as $val){
			//$result[$key]['keyword'] = stripslashes($val['keyword']);
			$result=$val['keyword'];
			//$a=$val['keyword'];
			//pr($val['keyword']);exit;
		}
		/* $result=$this->apps->fetch($sql,1);*/
		//pr($result);exit; 
		return $result;
	}
	
	function selectcount($param){
	global $CONFIG;
	$sql="select * from  {$CONFIG['DATABASE'][0]['DATABASE']}.comment where id_cerita='{$param}' and n_status=1
		order by id DESC
		";

	$result['result']=$this->apps->fetch($sql,1);
	
	$sql="select count(*) as total from  {$CONFIG['DATABASE'][0]['DATABASE']}.comment where id_cerita='{$param}'
		
		and n_status=1 ";

	$result['total']=$this->apps->fetch($sql);
		//pr($result);exit;
	return $result;
	}
	
	function prosescomment(){
		global $CONFIG;
		
		$name=strip_tags($this->apps->_p('nama'));
		$email=strip_tags($this->apps->_p('email'));
		$comment=strip_tags($this->apps->_p('comment'));
		$idcerita=strip_tags($this->apps->_p('idcerita'));
		$sql="insert into {$CONFIG['DATABASE'][0]['DATABASE']}.comment set name='{$name}',email='{$email}',comment='{$comment}',id_cerita='{$idcerita}',n_status=1,`date`=NOW()
		
		";
		// pr($sql);die; 
		$result=$this->apps->fetch($sql,1);
		//pr($result);exit;
		if($result){
			return $result;
		}
		
	}
	
}
?>
