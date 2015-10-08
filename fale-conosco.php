<!DOCTYPE html>
<html lang="pt">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="robots" content="index, follow">
      <meta name="description" content="" />
      <title>Monteiro</title>
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="css/estilo.css">
      <link href="img/icon-tab.png" rel="icon">
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
         <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
         <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
      <script src="js/funcoes.js"></script>
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
            
            if(!email(d.email,'')) return false;

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
   </head>
   <body>
      <div class="container-fluid no-padding">
         <?php include 'inc/header.php'; ?>
         <!-- Banner -->
         <article class="banner">
            <img class="banner-interna" src="img/banner-escritorio.jpg" alt="escritório" title="escritório">
         </article>
         <div class="row bloco-breadcrumb">
            <div class="tamanho-max pd-left-5">
               <ol class="breadcrumb">
                  <li><a href="index.php">Home</a></li>
                  <li><a href="escritorio.php">Escritório</a></li>
                  <li>Fale Conosco</li>
               </ol>
            </div>
         </div>
         <!-- Banner -->

         <!-- Conteudo -->
         <section class="conteudo-interna">
            <div class="row tamanho-max bloco-conteudo">
               <?php include 'inc/menu-lateral-sobre.php'; ?>
               <div class="col-xs-12 col-sm-8 col-md-8 pd-none bloco-conteudo-interna">
                  <h1 class="titulo-pag font-normal">Fale Conosco</h1>
                  <br><br>
                  <p class="txt-interna font-normal">
                     A MARCOS MONTEIRO SOCIEDADE DE ADVOGADOS abre este espaço para que possa enviar suas dúvidas aos nossos profissionais. Preencha seus dados e a mensagem e retornaremos o mais breve possível.
                  </p>
                  <br>
                  <br>
                  <form class="form-horizontal" action="" method="post" name="contato">
                     <div class="form-group">
                        <label for="Nome" class="col-sm-2 control-label font-normal">*NOME:</label>
                        <div class="col-sm-10">
                           <input type="text" name="nome" class="form-control" id="Nome">
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="email" class="col-sm-2 control-label font-normal">*E-MAIL:</label>
                        <div class="col-sm-10">
                           <input type="email" name="email" class="form-control" id="email">
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="empresa" class="col-sm-2 control-label font-normal">*EMPRESA:</label>
                        <div class="col-sm-10">
                           <input type="text" name="empresa" class="form-control" id="empresa">
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="tel" class="col-sm-2 control-label font-normal">*TELEFONE:</label>
                        <div class="col-sm-10">
                           <input type="number" name="tel" class="form-control" id="tel">
                        </div>
                     </div>

                     <div class="form-group">
                        <label for="msg" class="col-sm-2 control-label font-normal">*MENSAGEM:</label>
                        <div class="col-sm-10">
                           <textarea class="form-control" name="msg" id="msg" rows="3"></textarea>
                        </div>
                     </div>

                     <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                           <button type="submit" class="btn btn-default font-bold" onclick="return enviardados();">Enviar</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </section>
         <!-- Conteudo -->
         <?php include 'inc/footer.php'; ?>
      </div>
  </body>
</html>