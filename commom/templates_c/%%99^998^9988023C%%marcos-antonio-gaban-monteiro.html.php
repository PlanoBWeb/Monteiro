<?php /* Smarty version 2.6.12, created on 2015-11-18 13:04:30
         compiled from marcos-antonio-gaban-monteiro.html */ ?>
<!DOCTYPE html>
<html lang="pt">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="robots" content="index, follow">
      <meta name="description" content="Advogados com experiência no mercado e especialista nos diversos ramos do Direito." />
      <title>Marcos Monteiro – Advogado Marcos Antonio Gaban Monteiro</title>
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
                  <div class="col-xs-12 col-sm-12 col-md-12 pd-none bloco-profissional">
                     <form>
                        <select class="select-internas visible-xs-block" id="formRedirect">
                           <option value="Selecione um profissional">Selecione um profissional</option>
                           <option value="marcos-antonio-gaban-monteiro.php">Marcos Antonio Gaban Monteiro</option>
                           <option value="alvaro-merlos-akinaga-cordeiro.php">Álvaro Merlos Akinaga Cordeiro</option>
                           <option value="juliana-gaban-monteiro-multini.php">Juliana Gaban Monteiro Multini</option>
                           <option value="angelica-rebequi-da-motta-santos.php">Angélica Rebequi da Motta Santos</option>
                           <option value="krikor-palma-artissian.php">Krikor Palma Artissian</option>
                           <option value="roberta-moraes-dias-benatti.php">Roberta Moraes Dias Benatti</option>
                           <option value="gabriel-vieira-almeida-machado.php">Gabriel Vieira Almeida Machado</option>
                           <option value="guillermo-santana-andrade-glassman.php">Guillermo Santana Andrade Glassman</option>
                        </select>
                     </form>
                     <h1 class="titulo-pag font-normal"><?php echo $this->_tpl_vars['arrayIdioma']['MN_PROF_MARCOS']; ?>
</h1>
                     <br><br>                  
                     <p class="txt-interna font-normal"><?php echo $this->_tpl_vars['arrayIdioma']['MN_TXT_MARCOS']; ?>
</p>
                     <div class="col-xs-12 col-sm-12 col-md-12 pd-none email-profissional">
                        <img src="commom/img/icon-msg-v.png" alt="icone mensagem" title="icone mensagem">
                        <a href="mailto:marcos@mmonteiroadv.com.br">marcos@mmonteiroadv.com.br</a>
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