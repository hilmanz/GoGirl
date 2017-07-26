<?php /* Smarty version 2.6.13, created on 2015-05-06 15:27:31
         compiled from application/admin//apps/listregalfa.html */ ?>
<div class="page_section" id="project-page">
    <div id="container">
        <div class="titlebox">
            <h2 class="fl"><span class="icon-users">&nbsp;</span> List Registrasi User </h2>
             
        </div><!-- end .titlebox -->
        <div class="content">
        	<div class="summary">
       		
            </div><!-- end .summary -->
			<table cellpadding="0" cellspacing="0" border="0" width="100%">
			<thead>
				<tr>
					<th class="head0">No</th>
					<th class="head0">Nama</th> 
					<th class="head0">Umur</th> 
					<th class="head0">No HP</th> 
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
			<td><?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['nama']; ?>
</td>
			<td><?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['umur']; ?>
 thn</td>
			<td><?php echo $this->_tpl_vars['list'][$this->_sections['i']['index']]['telp']; ?>
</td>
			
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
,"paging_of_career_list","paging_ajax_career",10);
</script>