<?php /* Smarty version 2.6.13, created on 2015-05-06 15:45:39
         compiled from application/web//home.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'application/web//home.html', 76, false),array('modifier', 'truncate', 'application/web//home.html', 108, false),)), $this); ?>
<!-- <b>Banner </b><br>
<p>

<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['listbanner']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
 echo $this->_tpl_vars['listbanner'][$this->_sections['i']['index']]['images']; ?>
 
<?php endfor; endif; ?>
</p>



<b>Content  </b><br>
<p>
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
 echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['title']; ?>
 
<?php endfor; endif; ?>
</p>
 -->
 <section id="slider">
       <div class="flexslider row">
          <ul class="slides">
			<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['listbanner']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
			<li><?php if ($this->_tpl_vars['listbanner'][$this->_sections['i']['index']]['link']): ?>
              <a href="<?php echo $this->_tpl_vars['listbanner'][$this->_sections['i']['index']]['link']; ?>
"><img src="<?php echo $this->_tpl_vars['base_domain']; ?>
public_assets/banner/<?php echo $this->_tpl_vars['listbanner'][$this->_sections['i']['index']]['images']; ?>
" /></a>
			  <?php else: ?>
			  <img src="<?php echo $this->_tpl_vars['base_domain']; ?>
public_assets/banner/<?php echo $this->_tpl_vars['listbanner'][$this->_sections['i']['index']]['images']; ?>
" />
			  <?php endif; ?>
            </li>
			<?php endfor; endif; ?>
           
          </ul>
        </div><!-- end .flexslider -->
</section><!-- end #slider-->
<div class="row">
    <div id="sidebar" class="col-md-4">
        <div class="widget widget-list featured-girls">
            <div class="widget-title">
                <h3>Featured Girls</h3>
            </div>
            <div class="widget-content">
                <ul>
				
				<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['listfeaturegirl']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                    <li>
                        <a>
                            <div class="thumb thumb-small">
                                <img src="<?php echo $this->_tpl_vars['basedomain']; ?>
public_assets/avatar/<?php echo $this->_tpl_vars['listfeaturegirl'][$this->_sections['i']['index']]['avatar']; ?>
" class="img-circle" />
                            </div>
                            <h6><?php echo $this->_tpl_vars['listfeaturegirl'][$this->_sections['i']['index']]['name']; ?>
</h6>
                        </a>
                    </li>
                  <?php endfor; endif; ?>
				  
				  
                </ul>
            </div>
        </div><!-- end .widget -->
    </div><!-- end .col-md-4 -->
    <div id="content" class="col-md-8">
        <div class="widget widget-thumb latest-story">
            <div class="widget-title">
                <h3 class="has-arrow">Latest Story</h3>
            </div><!-- end .widget-title -->
            <div class="widget-content">
			
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
                <div class="col-md-6">
                    <a href="<?php echo $this->_tpl_vars['basedomain']; ?>
style/detail?param=<?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['id']; ?>
" class="story-box">
                        <div class="thumb thumb-medium">
                            <img src="<?php echo $this->_tpl_vars['base_domain']; ?>
public_assets/imgregistrasi/<?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['img_home']; ?>
"/>
                        </div>
                        <div class="caption">
                            <h4><?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['title']; ?>
</h4>
                            <p class="meta-post">
                                <span class="author">By <?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['name']; ?>
</span> |  
                                <span class="like-count"><?php echo $this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['like']; ?>
 Likes</span>
                                <span class="post-date"><?php echo ((is_array($_tmp=$this->_tpl_vars['listcontent'][$this->_sections['i']['index']]['date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%A, %B %e, %Y") : smarty_modifier_date_format($_tmp, "%A, %B %e, %Y")); ?>
</span>
                            </p>
                        </div>
                    </a>
                </div>
			<?php endfor; endif; ?>	
		
               
            </div><!-- end .widget-content -->
        </div><!-- end .widget -->
        <div class="widget widget-thumb popular-story">
            <div class="widget-title">
                <h3 class="has-arrow">Most Popular Story</h3>
            </div><!-- end .widget-title -->
			
			<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['listcontentpopular']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
            <div class="widget-content">
                <div class="col-md-12">
                    <div class="popular-box">
                        <div class="thumb thumb-big">
                            <a href="<?php echo $this->_tpl_vars['basedomain']; ?>
style/detail?param=<?php echo $this->_tpl_vars['listcontentpopular'][$this->_sections['i']['index']]['id']; ?>
"><img src="<?php echo $this->_tpl_vars['base_domain']; ?>
public_assets/imgregistrasi/<?php echo $this->_tpl_vars['listcontentpopular'][$this->_sections['i']['index']]['img_home']; ?>
"/></a>
                        </div>
                        <div class="entry">
                            <h4><a href="#"><?php echo $this->_tpl_vars['listcontentpopular'][$this->_sections['i']['index']]['title']; ?>
 </a></h4>
                            <p class="meta-post">
                                <span class="author">By <?php echo $this->_tpl_vars['listcontentpopular'][$this->_sections['i']['index']]['name']; ?>
</span> |  
                                <span class="post-dates"><?php echo ((is_array($_tmp=$this->_tpl_vars['listcontentpopular'][$this->_sections['i']['index']]['date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%A, %B %e, %Y") : smarty_modifier_date_format($_tmp, "%A, %B %e, %Y")); ?>
</span>
                            </p>
                            <p class="social-post">
                                <a class="like-count" likeidnya="<?php echo $this->_tpl_vars['listcontentpopular'][$this->_sections['i']['index']]['id']; ?>
"><i class="icon-heart-o"></i> <span><?php echo $this->_tpl_vars['listcontentpopular'][$this->_sections['i']['index']]['like']; ?>
</span> Likes</a>
								
								
                            <a class="fb-share" href="javascript:void(0)" onclick="shareFB('Go Girl','<?php echo $_SERVER['HTTP_HOST'];  echo $_SERVER['REQUEST_URI']; ?>
','<?php echo $_SERVER['HTTP_HOST'];  echo $_SERVER['REQUEST_URI']; ?>
','','<?php echo ((is_array($_tmp=$this->_tpl_vars['listcontentpopular'][$this->_sections['i']['index']]['content'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 150, '...', true) : smarty_modifier_truncate($_tmp, 150, '...', true)); ?>
')" likeidnya="<?php echo $this->_tpl_vars['listcontentpopular'][$this->_sections['i']['index']]['id']; ?>
"><i class="icon-facebook">&nbsp;</i></a> 
			
								<a class="twitter-share" href="http://twitter.com/share?text=<?php echo ((is_array($_tmp=$this->_tpl_vars['listcontentpopular'][$this->_sections['i']['index']]['content'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 40, '...', true) : smarty_modifier_truncate($_tmp, 40, '...', true)); ?>
"  target="_blank"  likeidnya="<?php echo $this->_tpl_vars['listcontentpopular'][$this->_sections['i']['index']]['id']; ?>
"><i class="icon-twitter" >&nbsp;</i></a>
                            </p>
                            <p class="summary"><?php echo ((is_array($_tmp=$this->_tpl_vars['listcontentpopular'][$this->_sections['i']['index']]['content'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 150, "...", true) : smarty_modifier_truncate($_tmp, 150, "...", true)); ?>
</p>
                        </div>
                    </div>
                </div><!-- end .col-md-6 -->
            </div><!-- end .widget-content -->
			<?php endfor; endif; ?>
			
			
			
        </div><!-- end .widget -->
    </div><!-- end .col-md-4 -->
</div><!-- end .row -->
<div class="row category-banner">
    <div class="col-md-4">
    	<a href="<?php echo $this->_tpl_vars['base_domain']; ?>
style" class="category-banner-box">
            <div class="front">
                 <div class="thumb thumb-medium">
                    <img src="<?php echo $this->_tpl_vars['base_domain']; ?>
assets/content/thumb/1.png"/>
                </div>
               <div class="caption-title">
                    <h4 style="color:#9fc5e1;">Style</h4>
                </div>
            </div>
        </a>
    </div><!-- end .col-md-4 -->
    <div class="col-md-4">
    	<a href="<?php echo $this->_tpl_vars['base_domain']; ?>
event" class="category-banner-box">
            <div class="front">
                 <div class="thumb thumb-medium">
                    <img src="<?php echo $this->_tpl_vars['base_domain']; ?>
assets/content/thumb/2.png"/>
                </div>
                <div class="caption-title">
                    <h4>Events</h4>
                </div>
            </div>
        </a>
    </div><!-- end .col-md-4 -->
    <div class="col-md-4">
    	<a href="<?php echo $this->_tpl_vars['base_domain']; ?>
skin" class="category-banner-box">
            <div class="front">
                 <div class="thumb thumb-medium">
                    <img src="<?php echo $this->_tpl_vars['base_domain']; ?>
assets/content/thumb/3.png"/>
                </div>
                   <div class="caption-title">
                    <h4 style="color:#dda1a6;">SKIN 101</h4>
                </div>
            </div>
        </a>
    </div><!-- end .col-md-4 -->
    <div class="col-md-4">
    	<a href="<?php echo $this->_tpl_vars['base_domain']; ?>
diy" class="category-banner-box">
            <div class="front">
                 <div class="thumb thumb-medium">
                    <img src="<?php echo $this->_tpl_vars['base_domain']; ?>
assets/content/thumb/4.png"/>
                </div>
                <div class="caption-title">
                    <h4>D.I.Y</h4>
                </div>
            </div>
        </a>
    </div><!-- end .col-md-4 -->
    <div class="col-md-4">
    	<a href="<?php echo $this->_tpl_vars['base_domain']; ?>
relations" class="category-banner-box">
            <div class="front">
                <div class="thumb thumb-medium">
                    <img src="<?php echo $this->_tpl_vars['base_domain']; ?>
assets/content/thumb/5.png"/>
                </div>
               <div class="caption-title">
                    <h4 style="color:#eba9b0;">Relations</h4>
                </div>
            </div>
        </a>
    </div><!-- end .col-md-4 -->
    <div class="col-md-4">
    	<a href="<?php echo $this->_tpl_vars['base_domain']; ?>
quiz" class="category-banner-box">
            <div class="front">
                <div class="thumb thumb-medium">
                    <img src="<?php echo $this->_tpl_vars['base_domain']; ?>
assets/content/thumb/6.png"/>
                </div>
              <div class="caption-title">
                    <h4 style="color:#e1c7ed;">Quiz</h4>
                </div>
            </div>
        </a>
    </div><!-- end .col-md-4 -->
</div><!-- end .row -->

<script>
<?php echo '

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