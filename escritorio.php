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
                  <li>Apresentação</li>
               </ol>
            </div>
         </div>
         <!-- Banner -->

         <!-- Conteudo -->
         <section class="conteudo-interna">
            <div class="row tamanho-max bloco-conteudo">
               <?php include 'inc/menu-lateral-sobre.php'; ?>
               <div class="col-xs-12 col-sm-8 col-md-8 pd-none bloco-conteudo-interna">
                  <h1 class="titulo-pag font-normal">Apresentação</h1>
                  <br><br>
                  <p class="txt-interna font-normal">
                     MARCOS MONTEIRO SOCIEDADE DE ADVOGADOS é uma sociedade de profissionais altamente qualificados, aptos a prestar assessoria, consultoria e direção jurídica de modo diferenciado, padronizado ou personalizado, de acordo com as exigências e o dinamismo do mercado. <br><br>
                     Através de uma atuação preventiva, evitando ou mesmo reduzindo riscos, assim como contenciosa, por meio de defesas sólidas, criativas e atentas aos atuais entendimentos dos tribunais superiores do país, nossos profissionais permitem ao cliente agir com segurança, consciência e confiança na administração de seus interesses e testemunhar à melhor proteção e garantia aos seus direitos e liberdades. 
                  </p>
               </div>
            </div>
         </section>
         <!-- Conteudo -->
         <?php include 'inc/footer.php'; ?>
      </div>
  </body>
</html>