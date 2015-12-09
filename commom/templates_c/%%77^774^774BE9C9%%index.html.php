<?php /* Smarty version 2.6.12, created on 2015-11-23 13:16:12
         compiled from index.html */ ?>
<!DOCTYPE html>
<html lang="pt">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="robots" content="index, follow">
      <meta name="description" content="Escritório de Advocacia focado em direito Público, Eleitoral e Empresarial." />
      <title>Marcos Monteiro – Sociedade de Advogados</title>
      <link href="commom/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="commom/css/estilo.css">
      <link href="commom/img/icon-tab.png" rel="icon">
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
         <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
         <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
      <!-- vitrine -->
      <link rel="stylesheet" type="text/css" href="commom/css/vitrine/owl.carousel.css">
      <link rel="stylesheet" type="text/css" href="commom/css/vitrine/owl.theme.css">
      <link rel="stylesheet" type="text/css" href="commom/css/vitrine/owl.transitions.css">
      <!-- vitrine -->
   </head>
   <body>
      <div class="container-fluid no-padding">
         <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../inc/header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
         <!-- Banner -->
         <article class="banner">
            <div id="demo">
              <div class="container">
                  <div class="row">
                     <div class="span12">
                        <div id="owl-demo" class="owl-carousel">
                           <div class="item">
                              <div class="bloco-desc-banner">
                                 <h2 class="font-bold"><?php echo $this->_tpl_vars['arrayIdioma']['MN_TIT_BANNER']; ?>
</h2>
                                 <div class="linha-desc-banner"></div>
                                 <p class="font-normal"><?php echo $this->_tpl_vars['arrayIdioma']['MN_TXT_BANNER']; ?>
 </p>
                              </div>
                              <img src="commom/img/banner.jpg" alt="banner" title="banner">
                           </div>
                           <!-- <div class="item"><img src="commom/img/banner.jpg" alt="banner" title="banner"></div> -->
                        </div>
                     </div>
                  </div>
              </div>
          </div>            
         </article>
         <div class="baixo-banner">
            <div class="tamanho-max">
               <img class="aspas-left" src="commom/img/aspas-left.png" alt="aspas" title="aspas">
               <h1 class="titulo-home font-normal"><?php echo $this->_tpl_vars['arrayIdioma']['MN_TXT_DES_HOME']; ?>
</h1>
               <img class="aspas-right" src="commom/img/aspas-right.png" alt="aspas" title="aspas">
            </div>
         </div>
         <!-- Banner -->

         <!-- Conteudo -->
         <section class="conteudo">
            <div class="row tamanho-max bloco-conteudo">
               <div class="col-xs-12 col-sm-8 col-md-8 pd-left-none">
                  <div class="row">
                     <div class="col-xs-12 col-sm-12 col-md-12 pd-left-none">
                        <h2 class="titulo-default font-normal pd-left-none fl-left"><?php echo $this->_tpl_vars['arrayIdioma']['MN_ULTIMAS_NOT']; ?>
</h2>
                        <?php if ($this->_tpl_vars['totalNotDestaque'] > 6): ?>
                           <div class="bloco-setas fl-right hidden-xs">
                              <div id="next" class="seta-esquerda fl-left seta-default">&lt;</div>
                              <div id="prev" class="seta-direita fl-right seta-default">&gt;</div>
                           </div>
                        <?php endif; ?>
                     </div>
                  </div>
                  <div class="borda-titulo"></div>
                  <!-- Noticias -->
                  <div class="row bloco-ultimas-noticias" <?php if ($this->_tpl_vars['totalNotDestaque'] < 6): ?> style="min-height: 350px;" <?php endif; ?>>
                     <div class="bloco-roda-vitrine">
                        <div class="encapsula-produto-vitrine">
                           <!-- Noticia Individual -->
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
                              <div class="col-xs-12 col-sm-5 col-md-4 pd-none ultimas-noticias-ind">
                                 <img src="<?php echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['caminhoImagemThumb']; ?>
" alt="<?php echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['tituloAbrev']; ?>
" title="<?php echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['tituloAbrev']; ?>
">
                                 <a href="noticia.php?id=<?php echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['id']; ?>
" class="txt-noticia-destaque font-normal"><p><?php echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['tituloAbrev']; ?>
</p></a>
                                 <p class="data-noticia font-normal"><?php echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['dataMes'][2]; ?>
 <?php echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['Mes']; ?>
 <?php echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['dataMes'][0]; ?>
</p>
                              </div>
                           <?php endfor; endif; ?>
                           <!-- Noticia Individual -->
                        </div>
                     </div>
                  </div>
                  <!-- Noticias -->
               </div>
               
               <!-- Publicações -->
               <div class="col-xs-12 col-sm-4 col-md-4">
                  <div class="row">
                     <div class="col-xs-12 col-sm-12 col-md-12 pd-left-none">
                        <h2 class="titulo-default font-normal pd-left-none fl-left"><?php echo $this->_tpl_vars['arrayIdioma']['MN_PUBLICACOES']; ?>
</h2>
                     </div>
                  </div>
                  <div class="borda-titulo"></div>
                  <!-- Publicações Individual -->
                  <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['dadosPub']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                     <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 pd-none bloco-ultimas-pub">
                           <a href="informativo.php?id=<?php echo $this->_tpl_vars['dadosPub'][$this->_sections['i']['index']]['id']; ?>
">
                              <p class="titulo-ultima-pub font-normal"><?php echo $this->_tpl_vars['dadosPub'][$this->_sections['i']['index']]['titulo']; ?>
</p>
                              <p class="txt-ultima-pub font-normal"><?php echo $this->_tpl_vars['dadosPub'][$this->_sections['i']['index']]['textoAbrev']; ?>
</p>
                           </a>
                        </div>      
                     </div>
                  <?php endfor; endif; ?>
                  <!-- Publicações Individual -->
                  <a href="informativos.php" class="mais-default">+</a>
               </div>
               <!-- Publicações -->

               <!-- Videos -->
               <div class="col-xs-12 col-sm-4 col-md-4">
                  <div class="row">
                     <div class="col-xs-12 col-sm-12 col-md-12 pd-left-none">
                        <h2 class="titulo-default font-normal pd-left-none fl-left"><?php echo $this->_tpl_vars['arrayIdioma']['MN_VIDEOS']; ?>
</h2>
                     </div>
                  </div>
                  <div class="borda-titulo"></div>
                  <!-- Videos Individual -->
                  <div class="row">
                     <div class="col-xs-12 col-sm-12 col-md-12 pd-none">
                        <iframe  src="https://www.youtube.com/embed/gV_17TRTEA0" frameborder="0" allowfullscreen></iframe>
                     </div>      
                  </div>
                  <!-- Videos Individual -->
                  <!-- <a href="" class="mais-default">+</a> -->
               </div>
               <!-- Publicações -->
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