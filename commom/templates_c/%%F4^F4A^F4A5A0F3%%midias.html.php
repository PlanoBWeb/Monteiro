<?php /* Smarty version 2.6.12, created on 2015-11-13 11:05:25
         compiled from midias.html */ ?>
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
               <br><br>
               <p class="txt-desc-noticias font-normal"><?php echo $this->_tpl_vars['arrayIdioma']['MN_TXT_EMBREVE']; ?>
</p>
            <!--    <div class="col-xs-12 col-sm-8 col-md-8 pd-none encapsula-noticias">
                  
                     <div class="col-xs-12 col-sm-12 col-md-12 pd-none conteudo-interna-not">
                        <a href="midia.php"><img class="img-noticias" src="img/noticias/noticia1.jpg" title="Noticia" alt="Noticia"></a>
                        <h2 class="titulo-noticias font-normal"><a href="midia.php">Câmara aprova regras para convênios entre órgãos públicos e ONGs</a></h2>
                        <p class="txt-noticias-info font-normal">Por:  Lorem Ipsum   •  em: Direito Público  •   26 Fev. 2015</p>
                        <img class="pull-left" src="img/icon-foto.png" alt="icone foto" title="icone foto">
                        <p class="txt-icon-midia font-bold">Galeria de fotos</p>
                     </div>
             
                     <div class="col-xs-12 col-sm-12 col-md-12 pd-none conteudo-interna-not">
                        <a href="midia.php"><img class="img-noticias" src="img/noticias/noticia1.jpg" title="Noticia" alt="Noticia"></a>
                        <h2 class="titulo-noticias font-normal"><a href="midia.php">Câmara aprova regras para convênios entre órgãos públicos e ONGs</a></h2>
                        <p class="txt-noticias-info font-normal">Por:  Lorem Ipsum   •  em: Direito Público  •   26 Fev. 2015</p>
                        <img class="pull-left" src="img/icon-video.png" alt="icone video" title="icone video">
                        <p class="txt-icon-midia font-bold">Video</p>
                     </div>
      
                  
                  <div class="bloco-paginacao">
                     <a href="?p=#" class="seta-esquerda fl-left seta-default">&lt;&lt;</a>
                     <a href="?p=#" class="seta-esquerda fl-left seta-default">&lt;</a>
                     <p class="link-paginacao">1 de 3</p>
                     <a href="?p=#" class="seta-direita fl-left seta-default">&gt;</a>
                     <a href="?p=#" class="seta-direita fl-left seta-default">&gt;&gt;</a>
                  </div>
               </div> -->

               <?php echo '<?php'; ?>
 //include 'inc/menu-lateral-blog.php'; <?php echo '?>'; ?>

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