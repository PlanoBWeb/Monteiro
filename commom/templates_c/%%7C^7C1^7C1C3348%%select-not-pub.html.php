<?php /* Smarty version 2.6.12, created on 2015-11-18 13:45:32
         compiled from ../inc/select-not-pub.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', '../inc/select-not-pub.html', 4, false),)), $this); ?>
<form>
   <select class="select-internas visible-xs-block" id="formRedirect">
      <option value="Selecione">Selecione</option>
      <?php $this->assign('nmTipo', ((is_array($_tmp=@$this->_tpl_vars['nmTipo'])) ? $this->_run_mod_handler('default', true, $_tmp, "") : smarty_modifier_default($_tmp, ""))); ?>
      <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['dadosMenuBlog']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
            <?php if ($this->_tpl_vars['nmTipo'] <> $this->_tpl_vars['dadosMenuBlog'][$this->_sections['i']['index']]['dataMes'][0]): ?>
               <option disabled value=""><?php echo $this->_tpl_vars['dadosMenuBlog'][$this->_sections['i']['index']]['dataMes'][0]; ?>
</option>
            <?php endif; ?>
            <?php $this->assign('nmTipo', $this->_tpl_vars['dadosMenuBlog'][$this->_sections['i']['index']]['dataMes'][0]); ?>

            <?php $this->assign('nmTipoMes', ((is_array($_tmp=@$this->_tpl_vars['nmTipoMes'])) ? $this->_run_mod_handler('default', true, $_tmp, "") : smarty_modifier_default($_tmp, ""))); ?>
               <?php if ($this->_tpl_vars['nmTipoMes'] <> $this->_tpl_vars['dadosMenuBlog'][$this->_sections['i']['index']]['Mes']): ?>
                  <option value="<?php echo $this->_tpl_vars['paginaMenuBlogInver']; ?>
?ano=<?php echo $this->_tpl_vars['dadosMenuBlog'][$this->_sections['i']['index']]['dataMes'][0]; ?>
&mes=<?php echo $this->_tpl_vars['dadosMenuBlog'][$this->_sections['i']['index']]['dataMes'][1]; ?>
">&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['dadosMenuBlog'][$this->_sections['i']['index']]['Mes']; ?>
</option>
                  
               <?php endif; ?>
            <?php $this->assign('nmTipoMes', $this->_tpl_vars['dadosMenuBlog'][$this->_sections['i']['index']]['Mes']); ?>
      <?php endfor; endif; ?>  
   </select>
</form>