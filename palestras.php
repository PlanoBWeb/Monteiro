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
         <!-- BreadCrumb -->
         <div class="row bloco-breadcrumb">
            <div class="tamanho-max pd-left-5">
               <ol class="breadcrumb">
                  <li><a href="index.php">Home</a></li>
                  <li>Palestras</li>
               </ol>
            </div>
         </div>
         <!-- BreadCrumb -->

         <!-- Conteudo -->
         <section class="conteudo-interna">
            <div class="row tamanho-max bloco-conteudo bloco-conteudo-noticias">
               <div class="col-xs-12 col-sm-8 col-md-8 pd-none encapsula-noticias">
                  <?php for ($i=0; $i < 6; $i++) { ?>
                     <div class="col-xs-12 col-sm-12 col-md-12 pd-none conteudo-interna-publicacao">
                        <h2 class="titulo-publicacoes font-bold"><a href="informativa.php">Palestra nº<?php echo $i; ?></a></h2>
                        <a class="txt-desc-publicacao font-normal" href="informativo.php">Tse reforma decisão do tribunal regional eleitoral paulista que tinha considerado irregular a “caravana horizonte paulista” do candidato Alexandre Padilha - PT.</a>
                        <p class="txt-noticias-info font-normal">Por:  Lorem Ipsum   •  em: Direito Público  •   26 Fev. 2015</p>
                     </div>
                  <?php } ?>
                  
                  <div class="bloco-paginacao">
                     <a href="?p=#" class="seta-esquerda fl-left seta-default">&lt;&lt;</a>
                     <a href="?p=#" class="seta-esquerda fl-left seta-default">&lt;</a>
                     <p class="link-paginacao">1 de 3</p>
                     <a href="?p=#" class="seta-direita fl-left seta-default">&gt;</a>
                     <a href="?p=#" class="seta-direita fl-left seta-default">&gt;&gt;</a>
                  </div>
               </div>

               <?php include 'inc/menu-lateral-blog.php'; ?>
            </div>
         </section>
         <!-- Conteudo -->
         <?php include 'inc/footer.php'; ?>
      </div>
  </body>
</html>