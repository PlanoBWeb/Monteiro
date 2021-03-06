<?php /* Smarty version 2.6.12, created on 2016-04-28 10:26:27
         compiled from fale-conosco.html */ ?>
<!DOCTYPE html>
<html lang="pt">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="robots" content="index, follow">
      <meta name="description" content="Preencha seus dados e a mensagem e retornaremos o mais breve possível." />
      <title><?php echo $this->_tpl_vars['titulo']; ?>
 – Fale Conosco</title>
      <link href="commom/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="commom/css/estilo.css">
      <link href="commom/img/icon-tab.png" rel="icon">
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
         <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
         <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
      <?php echo '
         <script type="text/javascript">
            function enviardados()
            {
               d = document.contato;

               if(trim(d.nome.value)=="")
               {
                  alert("O campo NOME deve ser preenchido!");
                  d.nome.focus();
                  return false;
               }
               
               if(trim(d.email.value)=="")
               {
                  alert("O campo E-MAIL deve ser preenchido!");
                  d.email.focus();
                  return false;
               }
               
               if(!email(d.email,\'\')) return false;

               if(trim(d.empresa.value)=="")
               {
                  alert("O campo EMPRESA deve ser preenchido!");
                  d.empresa.focus();
                  return false;
               }

               if(trim(d.tel.value)=="")
               {
                  alert("O campo TELEFONE deve ser preenchido!");
                  d.tel.focus();
                  return false;
               }
               
               if(trim(d.msg.value)=="")
               {
                  alert("O campo MENSAGEM deve ser preenchido!");
                  d.msg.focus();
                  return false;
               }
               
               d.submit();
            }
         </script>
      '; ?>

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
            <img class="banner-interna" src="commom/img/banner-contato.jpg" alt="contato" title="contato">
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
$this->_smarty_include(array('smarty_include_tpl_file' => "../inc/menu-lateral-sobre.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
               <div class="col-xs-12 col-sm-8 col-md-8 pd-none bloco-conteudo-interna">
                  <h1 class="titulo-pag font-normal"><?php echo $this->_tpl_vars['arrayIdioma']['MN_TITULO_FALE']; ?>
</h1>
                  <br><br>
                  <p class="txt-interna font-normal">
                     <?php echo $this->_tpl_vars['arrayIdioma']['MN_TXT_FALE']; ?>

                  </p>
                  <br>
                  <br>
                  <form class="form-horizontal" action="" method="post" name="contato">
                     <input type="hidden" name="acao" value="enviaForm">
                     <div class="form-group">
                        <label for="Nome" class="col-sm-2 control-label font-normal">*<?php echo $this->_tpl_vars['arrayIdioma']['MN_FORM_NOME']; ?>
:</label>
                        <div class="col-sm-10">
                           <input type="text" name="nome" class="form-control" id="Nome">
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="email" class="col-sm-2 control-label font-normal">*<?php echo $this->_tpl_vars['arrayIdioma']['MN_FORM_EMAIL']; ?>
:</label>
                        <div class="col-sm-10">
                           <input type="email" name="email" class="form-control" id="email">
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="empresa" class="col-sm-2 control-label font-normal">*<?php echo $this->_tpl_vars['arrayIdioma']['MN_FORM_EMPRESA']; ?>
:</label>
                        <div class="col-sm-10">
                           <input type="text" name="empresa" class="form-control" id="empresa">
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="tel" class="col-sm-2 control-label font-normal">*<?php echo $this->_tpl_vars['arrayIdioma']['MN_FORM_TEL']; ?>
:</label>
                        <div class="col-sm-10">
                           <input type="number" name="tel" class="form-control" id="tel">
                        </div>
                     </div>

                     <div class="form-group">
                        <label for="msg" class="col-sm-2 control-label font-normal">*<?php echo $this->_tpl_vars['arrayIdioma']['MN_FORM_MSG']; ?>
:</label>
                        <div class="col-sm-10">
                           <textarea class="form-control" name="msg" id="msg" rows="3"></textarea>
                        </div>
                     </div>

                     <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                           <button type="submit" class="btn btn-default font-bold" onclick="return enviardados();"><?php echo $this->_tpl_vars['arrayIdioma']['MN_FORM_ENVIAR']; ?>
</button>
                        </div>
                     </div>
                  </form>
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