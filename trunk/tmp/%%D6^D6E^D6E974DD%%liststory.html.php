<?php /* Smarty version 2.6.13, created on 2015-05-06 15:27:32
         compiled from application/admin//apps/liststory.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'application/admin//apps/liststory.html', 104, false),)), $this); ?>
<script>
<?php echo '
function paging_ajax_story(fungsi,start){ 
				
	$.post(basedomain+"story/pagingstory",{start:start,ajax:1},function(response){
	
		if(response){
			  if(response.status==true){
				var str="";
				$.each(response.data,function(k,v){
					
						str+=\'<tr>\';
						str+=\'<td>\'+v.no+\'</td>\';
						str+=\'<td>\';
						if(v.id_category==1)
						{
						str+=\'Style\';
						}else if(v.id_category==2){
						str+=\'Event\';
						}else if(v.id_category==3){
						str+=\'Skin\';
						}else if(v.id_category==4){
						str+=\'D.I.Y\';
						}else if(v.id_category==5){
						str+=\'Relations\';
						}
						str+=\'</td>\';
						str+=\'<td>\'+v.title+\'</td>\';
						str+=\'<td>\'+v.content.substring(0, 150)+\'..</td>\';
						str+=\'<td>\'+v.date+\'</td>\';
						str+=\'<td>\'+v.like+\'</td>\';
						str+=\'<td>\'+v.view_count+\'</td>\';
						str+=\'<td>\'+v.share_twitter+\'</td>\';
						str+=\'<td>\'+v.share_fb+\'</td>\';
						str+=\'<td>\';
						if (v.n_status==1)
						{
						str+=\'<center><input type="checkbox" class="checkinactive" value="\'+v.id+\'" checked>Tampil</center>\';
						}else{
						str+=\'<center><input type="checkbox" class="checkactive" value="\'+v.id+\'"></center>\';
						}
						str+=\'</td>\';
						str+=\'<td><a href="javascript:void(0)" class="button" onClick="confirmation(\\\'\'+basedomain+\'story/hapus?param=\'+v.id+\'\\\',\\\'Confirm to Delete?\\\')" > Delete</a>\';
						str+=\'</td>\';
						str+=\'</tr>\';
						
						});
						
						$(\'.pagilist\').html(str);
						likeunlike();	
					
				}
			}
		},"JSON");
	}
	
'; ?>

	</script>

<div class="page_section" id="project-page">
    <div id="container">
        <div class="titlebox">
            <h2 class="fl"><span class="icon-users">&nbsp;</span> Story Article</h2>
               <h2 class="fr"><a href="<?php echo $this->_tpl_vars['basedomain']; ?>
story/addstory" class="button2">Add New</a></h2> 
        </div><!-- end .titlebox -->
        <div class="content">
        	<div class="summary">
       		
            </div><!-- end .summary -->
			<table cellpadding="0" cellspacing="0" border="0" width="100%">
			<thead>
				<tr>
					<th class="head0">No</th>
					<th class="head0">Category</th> 
					<th class="head0">Title</th> 
					<th class="head0" width="30%">Description</th> 
					<th class="head0">Date</th> 
					<th class="head0">Like Count</th> 
					<th class="head0">View Count</th> 
					<th class="head0">Share Twitter</th> 
					<th class="head0">Share FB</th> 
					<th class="head0">Status</th> 
					<th class="head0">Action</th> 
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
			<td><?php if ($this->_tpl_vars['list'][$this->_sections['i']['index']]['id_category'] == 1): ?>
			Style
			<?php elseif ($this->_tpl_vars['list'][$this->_sections['i']['index']]['id_category'] == 2): ?>
			Event
			<?php elseif ($this->_tpl_vars['list'][$this->_sections['i']['index']]['id_category'] == 3): ?>
			Skin
			<?php elseif ($this->_tpl_vars['list'][$this->_sections['i']['index']]['id_category'] == 4): ?>
			D.I.Y
			<?php elseif ($this->_tpl_vars['list'][$this->_sections['i']['index']]['id_category'] == 5): ?>
			Relations
			<?php endif; ?>
			
			</td>
			<td><?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['title']; ?>
</td>
			<td><?php echo ((is_array($_tmp=$this->_tpl_vars['list'][$this->_sections['i']['index']]['content'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 150, '...', true) : smarty_modifier_truncate($_tmp, 150, '...', true)); ?>
</td>
			<td><?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['date']; ?>
</td>
			<td><?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['like']; ?>
</td>
			<td><?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['view_count']; ?>
</td>
			<td><?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['share_twitter']; ?>
</td>
			<td><?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['share_fb']; ?>
</td>
			<td><?php if ($this->_tpl_vars['list'][$this->_sections['i']['index']]['n_status'] == 1): ?><center><input type="checkbox" class="checkinactive" value="<?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['id']; ?>
" checked>Tampil</center><?php else: ?><center><input type="checkbox" class="checkactive" value="<?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['id']; ?>
"></center><?php endif; ?></td>
			<td>
			
			<a href="<?php echo $this->_tpl_vars['basedomain']; ?>
story/edit?id=<?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['id']; ?>
" class="button"  > Edit</a>
			
			<a href="javascript:void(0)" class="button" onClick="confirmation('<?php echo $this->_tpl_vars['basedomain']; ?>
story/hapus?param=<?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['id']; ?>
','Confirm to Delete?')" > Delete</a></td>
			</tr>
			<?php endfor; endif; ?>	
			</tbody>
			</table>
            <div id="paging_of_career_list" class="paging">
             
            </div>
        </div><!-- end .content -->
    </div><!-- end #container -->
</div><!-- end #home -->

<script type="text/javascript">
	getpaging(0,<?php echo $this->_tpl_vars['total']; ?>
,"paging_of_career_list","paging_ajax_story",10);
</script>

<script>
<?php echo '
likeunlike();

function likeunlike(){

$(document).ready(function(){
			$(".checkactive").on("click", function(){
			var idnya=$(this).val();
			var thisnya=$(this);
					  $.ajax({
                        \'type\': \'POST\',
                        \'url\': basedomain+\'story/checkit\',
                        \'data\': {idnya:idnya},
						\'dataType\':\'json\',
                        \'success\': function(result){
						
							thisnya.hide();
							thisnya.parent().html(\'<center><input type="checkbox" class="checkinactives" value=\'+idnya+\' checked>Tampil</center>\');
							
							$(document).ready(function(){
							$(".checkinactives").on("click", function(){
							var idnya=$(this).val();
							var thisnya=$(this);
									  $.ajax({
										\'type\': \'POST\',
										\'url\': basedomain+\'story/incheckit\',
										\'data\': {idnya:idnya},
										\'dataType\':\'json\',
										\'success\': function(result){
										
											thisnya.hide();
											thisnya.parent().html(\'<center><input type="checkbox" class="checkactive" value=\'+idnya+\'></center>\');
											likeunlike();
										}
										
										});

								});
							});
						}
						
						});

				});
			});
			
$(document).ready(function(){
			$(".checkinactive").on("click", function(){
			var idnya=$(this).val();
			var thisnya=$(this);
					  $.ajax({
                        \'type\': \'POST\',
                        \'url\': basedomain+\'story/incheckit\',
                        \'data\': {idnya:idnya},
						\'dataType\':\'json\',
                        \'success\': function(result){
						
							thisnya.hide();
							thisnya.parent().html(\'<center><input type="checkbox" class="checkactive" value="\'+idnya+\'"></center>\');
							likeunlike();
						}
						
						});

				});
			});
}
'; ?>

</script>
