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
                  <li>Responsabilidade Social</li>
               </ol>
            </div>
         </div>
         <!-- Banner -->

         <!-- Conteudo -->
         <section class="conteudo-interna">
            <div class="row tamanho-max bloco-conteudo">
               <?php include 'inc/menu-lateral-sobre.php'; ?>
               <div class="col-xs-12 col-sm-8 col-md-8 pd-none bloco-conteudo-interna">
                  <h1 class="titulo-pag font-normal">Responsabilidade Social</h1>
                  <br><br>
                  <p class="txt-interna font-normal">
                     MARCOS MONTEIRO SOCIEDADE DE ADVOGADOS reconhece o seu papel na sociedade e se mostra comprometida com o desenvolvimento social e com a luta por uma sociedade mais justa, seja contribuindo através da elaboração de um trabalho ético, transparente, dedicado e solidário.
                  </p>
               </div>
            </div>
         </section>
         <!-- Conteudo -->
         <?php include 'inc/footer.php'; ?>
      </div>
  </body>
</html>