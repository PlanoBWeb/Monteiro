<?php /* Smarty version 2.6.12, created on 2015-11-16 18:03:28
         compiled from noticia.html */ ?>
<!DOCTYPE html>
<html lang="pt">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="robots" content="index, follow">
      <meta name="description" content="" />
      <title>Monteiro</title>
      <link href="commom/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="commom/css/estilo.css">
      <link href="commom/img/icon-tab.png" rel="icon">
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
         <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
         <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
      <link rel="canonical" href="http://mmonteiroadv.com.br/" />
    <script src="https://apis.google.com/js/platform.js" async defer></script>
   </head>
   <body>
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
                  <div class="col-xs-12 col-sm-12 col-md-12 pd-none conteudo-interna-not">
                     <div class="bloco-imprimi">
                        <img class="img-not-ind" src="<?php echo $this->_tpl_vars['dados'][0]['caminhoImagem']; ?>
" title="<?php echo $this->_tpl_vars['dados'][0]['titulo']; ?>
" alt="<?php echo $this->_tpl_vars['dados'][0]['titulo']; ?>
">
                        <h1 class="titulo-noticias font-normal"><?php echo $this->_tpl_vars['dados'][0]['titulo']; ?>
</h1>
                        <p class="txt-noticias-info font-normal"><?php echo $this->_tpl_vars['arrayIdioma']['MN_NOT_POR']; ?>
:  <?php echo $this->_tpl_vars['dados'][0]['por']; ?>
   •  <?php echo $this->_tpl_vars['arrayIdioma']['MN_NOT_EM']; ?>
: <?php echo $this->_tpl_vars['dados'][0]['nomeCategoria']; ?>
  •   <?php echo $this->_tpl_vars['dados'][0]['dataMes'][2]; ?>
 <?php echo $this->_tpl_vars['dados'][0]['Mes']; ?>
 <?php echo $this->_tpl_vars['dados'][0]['dataMes'][0]; ?>
</p>
                        <p class="txt-desc-noticias font-normal">
                           <?php echo $this->_tpl_vars['dados'][0]['texto']; ?>

                        </p>
                        <br>

                        <div class="row">
                           <img class="icone-tag-not" src="commom/img/icon-tags.png" alt="icone tag" title="icone tag">
                           <p class="txt-desc-noticias font-normal"><?php echo $this->_tpl_vars['dados'][0]['tag']; ?>
</p>                           
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
                           <div class="col-xs-12 col-sm-3 col-md-3">
                              <div class="fb-like"></div> 
                           </div>
                           <div class="col-xs-12 col-sm-3 col-md-3 pd-none">
                              <a href="http://twitter.com/share" class="twitter-share-button" data-url="<?php echo $this->_tpl_vars['urlCompleta']; ?>
"  data-count="horizontal" data-lang="pt">Tweetar</a> 
                           </div>
                           <div class="col-xs-12 col-sm-3 col-md-3 pd-none">
                              <g:plusone href="<?php echo $this->_tpl_vars['urlCompleta']; ?>
"></g:plusone>
                           </div>
                           <!-- <div class="col-xs-12 col-sm-3 col-md-3 pd-none"><p class="share-noticia font-normal"><img src="commom/img/mais-share.jpg" title="share" alt="share"> Share</p></div> -->
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 pd-none">
                           <h2 class="titulo-menu-lateral font-normal"><?php echo $this->_tpl_vars['arrayIdioma']['MN_NOT_IND_NOT']; ?>
</h2>
                           <form method="post" name="formIndiqueNot">
                              <input class="font-normal form-compartilhe" type="text" name="indiqueNot" placeholder="<?php echo $this->_tpl_vars['arrayIdioma']['MN_FORM_EMAIL']; ?>
...">
                              <input class="btn-ok cinza font-normal" type="submit" value="ok" onclick="return enviarindiqueNot();">
                           </form>
                        </div>
                     </div>  

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
                                 <a href=""><img src="<?php echo $this->_tpl_vars['dadosVejaTambem'][$this->_sections['i']['index']]['caminhoImagemThumb']; ?>
" alt="<?php echo $this->_tpl_vars['dadosVejaTambem'][$this->_sections['i']['index']]['tituloAbrev']; ?>
" title="<?php echo $this->_tpl_vars['dadosVejaTambem'][$this->_sections['i']['index']]['tituloAbrev']; ?>
"></a>
                                 <p class="link-desc-noticias font-normal"><a class="txt-desc-noticias font-normal" href="noticia.php?id=<?php echo $this->_tpl_vars['dadosVejaTambem'][$this->_sections['i']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['dadosVejaTambem'][$this->_sections['i']['index']]['tituloAbrev']; ?>
</a></p>
                                 <p class="txt-noticias-info font-normal pd-none"><?php echo $this->_tpl_vars['dadosVejaTambem'][$this->_sections['i']['index']]['dataMes'][2]; ?>
 <?php echo $this->_tpl_vars['dadosVejaTambem'][$this->_sections['i']['index']]['Mes']; ?>
 <?php echo $this->_tpl_vars['dadosVejaTambem'][$this->_sections['i']['index']]['dataMes'][0]; ?>
</p>
                              </div>
                           </div>
                        <?php endfor; endif; ?>
                     </div>
                     
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