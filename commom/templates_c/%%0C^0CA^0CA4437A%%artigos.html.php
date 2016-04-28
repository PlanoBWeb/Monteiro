<?php /* Smarty version 2.6.12, created on 2016-04-28 10:27:54
         compiled from artigos.html */ ?>
<!DOCTYPE html>
<html lang="pt">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="robots" content="index, follow">
      <meta name="description" content="Fique por dentro dos artigos do escritório Marcos Monteiro" />
      <title><?php echo $this->_tpl_vars['titulo']; ?>
 – Artigos do escritório</title>
      <link href="commom/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="commom/css/estilo.css">
      <link href="commom/img/icon-tab.png" rel="icon">
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
         <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
         <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body itemscopeitemtype="http://schema.org/WebPage">
      <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../inc/google-tag-manager.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
      <div class="container-fluid no-padding">
         <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../inc/header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
         <!-- BreadCrumb -->
         <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../inc/breadcrumb.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
         <!-- BreadCrumb -->

         <!-- Conteudo -->
         <section class="conteudo-interna">
            <div class="row tamanho-max bloco-conteudo bloco-conteudo-noticias">
               <div class="col-xs-12 col-sm-8 col-md-8 pd-none encapsula-noticias">
                  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../inc/select-not-pub.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                  <?php if ($this->_tpl_vars['dados']): ?>
                     <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['dados']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                        <div class="col-xs-12 col-sm-12 col-md-12 pd-none conteudo-interna-publicacao">
                           <h2 class="titulo-publicacoes font-bold"><a href="artigo.php?id=<?php echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['numPubclicacaoAbrev']; ?>
</a></h2>
                           <a class="txt-desc-publicacao font-normal" href="artigo.php?id=<?php echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['tituloAbrev']; ?>
</a>
                           <p class="txt-noticias-info font-normal"><?php if ($this->_tpl_vars['dados'][$this->_sections['i']['index']]['por']): ?> <?php echo $this->_tpl_vars['arrayIdioma']['MN_NOT_POR']; ?>
: <?php echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['por']; ?>
  • <?php endif; ?> <?php echo $this->_tpl_vars['arrayIdioma']['MN_NOT_EM']; ?>
: <?php echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['nomeCategoria']; ?>
  </p>
                        </div>
                     <?php endfor; endif; ?>

                     <?php if ($this->_tpl_vars['totalPaginas'] > 1): ?>
                        <div class="bloco-paginacao">
                           <?php if ($this->_tpl_vars['anoPaginacao']): ?>
                              <a href="artigos.php?ano=<?php echo $this->_tpl_vars['anoPaginacao']; ?>
&mes=<?php echo $this->_tpl_vars['mesPaginacao']; ?>
&p=<?php echo $this->_tpl_vars['Numpaginas'][1]; ?>
" class="seta-esquerda fl-left seta-default">&lt;&lt;</a>
                           <?php elseif ($this->_tpl_vars['idCatPaginacao']): ?>
                              <a href="artigos.php?idCat=<?php echo $this->_tpl_vars['idCatPaginacao']; ?>
&p=<?php echo $this->_tpl_vars['Numpaginas'][1]; ?>
" class="seta-esquerda fl-left seta-default">&lt;&lt;</a>
                           <?php elseif ($this->_tpl_vars['tagPaginacao']): ?>
                              <a href="artigos.php?tag=<?php echo $this->_tpl_vars['tagPaginacao']; ?>
&p=<?php echo $this->_tpl_vars['Numpaginas'][1]; ?>
" class="seta-esquerda fl-left seta-default">&lt;&lt;</a>
                           <?php else: ?>
                              <a href="artigos.php?p=<?php echo $this->_tpl_vars['Numpaginas'][1]; ?>
" class="seta-esquerda fl-left seta-default">&lt;&lt;</a>
                           <?php endif; ?>
                           <?php unset($this->_sections['i']);
$this->_sections['i']['start'] = (int)1;
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['Numpaginas']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
if ($this->_sections['i']['start'] < 0)
    $this->_sections['i']['start'] = max($this->_sections['i']['step'] > 0 ? 0 : -1, $this->_sections['i']['loop'] + $this->_sections['i']['start']);
