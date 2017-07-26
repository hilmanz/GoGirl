<?php /* Smarty version 2.6.13, created on 2015-05-06 15:27:23
         compiled from application/admin//apps/listregister.html */ ?>
<div class="page_section" id="project-page">
    <div id="container">
        <div class="titlebox">
            <h2 class="fl"><span class="icon-users">&nbsp;</span> List Registrasi User </h2>
               <h2 class="fr"><a href="<?php echo $this->_tpl_vars['basedomain']; ?>
register/callsheader"  target='_blank' class="button2">Download Data</a></h2>
        </div><!-- end .titlebox -->
        <div class="content">
        	<div class="summary">
       		
            </div><!-- end .summary -->
			<table cellpadding="0" cellspacing="0" border="0" width="100%">
			<thead>
				<tr>
					<th class="head0">No</th>
					<th class="head0">name</th> 
					<th class="head0">alamat</th> 
					<th class="head0">telp</th> 
					<th class="head0">email</th> 
					<th class="head0">story</th>
					<th class="head0">avatar</th>
					<th class="head0">file article</th>
					<th class="head0">Action Proses/Delete</th> 
				</tr>
			</thead>
			<tbody class="pagilist">
			<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
			<tr>
			<td><?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['no']; ?>
</td>
			<td><?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['name']; ?>
</td>
			<td width="250"><?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['alamat']; ?>
</td>
			<td><?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['telp']; ?>
</td>
			<td><?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['email']; ?>
</td>
			<td><?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['story']; ?>
</td>
			<td><a href="javascript:void(0)" class="button"  target="_blank"  onClick="confirmation('<?php echo $this->_tpl_vars['basedomainpath']; ?>
public_html/public_assets/avatar/<?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['avatar']; ?>
','Confirm to Download This Avatar?')" > Download</a></td>
			<td><a href="javascript:void(0)" class="button" target="_blank" onClick="confirmation('<?php echo $this->_tpl_vars['basedomainpath']; ?>
public_html/public_assets/docregistrasi/<?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['resume']; ?>
','Confirm to Download This Avatar?')" > Download</a></td>
			<td width="150"><a href="<?php echo $this->_tpl_vars['basedomain']; ?>
story/addstory?reguser=<?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['id']; ?>
" class="button"> Proses Story </a>
			<a href="javascript:void(0)" class="button" onClick="confirmation('<?php echo $this->_tpl_vars['basedomain']; ?>
register/hapus?param=<?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['id']; ?>
','Confirm to Delete?')" ><span class="icon-trash">&nbsp;</span> Delete</a></td>
			</tr>
			<?php endfor; endif; ?>	
			</tbody>
			</table>
            <div id="paging_of_register_list" class="paging">
              <a href="#"><span class="icon-first">&nbsp;</span></a>
              <a href="#"><span class="icon-backward2">&nbsp;</span></a>
              <a href="#">1</a>
              <a href="#">2</a>
              <a href="#" class="current">3</a>
              <a href="#">4</a>
              <a href="#">5</a>
              <a href="#"><span class="icon-forward3">&nbsp;</span></a>
              <a href="#"><span class="icon-last">&nbsp;</span></a>
            </div>
        </div><!-- end .content -->
    </div><!-- end #container -->
</div><!-- end #home -->

<script type="text/javascript">
	getpaging(0,<?php echo $this->_tpl_vars['total']; ?>
,"paging_of_register_list","paging_ajax_register",10);
</script>


<script>
<?php echo '
function paging_ajax_register(fungsi,start){ 
				
	$.post(basedomain+"register/paging",{start:start,ajax:10},function(response){
	
		if(response){
			  if(response.status==true){
				var str="";
				$.each(response.data,function(k,v){
					
						str+=\'<tr>\';
						str+=\'<td>\'+v.no+\'</td>\';
						str+=\'<td>\'+v.name+\'</td>\';
						str+=\'<td>\'+v.alamat+\'</td>\';
						str+=\'<td>\'+v.telp+\'</td>\';
						str+=\'<td>\'+v.email+\'</td>\';
						str+=\'<td>\'+v.story+\'</td>\';
						
						str+=\'<td><a href="javascript:void(0)" class="button" onClick="confirmation(\\\'\'+basedomainpath+\'public_html/public_assets/avatar/\'+v.avatar+\'\\\',\\\'Confirm to Delete?\\\')" > Download</a></td>\';
						str+=\'<td><a href="javascript:void(0)" class="button" onClick="confirmation(\\\'\'+basedomainpath+\'public_html/public_assets/docregistrasi/\'+v.id+\'\\\',\\\'Confirm to Delete?\\\')" > Download</a></td>\';
					
					
						str+=\'<td><a href="\'+basedomain+\'story/addstory?reguser=\'+v.id+\'" class="button"> Proses </a><a href="javascript:void(0)" class="button" onClick="confirmation(\\\'\'+basedomain+\'register/hapus?param=\'+v.id+\'\\\',\\\'Confirm to Delete?\\\')" > <span class="icon-trash">&nbsp;</span>Delete</a></td>\';
						str+=\'</tr>\';
						
						});
						
						$(\'.pagilist\').html(str);
					
					
				}
			}
		},"JSON");
	}

'; ?>

</script>