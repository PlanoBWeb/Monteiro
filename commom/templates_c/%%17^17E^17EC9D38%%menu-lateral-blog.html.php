<?php /* Smarty version 2.6.12, created on 2015-11-16 17:51:42
         compiled from ../inc/menu-lateral-blog.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', '../inc/menu-lateral-blog.html', 27, false),)), $this); ?>
<div class="col-xs-12 col-sm-4 col-md-4 bloco-menu-lateral">
   <h2 class="titulo-menu-destaques font-normal"><?php echo $this->_tpl_vars['arrayIdioma']['MN_NOT_DESTA']; ?>
</h2><br>
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
      <div class="bloco-noticia-destaque">
         <?php if ($this->_tpl_vars['dadosMenuBlog'][$this->_sections['i']['index']]['idTipo'] != ""): ?>
            <a class="txt-desc-noticias font-normal" href="<?php echo $this->_tpl_vars['paginaMenuBlog']; ?>
?id=<?php echo $this->_tpl_vars['dadosMenuBlog'][$this->_sections['i']['index']]['id']; ?>
"><strong><?php echo $this->_tpl_vars['dadosMenuBlog'][$this->_sections['i']['index']]['numPubclicacao']; ?>
</strong></a><br>
            <a class="txt-desc-noticias font-normal" href="<?php echo $this->_tpl_vars['paginaMenuBlog']; ?>
?id=<?php echo $this->_tpl_vars['dadosMenuBlog'][$this->_sections['i']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['dadosMenuBlog'][$this->_sections['i']['index']]['tituloAbrev']; ?>
</a>
         <?php else: ?>
            <a href="<?php echo $this->_tpl_vars['paginaMenuBlog']; ?>
?id=<?php echo $this->_tpl_vars['dadosMenuBlog'][$this->_sections['i']['index']]['id']; ?>
">
               <img src="<?php echo $this->_tpl_vars['dadosMenuBlog'][$this->_sections['i']['index']]['caminhoImagemThumb']; ?>
" alt="<?php echo $this->_tpl_vars['dadosMenuBlog'][$this->_sections['i']['index']]['tituloAbrev']; ?>
" title="<?php echo $this->_tpl_vars['dadosMenuBlog'][$this->_sections['i']['index']]['tituloAbrev']; ?>
">
            </a>
            <a class="txt-desc-noticias font-normal" href="<?php echo $this->_tpl_vars['paginaMenuBlog']; ?>
?id=<?php echo $this->_tpl_vars['dadosMenuBlog'][$this->_sections['i']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['dadosMenuBlog'][$this->_sections['i']['index']]['tituloAbrev']; ?>
</a>
         <?php endif; ?>
         <p class="txt-noticias-info font-normal pd-none"><?php echo $this->_tpl_vars['dadosMenuBlog'][$this->_sections['i']['index']]['dataMes'][2]; ?>
 <?php echo $this->_tpl_vars['dadosMenuBlog'][$this->_sections['i']['index']]['Mes']; ?>
 <?php echo $this->_tpl_vars['dadosMenuBlog'][$this->_sections['i']['index']]['dataMes'][0]; ?>
</p>
      </div>
   <?php endfor; endif; ?>
  <!--  <div class="bloco-busca-blog">
      <form class="form-search" method="post" name="indique">
         <input class="font-normal form-compartilhe" type="text" name="indique" placeholder="BUSCA...">
         <input class="btn-ok cinza font-normal" type="submit" value="ok">
      </form>
   </div> -->
   <div class="bloco-links-blog">
      <h2 class="titulo-menu-lateral font-normal"><?php echo $this->_tpl_vars['arrayIdioma']['MN_NOT_ARQ']; ?>
</h2>
      <nav class="menu-lateral">
         <ul>
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
                        </ul>
                     </li>
                     <li class="linha-menu-lateral"><a class="ano-menu-lateral link-menu-lateral font-normal" href=""><?php echo $this->_tpl_vars['dadosMenuBlog'][$this->_sections['i']['index']]['dataMes'][0]; ?>
</a>
                     <ul class="submenu-ano">                     
                  <?php endif; ?>
                  <?php $this->assign('nmTipo', $this->_tpl_vars['dadosMenuBlog'][$this->_sections['i']['index']]['dataMes'][0]); ?>

                  <?php $this->assign('nmTipoMes', ((is_array($_tmp=@$this->_tpl_vars['nmTipoMes'])) ? $this->_run_mod_handler('default', true, $_tmp, "") : smarty_modifier_default($_tmp, ""))); ?>
                     <?php if ($this->_tpl_vars['nmTipoMes'] <> $this->_tpl_vars['dadosMenuBlog'][$this->_sections['i']['index']]['Mes']): ?>
                        <li class="linha-menu-lateral">
                           <a class="link-menu-lateral font-normal" href="<?php echo $this->_tpl_vars['paginaMenuBlogInver']; ?>
?ano=<?php echo $this->_tpl_vars['dadosMenuBlog'][$this->_sections['i']['index']]['dataMes'][0]; ?>
&mes=<?php echo $this->_tpl_vars['dadosMenuBlog'][$this->_sections['i']['index']]['dataMes'][1]; ?>
"><?php echo $this->_tpl_vars['dadosMenuBlog'][$this->_sections['i']['index']]['Mes']; ?>
</a>
                        </li>
                     <?php endif; ?>
                  <?php $this->assign('nmTipoMes', $this->_tpl_vars['dadosMenuBlog'][$this->_sections['i']['index']]['Mes']); ?>
            <?php endfor; endif; ?>  
         </ul>
      </nav>
   </div>
   <div class="bloco-links-blog">
      <h2 class="titulo-menu-lateral font-normal"><?php echo $this->_tpl_vars['arrayIdioma']['MN_NOT_CAT']; ?>
</h2>
      <nav class="menu-lateral">
         <ul>
            <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['dadosCategoria']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
               <li class="linha-menu-lateral"><a class="link-menu-lateral font-normal" href="<?php echo $this->_tpl_vars['paginaMenuBlogInver']; ?>
?idCat=<?php echo $this->_tpl_vars['dadosCategoria'][$this->_sections['i']['index']]['Idcategoria']; ?>
"><?php echo $this->_tpl_vars['dadosCategoria'][$this->_sections['i']['index']]['nomeCategoria']; ?>
</a></li>
            <?php endfor; endif; ?>  
         </ul>
      </nav>
   </div>
   <div class="bloco-links-blog bloco-tags">
      <h2 class="titulo-menu-lateral font-normal"><?php echo $this->_tpl_vars['arrayIdioma']['MN_NOT_TAG']; ?>
</h2>
      <!-- <a class="tags-lateral font-normal" href="">Teste</a> -->
      <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['dadosTags']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
         <a class="tags-lateral font-normal" href="<?php echo $this->_tpl_vars['paginaMenuBlogInver']; ?>
?tag=<?php echo $this->_tpl_vars['dadosTags'][$this->_sections['i']['index']]; ?>
"><?php echo $this->_tpl_vars['dadosTags'][$this->_sections['i']['index']]; ?>
</a>
      <?php endfor; endif; ?> 
      <!-- <a class="tags-lateral font-normal" href="">Teste</a> -->
   </div> 
</div>