else
    $this->_sections['i']['start'] = min($this->_sections['i']['start'], $this->_sections['i']['step'] > 0 ? $this->_sections['i']['loop'] : $this->_sections['i']['loop']-1);
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = min(ceil(($this->_sections['i']['step'] > 0 ? $this->_sections['i']['loop'] - $this->_sections['i']['start'] : $this->_sections['i']['start']+1)/abs($this->_sections['i']['step'])), $this->_sections['i']['max']);
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
                              <?php if ($this->_tpl_vars['anoPaginacao']): ?>
                                 <a href="artigos.php?ano=<?php echo $this->_tpl_vars['anoPaginacao']; ?>
&mes=<?php echo $this->_tpl_vars['mesPaginacao']; ?>
&p=<?php echo $this->_tpl_vars['Numpaginas'][$this->_sections['i']['index']]; ?>
" class="link-paginacao <?php if ($this->_tpl_vars['Numpaginas'][$this->_sections['i']['index']] == $_GET['p']): ?> link-paginacao-ativo <?php endif; ?>"><?php echo $this->_tpl_vars['Numpaginas'][$this->_sections['i']['index']]; ?>
</a>
                              <?php elseif ($this->_tpl_vars['idCatPaginacao']): ?>
                                 <a href="artigos.php?idCat=<?php echo $this->_tpl_vars['idCatPaginacao']; ?>
&p=<?php echo $this->_tpl_vars['Numpaginas'][$this->_sections['i']['index']]; ?>
" class="link-paginacao <?php if ($this->_tpl_vars['Numpaginas'][$this->_sections['i']['index']] == $_GET['p']): ?> link-paginacao-ativo <?php endif; ?>"><?php echo $this->_tpl_vars['Numpaginas'][$this->_sections['i']['index']]; ?>
</a>
                              <?php elseif ($this->_tpl_vars['tagPaginacao']): ?>
                                 <a href="artigos.php?tag=<?php echo $this->_tpl_vars['tagPaginacao']; ?>
&p=<?php echo $this->_tpl_vars['Numpaginas'][$this->_sections['i']['index']]; ?>
" class="link-paginacao <?php if ($this->_tpl_vars['Numpaginas'][$this->_sections['i']['index']] == $_GET['p']): ?> link-paginacao-ativo <?php endif; ?>"><?php echo $this->_tpl_vars['Numpaginas'][$this->_sections['i']['index']]; ?>
</a>
                              <?php else: ?>
                                 <a href="artigos.php?p=<?php echo $this->_tpl_vars['Numpaginas'][$this->_sections['i']['index']]; ?>
" class="link-paginacao <?php if ($this->_tpl_vars['Numpaginas'][$this->_sections['i']['index']] == $_GET['p']): ?> link-paginacao-ativo <?php endif; ?>"><?php echo $this->_tpl_vars['Numpaginas'][$this->_sections['i']['index']]; ?>
</a>
                              <?php endif; ?>
                           <?php endfor; endif; ?>
                           
                           <?php if ($this->_tpl_vars['anoPaginacao']): ?>
                              <a href="artigos.php?ano=<?php echo $this->_tpl_vars['anoPaginacao']; ?>
&mes=<?php echo $this->_tpl_vars['mesPaginacao']; ?>
&p=<?php echo $this->_tpl_vars['ultimaPaginacao']; ?>
" class="seta-direita fl-left seta-default">&gt;&gt;</a>
                           <?php elseif ($this->_tpl_vars['idCatPaginacao']): ?>
                              <a href="artigos.php?idCat=<?php echo $this->_tpl_vars['idCatPaginacao']; ?>
&p=<?php echo $this->_tpl_vars['ultimaPaginacao']; ?>
" class="seta-direita fl-left seta-default">&gt;&gt;</a>
                           <?php elseif ($this->_tpl_vars['tagPaginacao']): ?>
                              <a href="artigos.php?tag=<?php echo $this->_tpl_vars['tagPaginacao']; ?>
&p=<?php echo $this->_tpl_vars['ultimaPaginacao']; ?>
" class="seta-direita fl-left seta-default">&gt;&gt;</a>
                           <?php else: ?>
                              <a href="artigos.php?p=<?php echo $this->_tpl_vars['ultimaPaginacao']; ?>
" class="seta-direita fl-left seta-default">&gt;&gt;</a>
                           <?php endif; ?>
                        </div>
                     <?php endif; ?>
                  <?php else: ?>
                     <br><br>
                     <p class="sem-resultado font-bold"><?php echo $this->_tpl_vars['arrayIdioma']['MN_RESULT_BUSCA']; ?>
</p>
                  <?php endif; ?>
               </div>

               <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../inc/menu-lateral-blog.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            </div>
         </section>
         <!-- Conteudo -->
         <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../inc/footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
      </div>
  </body>
</html>