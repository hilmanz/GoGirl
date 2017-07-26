<?php /* Smarty version 2.6.13, created on 2015-05-06 15:27:32
         compiled from application/admin//master.html */ ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<?php echo $this->_tpl_vars['meta']; ?>

<body>
  <div id="body">
    <div id="page">
      <?php if ($this->_tpl_vars['pages'] != 'login' && $this->_tpl_vars['pages'] != 'logout'): ?>
      <div id="sidebar">
        <div id="navbar">
            <ul>
				<li><a class="<?php if ($this->_tpl_vars['pages'] == 'home'): ?>active<?php endif; ?>" href="<?php echo $this->_tpl_vars['basedomain']; ?>
home" ><span class="icon-home">&nbsp;</span><span>Home</span></a></li>
				<li><a class="<?php if ($this->_tpl_vars['pages'] == 'banner'): ?>active<?php endif; ?>" href="<?php echo $this->_tpl_vars['basedomain']; ?>
banner" ><span class="icon-users">&nbsp;</span><span>Banner</span></a></li>	
				<li><a class="<?php if ($this->_tpl_vars['pages'] == 'register'): ?>active<?php endif; ?>" href="<?php echo $this->_tpl_vars['basedomain']; ?>
register" ><span class="icon-users">&nbsp;</span><span>List Registrasi User </span></a></li>				
                <li><a class="<?php if ($this->_tpl_vars['pages'] == 'story'): ?>active<?php endif; ?>" href="<?php echo $this->_tpl_vars['basedomain']; ?>
story" ><span class="icon-file">&nbsp;</span><span>Story Article</span></a></li>		
                <li><a class="<?php if ($this->_tpl_vars['pages'] == 'register'): ?>comment<?php endif; ?>" href="<?php echo $this->_tpl_vars['basedomain']; ?>
comment" ><span class="icon-bubble">&nbsp;</span><span>Comment </span></a></li>						
			
				<li><a class="<?php if ($this->_tpl_vars['pages'] == 'register'): ?>registeralfa<?php endif; ?>" href="<?php echo $this->_tpl_vars['basedomain']; ?>
registeralfa" ><span class="icon-list">&nbsp;</span><span>List User Alfa </span></a></li>	
				<li><a class="<?php if ($this->_tpl_vars['pages'] == 'register'): ?>quiz<?php endif; ?>" href="<?php echo $this->_tpl_vars['basedomain']; ?>
quiz" ><span class="icon-list">&nbsp;</span><span>Quiz</span></a></li>					
                <li><a class="<?php if ($this->_tpl_vars['pages'] == 'register'): ?>logout<?php endif; ?>" href="<?php echo $this->_tpl_vars['basedomain']; ?>
logout.php" ><span class="icon-lock">&nbsp;</span><span>Logout </span></a></li>		
              </ul>
          </div>
      </div><!-- end #sidebar -->
		  <?php echo $this->_tpl_vars['header']; ?>

      <?php endif; ?>
        <div id="thecontent">
             <?php echo $this->_tpl_vars['mainContent']; ?>

        </div><!-- /#thecontent -->
		  <?php echo $this->_tpl_vars['footer']; ?>

		  

    </div><!-- end #page -->
  </div><!-- end #body -->    
</body>
</html>