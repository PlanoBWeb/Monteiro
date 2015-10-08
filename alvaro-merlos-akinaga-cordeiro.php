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
            <img class="banner-interna" src="img/banner-profissionais.jpg" alt="profissionais" title="profissionais">
         </article>
         <div class="row bloco-breadcrumb">
            <div class="tamanho-max pd-left-5">
               <ol class="breadcrumb">
                  <li><a href="index.php">Home</a></li>
                  <li><a href="marcos-antonio-gaban-monteiro.php">Profissionais</a></li>
                  <li>Álvaro Merlos Akinaga Cordeiro</li>
               </ol>
            </div>
         </div>
         <!-- Banner -->

         <!-- Conteudo -->
         <section class="conteudo-interna">
            <div class="row tamanho-max bloco-conteudo">
               <?php include 'inc/menu-lateral-profissionais.php'; ?>
               <div class="col-xs-12 col-sm-9 col-md-9 pd-none bloco-conteudo-interna">
                  <!-- <div class="col-xs-12 col-sm-3 col-md-3 pd-none">
                     <img class="img-profissional" src="img/marcos-gaban.jpg" alt="Marcos Antonio Gaban Monteiro" title="Marcos Antonio Gaban Monteiro">
                  </div> -->
                  <div class="col-xs-12 col-sm-12 col-md-12 pd-none bloco-profissional">
                     <h1 class="titulo-pag font-normal">Álvaro Merlos Akinaga Cordeiro</h1>
                     <br><br>                  
                     <p class="txt-interna font-normal">Advogado, pós-graduando em Direito Constitucional pela Escola Superior de Direito Constitucional – ESDC, formado na Universidade Presbiteriana Mackenzie. Estagiou no Ministério Público de São Paulo e foi Conciliador no Juizado Especial Cível - Mackenzie.</p>
                     <div class="col-xs-12 col-sm-12 col-md-12 pd-none email-profissional">
                        <img src="img/icon-msg-v.png" alt="icone mensagem" title="icone mensagem">
                        <a href="mailto:alvaro@mmonteiroadv.com.br">alvaro@mmonteiroadv.com.br</a>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- Conteudo -->
         <?php include 'inc/footer.php'; ?>
      </div>
  </body>
</html>