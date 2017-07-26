<?php /* Smarty version 2.6.13, created on 2015-05-06 15:45:39
         compiled from application/web//header.html */ ?>
 <header id="header" class="header">
    	<div class="container">
        	<div class="row">
                <div class="topbanner banner-ads">
                    <a href="register"><img src="<?php echo $this->_tpl_vars['basedomain']; ?>
assets/content/banner.jpg"/></a>
                </div>
            </div><!-- end .row -->
        	<div class="row navigation">
            	<div class="col-md-4">
                	<div class="logo">
					<a href="https://www.facebook.com/cleanclearindonesia" target="_blank" ><img src="<?php echo $this->_tpl_vars['basedomain']; ?>
assets/images/logo-cleanclear.png"/></a>
                    		<a href="http://www.gogirlmagz.com/" target="_blank"><img src="<?php echo $this->_tpl_vars['basedomain']; ?>
assets/images/logo.png"/></a>
                    </div>
                </div><!-- end .col-md-4 -->
            	<div class="col-md-8">
                    <nav class="navbar nav-collapse">
                          <ul id="menu">
                           <li <?php if ($this->_tpl_vars['pages'] == 'home'): ?>class="current"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['basedomain']; ?>
home"><span>Home</span></a></li>
                            <li <?php if ($this->_tpl_vars['pages'] == 'style'): ?>class="current"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['basedomain']; ?>
style"><span>Style</span></a></li>
                            <li <?php if ($this->_tpl_vars['pages'] == 'event'): ?>class="current"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['basedomain']; ?>
event"><span>Events</span></a></li>
                            <li <?php if ($this->_tpl_vars['pages'] == 'skin'): ?>class="current"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['basedomain']; ?>
skin"><span>Skin 101</span></a></li>
                            <li <?php if ($this->_tpl_vars['pages'] == 'diy'): ?>class="current"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['basedomain']; ?>
diy"><span>D.I.Y</span></a></li>
                            <li <?php if ($this->_tpl_vars['pages'] == 'relations'): ?>class="current"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['basedomain']; ?>
relations"><span>Relations</span></a></li>
                            <li <?php if ($this->_tpl_vars['pages'] == 'quiz'): ?>class="current"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['basedomain']; ?>
quiz"><span>Quiz</span></a></li>
                          </ul>
                    </nav>
                </div><!-- end .col-md-4 -->
                <button class="btn-search" id="showsearch"><i class="icon-search">&nbsp;</i></button>
                <div id="navbarmobile"></div>
            </div><!-- end .row -->
        	<div class="row">
                <div class="searchbox-container">
                    <div class="searchbox">
                        <div class="search-form-overlay"></div>
                         <form class="search-form" action="<?php echo $this->_tpl_vars['basedomain']; ?>
search" method="post">
                            <div class="formbox">
                                <input type="text" name="param">
                                <label>Tap enter after search</label>
                                <button type="submit" class="btn-search"><i class="icon-search">&nbsp;</i></button>
                            </div>
                        </form>
                    </div>
                     <a class="close-search" href="#">&nbsp;</a>
                </div>
            </div><!-- end .row -->
        </div><!-- end .container -->
    </header><!-- end #header -->
	
<script>
<?php echo '
$(document).ready(function(){
			$(document).on("click",".twitter-share", function(){
			console.log(\'masuk\');
			var likenya=$(this).attr(\'likeidnya\');
			var thiss=$(this);
			$.ajax({
                        \'type\': \'POST\',
                        \'url\': basedomain+\'likemodul/liketwitter\',
                        \'data\': {like:likenya},
						\'dataType\':\'json\',
                        \'success\': function(result){
							
						
						}
						
						})
				});
});


$(document).ready(function(){
			$(document).on("click",".fb-share", function(){
			console.log(\'masuk\');
			var likenya=$(this).attr(\'likeidnya\');
			var thiss=$(this);
			$.ajax({
                        \'type\': \'POST\',
                        \'url\': basedomain+\'likemodul/likefb\',
                        \'data\': {like:likenya},
						\'dataType\':\'json\',
                        \'success\': function(result){
							
						
						}
						
						})
				});
});
'; ?>

</script>