<?php /* Smarty version 2.6.12, created on 2016-04-14 11:19:33
         compiled from palestra.html */ ?>
<!DOCTYPE html>
<html lang="pt">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="robots" content="index, follow">
      <meta name="description" content="<?php echo $this->_tpl_vars['dados'][0]['titulo']; ?>
" />
      <title>Marcos Monteiro Sociedade de Advogados – Palestras do escritório</title>
      <link href="commom/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="commom/css/estilo.css">
      <link href="commom/img/icon-tab.png" rel="icon">
      <meta property="og:url"           content="<?php echo $this->_tpl_vars['urlCompleta']; ?>
" />
      <meta property="og:type"          content="website" />
      <meta property="og:title"         content="<?php echo $this->_tpl_vars['dados'][0]['titulo']; ?>
" />
      <meta property="og:description"   content="<?php echo $this->_tpl_vars['dados'][0]['textoSemTag']; ?>
" />
      <meta property="og:image"         content="http://www.gabanmonteiroadv.com.br/homologacao/<?php echo $this->_tpl_vars['dados'][0]['caminhoImagem']; ?>
" />
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
         <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
         <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
      <link rel="canonical" href="http://gabanmonteiroadv.com.br/" />
    <script src="https://apis.google.com/js/platform.js" async defer></script>
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
                  <div class="col-xs-12 col-sm-12 col-md-12 pd-none conteudo-interna-not">
                     <div class="bloco-imprimi">
                        <h2 class="num-informativo font-normal"><?php echo $this->_tpl_vars['dados'][0]['numPubclicacao']; ?>
</h2>
                        <h1 class="titulo-noticias font-normal"><?php echo $this->_tpl_vars['dados'][0]['titulo']; ?>
</h1>
                        <p class="txt-noticias-info font-normal"> <?php if ($this->_tpl_vars['dados'][0]['por']): ?> <?php echo $this->_tpl_vars['arrayIdioma']['MN_NOT_POR']; ?>
:  <?php echo $this->_tpl_vars['dados'][0]['por']; ?>
   • <?php endif; ?> <?php echo $this->_tpl_vars['arrayIdioma']['MN_NOT_EM']; ?>
: <?php echo $this->_tpl_vars['dados'][0]['nomeCategoria']; ?>
  </p>
                        <!-- •   <?php echo $this->_tpl_vars['dados'][0]['dataMes'][2]; ?>
 <?php echo $this->_tpl_vars['dados'][0]['Mes']; ?>
 <?php echo $this->_tpl_vars['dados'][0]['dataMes'][0]; ?>
 -->
                        <p class="txt-desc-noticias font-normal">
                           <?php echo $this->_tpl_vars['dados'][0]['texto']; ?>

                        </p>
                        <br>

                        <div class="row bloco-tags-post">
                           <img class="icone-tag-not" src="commom/img/icon-tags.png" alt="icone tag" title="icone tag">
                           <!-- <p class="txt-desc-noticias font-normal"><?php echo $this->_tpl_vars['dados'][0]['tag']; ?>
</p>                            -->
                           <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['dadosTagsPg']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                              <a class="txt-desc-noticias font-normal" href="<?php echo $this->_tpl_vars['paginaMenuBlogInver']; ?>
?tag=<?php echo $this->_tpl_vars['dadosTagsPg'][$this->_sections['i']['index']]; ?>
"><?php echo $this->_tpl_vars['dadosTagsPg'][$this->_sections['i']['index']]; ?>
</a>
                           <?php endfor; endif; ?> 
                        </div>
                        <div class="row">
                           <img class="icone-tag-not" src="commom/img/icon-imprimi.png" alt="icone tag" title="icone tag">
                           <a href="" class="txt-desc-noticias font-normal" onclick="print();"><?php echo $this->_tpl_vars['arrayIdioma']['MN_NOT_IMPRIMI']; ?>
</a>    
                        </div>
                     </div>

                     <div class="row bloco-compartile-not">
                        <div class="col-xs-12 col-sm-6 col-md-6 pd-none">
                           <h2 class="titulo-menu-lateral font-normal"><?php echo $this->_tpl_vars['arrayIdioma']['MN_NOT_COMP']; ?>
</h2>
                           <div class="col-xs-12 col-sm-4 col-md-4" style="max-width: 120px !important; overflow:hidden !important; padding-left: 0px;">
                              <!-- <div class="fb-like" style="width: 60px"></div>  -->
                              <div class="fb-share-button" data-href="<?php echo $this->_tpl_vars['urlCompleta']; ?>
" data-layout="button"></div>
                           </div>
                           <div class="col-xs-12 col-sm-3 col-md-3 btn-twitter" style="padding-left: 0px; padding-right: 0px;">
                              <a href="http://twitter.com/share" class="twitter-share-button" data-url="<?php echo $this->_tpl_vars['urlCompleta']; ?>
"  data-count="horizontal" data-lang="pt">Tweetar</a> 
                           </div>
                           <div class="col-xs-12 col-sm-2 col-md-2" style="padding-left: 0px;">
                              <g:plusone href="<?php echo $this->_tpl_vars['urlCompleta']; ?>
"></g:plusone>
                           </div>
                           <!-- <div class="col-xs-12 col-sm-3 col-md-3 pd-none"><p class="share-noticia font-normal"><img src="commom/img/mais-share.jpg" title="share" alt="share"> Share</p></div> -->
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 pd-none">
                           <h2 class="titulo-menu-lateral font-normal"><?php echo $this->_tpl_vars['arrayIdioma']['MN_NOT_IND_PUB']; ?>
</h2>
                           <form method="post" name="formIndiqueNot">
                              <input type="hidden" name="acao" value="indiqueNot">
                              <input class="font-normal form-compartilhe form-compartilhe-nome" type="text" name="nome" placeholder="<?php echo $this->_tpl_vars['arrayIdioma']['MN_FORM_NOME']; ?>
...">
                              <input class="font-normal form-compartilhe" type="text" name="email" placeholder="<?php echo $this->_tpl_vars['arrayIdioma']['MN_FORM_EMAIL']; ?>
...">
                              <input class="btn-ok cinza font-normal" type="submit" value="ok" onclick="return enviarindiqueNot();">
                           </form>
                        </div>
                     </div>  
                     <?php if ($this->_tpl_vars['dadosVejaTambem'] != ""): ?>
                        <div class="row bloco-leia-tambem">
                           <br><br>
                           <h2 class="titulo-compartilhe font-normal"><?php echo $this->_tpl_vars['arrayIdioma']['MN_NOT_LEIA_TBM']; ?>
:</h2>
                           <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['dadosVejaTambem']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                              <div class="col-xs-12 col-sm-6 col-md-6 pd-none">
                                 <div class="bloco-noticia-destaque">
                                    <p class="link-desc-noticias font-normal"><a class="txt-desc-noticias font-normal" href="palestra.php?id=<?php echo $this->_tpl_vars['dadosVejaTambem'][$this->_sections['i']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['dadosVejaTambem'][$this->_sections['i']['index']]['titulo']; ?>
</a></p>
                                    <!-- <p class="txt-noticias-info font-normal pd-none"><?php echo $this->_tpl_vars['dadosVejaTambem'][0]['dataMes'][2]; ?>
 <?php echo $this->_tpl_vars['dadosVejaTambem'][0]['Mes']; ?>
 <?php echo $this->_tpl_vars['dadosVejaTambem'][0]['dataMes'][0]; ?>
</p> -->
                                 </div>
                              </div>
                           <?php endfor; endif; ?>
                        </div>
                     <?php endif; ?>
                  </div>
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