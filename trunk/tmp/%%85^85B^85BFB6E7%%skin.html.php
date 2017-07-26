<?php /* Smarty version 2.6.13, created on 2015-05-06 15:20:43
         compiled from application/web//apps/skin.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'application/web//apps/skin.html', 31, false),array('modifier', 'truncate', 'application/web//apps/skin.html', 36, false),)), $this); ?>

<div class="row">
	<div class="page-title">
    	<div class="col-md-4">
        	<h2><?php echo $this->_tpl_vars['modul']; ?>
</h2>
        </div>
    	<div class="col-md-8">
        	<p class="page-desc"><?php echo $this->_tpl_vars['contentmodul']; ?>
</p>
        </div>
    </div>
    <div id="isotope">
       <div class="postlist galleryList" dataWidth="500" dataStart="0" dataPage="<?php echo $this->_tpl_vars['total']; ?>
">
		
		<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['listcontent']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
            <figure class="item col-md-4">
                <figcaption>
                	<a class="thumb thumb-medium" href="<?php echo $this->_tpl_vars['basedomain']; ?>
skin/detail?param=<?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['id']; ?>
">
                    	 <img src="<?php echo $this->_tpl_vars['base_domain']; ?>
public_assets/imgregistrasi/<?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['img']; ?>
"/>
                    </a>
                    <h4><a href="<?php echo $this->_tpl_vars['basedomain']; ?>
skin/detail?param=<?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['title']; ?>
</a></h4>
                    <div class="meta-container">
						<?php if ($this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['avatar']): ?>
                        <a href="<?php echo $this->_tpl_vars['basedomain']; ?>
skin/detail?param=<?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['id']; ?>
">
                            <div class="thumb thumb-small">
                                <img src="<?php echo $this->_tpl_vars['base_domain']; ?>
public_assets/avatar/<?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['avatar']; ?>
"/>
                            </div>
                        </a>
						<?php endif; ?>
                        <p class="meta-post">
                            <span class="author">By <?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['name']; ?>
</span> |  
                            <span class="post-dates"><?php echo ((is_array($_tmp=$this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%A, %B %e, %Y") : smarty_modifier_date_format($_tmp, "%A, %B %e, %Y")); ?>
</span>
                        </p>
                         <p class="social-post">
                            <a class="like-count likecategory" href='#' likeidnya='<?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['id']; ?>
' ><i class="icon-heart-o"></i> <span><?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['like']; ?>
</span> Likes</a>
								 
								  <a class="fb-share" href="javascript:void(0)" onclick="shareFB('<?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['titleshare']; ?>
','<?php echo $this->_tpl_vars['basedomain']; ?>
skin/detail?param=<?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['id']; ?>
','<?php echo $this->_tpl_vars['basedomain']; ?>
style/detail?param=<?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['id']; ?>
','','<?php echo ((is_array($_tmp=$this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['contentisi'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 150, '...', true) : smarty_modifier_truncate($_tmp, 150, '...', true)); ?>
')"><i class="icon-facebook">&nbsp;</i></a> 
			
								<a class="twitter-share" href="http://twitter.com/share?text=<?php echo ((is_array($_tmp=$this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['contentisi'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 40, '...', true) : smarty_modifier_truncate($_tmp, 40, '...', true)); ?>
&url=<?php echo $this->_tpl_vars['basedomain']; ?>
style/detail?param=<?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['id']; ?>
"  target="_blank"><i class="icon-twitter">&nbsp;</i></a>
                          
                        </p>
                    </div>
                    <div class="entry-post">
                    	<p><?php echo ((is_array($_tmp=$this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['content'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 150, "...", true) : smarty_modifier_truncate($_tmp, 150, "...", true)); ?>
</p>
                        <a href="<?php echo $this->_tpl_vars['basedomain']; ?>
skin/detail?param=<?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['id']; ?>
" class="readmore"><i class="icon-arrow-right"></i></a>
                    </div>
                </figcaption>
            </figure>
          <?php endfor; endif; ?>
           
        </div>
    </div><!-- end #isotope -->
</div><!-- end .row -->
<div class="row loaderbox" style="display:none">
    <div class="preloader"></div>
</div><!-- end .row -->

<script>
<?php echo '
$(document).bind(\'scroll\',\'.galleryList\', function()
        {

             var batas =$(\'.galleryList\').attr(\'dataWidth\');
             var Tpage =$(\'.galleryList\').attr(\'dataPage\');
             var start =$(\'.galleryList\').attr(\'dataStart\') ;
             var totalPage=0;
          
            var html=\'\';
        
            if(Tpage>1 ) 
            {
               
                if(start==Tpage)
                {
                    return false;
                }
                
                start++;
				
                if($(this).scrollTop()>= batas){
				//console.log(\'masuk\');
				
                    batas = parseInt(batas);
					
                    $(\'.loaderbox\').attr(\'style\',"display:block");
                    batasx = batas + 500;
                    $(\'.galleryList\').removeAttr(\'dataWidth\');
                    $(\'.galleryList\').attr(\'dataWidth\',batasx);
                    $(\'.galleryList\').attr(\'dataStart\',start) ;
                 console.log(\'ss\');
                    
					
					
		$.ajax({
		type: "POST",
		url: basedomain+\'/skin/getskin\',
		data: {start:start},
		dataType: "json",
		success: function( result ){
		var str=\'\';
				
		$.each(result.data,function(k,v){  
			//console.log(k);
			var hasilawal=parseInt($(\'.item:last\').css( "top" ))+502;
			var hasil=\'\';
			
			if(k==\'0\' || k==\'3\' || k==\'6\')
			{
			if(k==\'3\')
				{
					hasil=hasilawal+502;
				}else if (k==\'6\'){
					hasil=hasilawal+1024;
				}else{
					hasil=hasilawal;
				}
			str+=\'<figure class="item col-md-4" style="position: absolute; left: 0px; top: \'+hasil+\'px;">\';
		    str+=\'<figcaption>\';
			str+=\'<a class="thumb thumb-medium" href="\'+basedomain+\'skin/detail?param=\'+v.id+\'">\';
			str+=\'<img src="\'+basedomain+\'public_assets/imgregistrasi/\'+v.img+\'"/>\';
			str+=\'</a>\';
		    str+=\'<h4><a href="\'+basedomain+\'skin/detail?param=\'+v.id+\'">\'+v.title+\'</a></h4>\';
			str+=\'<div class="meta-container">\';
			str+=\'<a href="\'+basedomain+\'skin/detail?param=\'+v.id+\'">\';
            str+=\'<div class="thumb thumb-small">\';
            str+=\'<img src="\'+basedomain+\'public_assets/avatar/\'+v.avatar+\'"/>\';
            str+=\'</div>\';
            str+=\'</a>\';
            str+=\'<p class="meta-post">\';
            str+=\'<span class="author">By \'+v.name+\'</span> |  \';
            str+=\'<span class="post-dates">\'+v.date+\'</span>\';
            str+=\'</p>\';
            str+=\'<p class="social-post">\';
            str+=\'<a class="like-count" href="#" likeidnya=\'+v.id+\'><i class="icon-heart-o"></i><span> \'+v.like+\' </span>Likes</a>\';
			str+=\'<a class="fb-share" href="javascript:void(0)" onclick="shareFB(\'+v.titleshare+\',\'+basedomain+\'skin/detail?param=\'+v.id+\',\'+basedomain+\'skin/detail?param=\'+v.id+\',,\'+v.content.substring(0,50)+\')"><i class="icon-facebook">&nbsp;</i></a> \';
			str+=\' <a class="twitter-share" href="http://twitter.com/share?text\'+v.content.substring(0,50)+\'&url=\'+basedomain+\'style/detail?param=\'+v.id+\'"  target="_blank"><i class="icon-twitter">&nbsp;</i></a>\';
			 str+=\'</p>\';
            str+=\'</div>\';
            str+=\'<div class="entry-post">\';
            str+=\'<p>\'+v.content+\'</p>\';
            str+=\'<a href="\'+basedomain+\'skin/detail?param=\'+v.id+\'" class="readmore"><i class="icon-arrow-right"></i></a>\';
		
            str+=\'</div>\';
            str+=\'</figcaption>\';
            str+=\'</figure>\';
            }
			else if(k==\'1\' || k==\'4\' || k==\'7\')
			{			
				if(k==\'4\')
				{
					hasil=hasilawal+502;
				}else if (k==\'7\'){
					hasil=hasilawal+1024;
				}else{
					hasil=hasilawal;
				}
				
			str+=\'<figure class="item col-md-4" style="position: absolute; left: 330px; top: \'+hasil+\'px;">\';
		    str+=\'<figcaption>\';
			str+=\'<a class="thumb thumb-medium" href="\'+basedomain+\'skin/detail?param=\'+v.id+\'">\';
			str+=\'<img src="\'+basedomain+\'public_assets/imgregistrasi/\'+v.img+\'"/>\';
			str+=\'</a>\';
		    str+=\'<h4><a href="\'+basedomain+\'skin/detail?param=\'+v.id+\'">\'+v.title+\'</a></h4>\';
			str+=\'<div class="meta-container">\';
			str+=\'<a href="\'+basedomain+\'skin/detail?param=\'+v.id+\'">\';
            str+=\'<div class="thumb thumb-small">\';
            str+=\'<img src="\'+basedomain+\'public_assets/avatar/\'+v.avatar+\'"/>\';
            str+=\'</div>\';
            str+=\'</a>\';
            str+=\'<p class="meta-post">\';
            str+=\'<span class="author">By \'+v.name+\'</span> |  \';
            str+=\'<span class="post-dates">\'+v.date+\'</span>\';
            str+=\'</p>\';
            str+=\'<p class="social-post">\';
            str+=\'<a class="like-count" href="#" likeidnya=\'+v.id+\'><i class="icon-heart-o"></i> <span>\'+v.like+\' </span>Likes</a>\';
			str+=\'<a class="fb-share" href="javascript:void(0)" onclick="shareFB(\'+v.titleshare+\',\'+basedomain+\'skin/detail?param=\'+v.id+\',\'+basedomain+\'skin/detail?param=\'+v.id+\',,\'+v.content.substring(0,50)+\')"><i class="icon-facebook">&nbsp;</i></a> \';
			str+=\' <a class="twitter-share" href="http://twitter.com/share?text\'+v.content.substring(0,50)+\'&url=\'+basedomain+\'style/detail?param=\'+v.id+\'"  target="_blank"><i class="icon-twitter">&nbsp;</i></a>\';
			str+=\'</p>\';
            str+=\'</div>\';
            str+=\'<div class="entry-post">\';
            str+=\'<p>\'+v.content+\'</p>\';
            str+=\'<a href="\'+basedomain+\'skin/detail?param=\'+v.id+\'" class="readmore"><i class="icon-arrow-right"></i></a>\';
		
            str+=\'</div>\';
            str+=\'</figcaption>\';
            str+=\'</figure>\';
            }
			else if(k==\'2\'|| k==\'5\' || k==\'8\')
			{		
				if(k==\'5\')
				{
					hasil=hasilawal+502;
				}else if (k==\'8\'){
					hasil=hasilawal+1024;
				}else{
					hasil=hasilawal;
				}
			
			str+=\'<figure class="item col-md-4" style="position: absolute; left: 660px; top: \'+hasil+\'px;">\';
		    str+=\'<figcaption>\';
			str+=\'<a class="thumb thumb-medium" href="\'+basedomain+\'skin/detail?param=\'+v.id+\'">\';
			str+=\'<img src="\'+basedomain+\'public_assets/imgregistrasi/\'+v.img+\'"/>\';
			str+=\'</a>\';
		    str+=\'<h4><a href="\'+basedomain+\'skin/detail?param=\'+v.id+\'">\'+v.title+\'</a></h4>\';
			str+=\'<div class="meta-container">\';
			str+=\'<a href="\'+basedomain+\'skin/detail?param=\'+v.id+\'">\';
            str+=\'<div class="thumb thumb-small">\';
            str+=\'<img src="\'+basedomain+\'public_assets/avatar/\'+v.avatar+\'"/>\';
            str+=\'</div>\';
            str+=\'</a>\';
            str+=\'<p class="meta-post">\';
            str+=\'<span class="author">By \'+v.name+\'</span> |  \';
            str+=\'<span class="post-dates">\'+v.date+\'</span>\';
            str+=\'</p>\';
            str+=\'<p class="social-post">\';
            str+=\'<a class="like-count" href="#" likeidnya=\'+v.id+\'><i class="icon-heart-o"></i> <span>\'+v.like+\' </span>Likes</a>\';
			str+=\'<a class="fb-share" href="javascript:void(0)" onclick="shareFB(\'+v.titleshare+\',\'+basedomain+\'skin/detail?param=\'+v.id+\',\'+basedomain+\'skin/detail?param=\'+v.id+\',,\'+v.content.substring(0,50)+\')"><i class="icon-facebook">&nbsp;</i></a> \';
			str+=\' <a class="twitter-share" href="http://twitter.com/share?text\'+v.content.substring(0,50)+\'&url=\'+basedomain+\'style/detail?param=\'+v.id+\'"  target="_blank"><i class="icon-twitter">&nbsp;</i></a>\';
			 str+=\'</p>\';
            str+=\'</div>\';
            str+=\'<div class="entry-post">\';
            str+=\'<p>\'+v.content+\'</p>\';
            str+=\'<a href="\'+basedomain+\'skin/detail?param=\'+v.id+\'" class="readmore"><i class="icon-arrow-right"></i></a>\';
		
            str+=\'</div>\';
            str+=\'</figcaption>\';
            str+=\'</figure>\';
            }
         
			
			});
							
                            setTimeout(function(){$(\'.loaderbox\').attr(\'style\',\'display:none\')},2000);
                            setTimeout(function(){$(\'.galleryList\').append(str);},500);
                        
                        
							}
						});
						setTimeout(function(){$(\'.loaderbox\').attr(\'style\',\'display:none\')},500);
                    
                }
            }
        });
		

$(document).ready(function(){
			$(document).on("click",".like-count", function(){
			console.log(\'masuk\');
			var likenya=$(this).attr(\'likeidnya\');
			var thiss=$(this);
			$.ajax({
                        \'type\': \'POST\',
                        \'url\': basedomain+\'likemodul\',
                        \'data\': {like:likenya},
						\'dataType\':\'json\',
                        \'success\': function(result){
							if(result.status==true){
								thiss.children().next().html(result.total);
							
							}
						
						}
						
						})
				});
});
		
function shareFB(fb_name,fb_link,fb_img,fb_user,fb_post){
			$("#bg-popup").fadeOut();
			$(".popup,.popup2").fadeOut();
			FB.init();
			FB.ui({
				method: \'feed\',
				name: fb_name,
				link: fb_link,
				picture: fb_img,
				caption: fb_user,
				description: fb_post
				
				
			});
				 
		}
'; ?>

</script>