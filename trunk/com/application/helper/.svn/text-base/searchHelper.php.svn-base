<?php
class searchHelper {
	
	var $_mainLayout="";
	var $login = false;
	
	function __construct($apps=false){
		global $logger,$CONFIG;
		$this->logger = $logger;
		$this->apps = $apps;
		$this->config = $CONFIG;
		
	}
	
	function search(){
		global $CONFIG;
		//pr($param);exit
		$parameter=$this->apps->_p('param');
		//pr($parameter);exit;
		$filter = "AND (sa.title LIKE '%{$parameter}%'  or sa.content LIKE '%{$parameter}%')";
		
		$sql="select *,sa.id as id,cat.category_page as page,sa.name as name from {$CONFIG['DATABASE'][0]['DATABASE']}.story_article  sa 
			left join register  reg on sa.id_user=reg.id 
			left join category cat on sa.id_category=cat.id
			where sa.n_status=1  {$filter} order by sa.id DESC limit 10
		
		";
		//pr($sql);exit;
		$result=$this->apps->fetch($sql,1);
		foreach ($result as $key => $val){
			//$result[$key]['title'] = stripslashes($val['title']);
			//$result[$key]['content'] = strip_tags($val['content']);
			//$result[$key]['contentisi'] = $val['content'];
                        $result[$key]['title'] = stripslashes($val['title']);
                        $result[$key]['titleshare'] = $val['title'];
                        $result[$key]['content'] = strip_tags($val['content']);
                        $result[$key]['contentisi'] = trim(preg_replace('/\s\s+/', ' ', str_replace('#','',$this->apps->truncate(trim(strip_tags($val['content'])),90))));
						$result[$key]['titleurl'] = str_replace(' ','-',stripslashes($val['title']));
		}
		if($result){
			return $result;
		}
		
	}
	
	
}
?>
