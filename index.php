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
      <!-- vitrine -->
      <link rel="stylesheet" type="text/css" href="css/vitrine/owl.carousel.css">
      <link rel="stylesheet" type="text/css" href="css/vitrine/owl.theme.css">
      <link rel="stylesheet" type="text/css" href="css/vitrine/owl.transitions.css">
      <!-- vitrine -->
   </head>
   <body>
      <div class="container-fluid no-padding">
         <?php include 'inc/header.php'; ?>
         <!-- Banner -->
         <article class="banner">
            <div id="demo">
              <div class="container">
                  <div class="row">
                     <div class="span12">
                        <div id="owl-demo" class="owl-carousel">
                           <div class="item">
                              <div class="bloco-desc-banner">
                                 <h2 class="font-bold">Tribunal de Contas Controle de Contas Públicas</h2>
                                 <div class="linha-desc-banner"></div>
                                 <p class="font-normal">Assessoria prévia à prestação de contas, orientações e acompanhamentos sobre aplicação e destinação de recursos públicos diante dos atuais posicionamentos dos Tribunais de </p>
                              </div>
                              <img src="img/banner.jpg" alt="banner" title="banner">
                           </div>
                           <div class="item"><img src="img/banner.jpg" alt="banner" title="banner"></div>
                        </div>
                     </div>
                  </div>
              </div>
          </div>            
         </article>
         <div class="baixo-banner">
            <div class="tamanho-max">
               <img class="aspas-left" src="img/aspas-left.png" alt="aspas" title="aspas">
               <h1 class="titulo-home font-normal">Defesas sólidas, criativas e atentas aos atuais entendimentos dos tribunais superiores do país.</h1>
               <img class="aspas-right" src="img/aspas-right.png" alt="aspas" title="aspas">
            </div>
         </div>
         <!-- Banner -->

         <!-- Conteudo -->
         <section class="conteudo">
            <div class="row tamanho-max bloco-conteudo">
               <div class="col-xs-12 col-sm-8 col-md-8 pd-left-none">
                  <div class="row">
                     <div class="col-xs-12 col-sm-12 col-md-12 pd-left-none">
                        <h2 class="titulo-default font-normal pd-left-none fl-left">Últimas Notícias</h2>
                        <div class="bloco-setas fl-right hidden-xs">
                           <div class="seta-esquerda fl-left seta-default">&lt;</div>
                           <div class="seta-direita fl-right seta-default">&gt;</div>
                        </div>
                     </div>
                  </div>
                  <div class="borda-titulo"></div>
                  <!-- Noticias -->
                  <div class="row bloco-ultimas-noticias">
                     <!-- Noticia Individual -->
                     <?php for ($i=0; $i < 6; $i++) { 
                        echo '
                           <div class="col-xs-12 col-sm-5 col-md-4 pd-none ultimas-noticias-ind">
                              <img src="img/noticias/noticia.jpg" alt="noticia" title="noticia">
                              <a href="" class="txt-noticia-destaque font-normal"><p>Câmara aprova regras para convênios entre órgãos públicos e ONGs</p></a>
                              <p class="data-noticia font-normal">26 Fev. 2015</p>
                           </div>
                        ';
                     } ?>
                     <!-- Noticia Individual -->
                  </div>
                  <!-- Noticias -->
               </div>
               
               <!-- Publicações -->
               <div class="col-xs-12 col-sm-4 col-md-4">
                  <div class="row">
                     <div class="col-xs-12 col-sm-12 col-md-12 pd-left-none">
                        <h2 class="titulo-default font-normal pd-left-none fl-left">Publicações</h2>
                     </div>
                  </div>
                  <div class="borda-titulo"></div>
                  <!-- Publicações Individual -->
                  <div class="row">
                     <div class="col-xs-12 col-sm-12 col-md-12 pd-none bloco-ultimas-pub">
                        <a href="">
                           <p class="titulo-ultima-pub font-normal">Informativo nº 34</p>
                           <p class="txt-ultima-pub font-normal">TSE reforma decisão do tribunal regional eleitoral paulista que tinha considerado irregular a “caravana horizonte paulista” do candidato Alexandre Padilha - PT</p>
                        </a>
                     </div>      
                  </div>
                  <div class="row">
                     <div class="col-xs-12 col-sm-12 col-md-12 pd-none bloco-ultimas-pub">
                        <a href="">
                           <p class="titulo-ultima-pub font-normal">Informativo nº 33</p>
                           <p class="txt-ultima-pub font-normal">TSE reforma decisão do tribunal regional eleitoral paulista que tinha considerado irregular a “caravana horizonte paulista” do candidato Alexandre Padilha - PT</p>
                        </a>
                     </div>      
                  </div>
                  <!-- Publicações Individual -->
                  <a href="" class="mais-default">+</a>
               </div>
               <!-- Publicações -->

               <!-- Videos -->
               <div class="col-xs-12 col-sm-4 col-md-4">
                  <div class="row">
                     <div class="col-xs-12 col-sm-12 col-md-12 pd-left-none">
                        <h2 class="titulo-default font-normal pd-left-none fl-left">Videos</h2>
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
                  <a href="" class="mais-default">+</a>
               </div>
               <!-- Publicações -->
            </div>
         </section>
         <!-- Conteudo -->

         <?php include 'inc/footer.php'; ?>
      </div>
  </body>
</html>