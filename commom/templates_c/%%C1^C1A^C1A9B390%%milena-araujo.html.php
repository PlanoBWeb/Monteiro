<?php /* Smarty version 2.6.12, created on 2016-04-28 10:27:08
         compiled from milena-araujo.html */ ?>
<!DOCTYPE html>
<html lang="pt">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="robots" content="index, follow">
      <meta name="description" content="Advogados com experiência no mercado e especialista nos diversos ramos do Direito." />
      <title><?php echo $this->_tpl_vars['titulo']; ?>
 – Advogada Milena Araujo</title>
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
         <!-- Banner -->
         <article class="banner">
            <img class="banner-interna" src="commom/img/banner-profissionais.jpg" alt="profissionais" title="profissionais">
         </article>
         <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../inc/breadcrumb.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
         <!-- Banner -->

         <!-- Conteudo -->
         <section class="conteudo-interna">
            <div class="row tamanho-max bloco-conteudo">
               <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../inc/menu-lateral-profissionais.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
               <div class="col-xs-12 col-sm-9 col-md-9 pd-none bloco-conteudo-interna">
                  <!-- <div class="col-xs-12 col-sm-3 col-md-3 pd-none">
                     <img class="img-profissional" src="img/marcos-gaban.jpg" alt="Marcos Antonio Gaban Monteiro" title="Marcos Antonio Gaban Monteiro">
                  </div> -->
                  <div class="col-xs-12 col-sm-12 col-md-12 pd-none bloco-profissional">
                     <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../inc/menu-profissionais-mobile.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                     <h1 class="titulo-pag font-normal"><?php echo $this->_tpl_vars['arrayIdioma']['MN_MILENA']; ?>
</h1>
                     <br><br>                  
                     <p class="txt-interna font-normal"><?php echo $this->_tpl_vars['arrayIdioma']['MN_TXT_MILENA']; ?>
</p>
                     <div class="col-xs-12 col-sm-12 col-md-12 pd-none email-profissional">
                        <img src="commom/img/icon-msg-v.png" alt="icone mensagem" title="icone mensagem">
                        <a href="mailto:milena@gabanmonteiroadv.com.br">milena@gabanmonteiroadv.com.br</a>
                     </div>
                  </div>
               </div>
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