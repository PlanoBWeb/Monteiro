<?php /* Smarty version 2.6.12, created on 2015-11-12 17:46:27
         compiled from noticias.html */ ?>
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
                     <a href=""><img class="img-noticias" src="commom/img/noticias/noticia1.jpg" title="Noticia" alt="Noticia"></a>
                     <h2 class="titulo-noticias font-normal"><a href="noticia.php">Câmara aprova regras para convênios entre órgãos públicos e ONGs</a></h2>
                     <p class="txt-noticias-info font-normal"><?php echo $this->_tpl_vars['arrayIdioma']['MN_NOT_POR']; ?>
:  Lorem Ipsum   •  <?php echo $this->_tpl_vars['arrayIdioma']['MN_NOT_EM']; ?>
: Direito Público  •   26 Fev. 2015</p>
                     <a class="txt-desc-noticias font-normal" href="">O Plenário da Câmara dos Deputados aprovou nesta terça-feira (24) o Projeto de Lei Complementar 177/12...</a>
                  </div>

                  
                  <div class="bloco-paginacao">
                     <a href="?p=#" class="seta-esquerda fl-left seta-default">&lt;&lt;</a>
                     <a href="?p=#" class="seta-esquerda fl-left seta-default">&lt;</a>
                     <p class="link-paginacao">1 de 3</p>
                     <a href="?p=#" class="seta-direita fl-left seta-default">&gt;</a>
                     <a href="?p=#" class="seta-direita fl-left seta-default">&gt;&gt;</a>
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