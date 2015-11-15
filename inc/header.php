<div id="fb-root"></div>
<script>
   (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.4&appId=1455524614773861";
      fjs.parentNode.insertBefore(js, fjs);
   }(document, 
      'script', 'facebook-jssdk')
   );
</script>

<?php include 'url.php'; ?>
<header class="header">
   <section class="encapsula-topo">
      <article class="topo">
         <div class="col-xs-12 col-sm-4 col-md-5 logo">
            <a href="index.php" class="img-logo">
               <img src="img/logo.png" alt="Logo Monteiro" title="Logo Monteiro">
            </a>
         </div>

         <div class="col-xs-12 col-sm-4 col-md-3 topo-contato-mobile">
            <p class="txt-atend font-bold">Atendimento:</p>
            <div class="contato-topo">
               <img src="img/icon-tel.png" alt="icone telefone" title="icone telefone">
               <a class="link-topo" href="tel:01139298934">11 3929-8934</a>
            </div>
            <div class="contato-topo">
               <img src="img/icon-email.png" alt="icone e-mail" title="icone e-mail">
               <a class="link-topo" href="mailto:contato@mmonteiroadv.com.br">contato@mmonteiroadv.com.br</a>
            </div>
         </div>

         <div class="col-xs-12 col-sm-4 col-md-4 hidden-xs">
            <div class="bloco-linguas">
               <a href="?l=i">
                  <img src="img/icon-en.png" alt="icone inglês" title="icone inglês">
               </a>
               <a href="?l=p">
                  <img src="img/icon-pt.png" alt="icone português" title="icone português">
               </a>
            </div>
            <form class="form-search" method="post" name="form_search">
               <input class="btn-ok cinza font-normal fl-right" type="submit" value="ok">
               <input class="font-normal fl-right" type="search" name="search" placeholder="busca...">
            </form>
         </div>
      </article>
   </section>
   <nav class="navbar navbar-default bg-cor-default">
      <div class="container-fluid">
         <div class="navbar-header">
            <div class="encapsula-menu-idioma">
               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
               </button>
               <a class="navbar-brand img-logo" href="index.php"><img src="img/logo.png" alt="Logo Monteiro" title="Logo Monteiro"></a>   
               <div class="bloco-linguas-mobile visible-xs-block">
                  <a class="open-search-mobile" href="#"><img src="img/lupa.png" alt="icone lupa" title="icone lupa"></a>
                  <a href="?l=i">
                     <img src="img/icon-en.png" alt="icone inglês" title="icone inglês">
                  </a>
                  <a href="?l=p">
                     <img src="img/icon-pt.png" alt="icone português" title="icone português"> 
                  </a>
               </div>
            </div>
            <form class="form-search search-mobile" method="post" name="form_search">
               <a class="close-search-mobile" href="#"><img src="img/lupa.png" alt="icone lupa" title="icone lupa"></a>
               <input class="font-normal input-search-mobile" type="search" name="search" placeholder="busca...">
               <input class="btn-ok cinza font-normal" type="submit" value="ok">
            </form>
         </div>
         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
               <li class="linha-topo"><a class="link-linha-topo font-normal" href="index.php">Home</a></li>
               <!-- <li class="linha-topo"><a class="link-linha-topo font-normal" href="escritorio.php">Escritório</a></li> -->
               <li class="dropdown linha-topo">
                  <a href="#" class="dropdown-toggle link-linha-topo font-normal" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Escritório<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                     <li><a class="link-linha-topo font-normal" href="escritorio.php">APRESENTAÇÃO</a></li>
                     <li><a class="link-linha-topo font-normal" href="missao-valores-objetivo.php">MISSÃO, VALORES E OBJETIVO</a></li>
                     <li><a class="link-linha-topo font-normal" href="responsabilidade-social.php">RESPONSAILIDADE SOCIAL</a></li>
                  </ul>
               </li>


               <li class="dropdown linha-topo">
                  <a href="#" class="dropdown-toggle link-linha-topo font-normal" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profissionais<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                     <li><a class="link-linha-topo font-normal" href="marcos-antonio-gaban-monteiro.php">Marcos</a></li>
                     <li><a class="link-linha-topo font-normal" href="#">Another action</a></li>
                     <li><a class="link-linha-topo font-normal" href="#">Another action</a></li>
                     <li><a class="link-linha-topo font-normal" href="#">Another action</a></li>
                     <li><a class="link-linha-topo font-normal" href="#">Another action</a></li>
                     <li><a class="link-linha-topo font-normal" href="#">Another action</a></li>
                     <li><a class="link-linha-topo font-normal" href="#">Another action</a></li>
                     <li><a class="link-linha-topo font-normal" href="#">Another action</a></li>
                     <li><a class="link-linha-topo font-normal" href="#">Another action</a></li>
                     <li><a class="link-linha-topo font-normal" href="#">Another action</a></li>
                  </ul>
               </li>


               <li class="dropdown linha-topo">
                  <a href="#" class="dropdown-toggle link-linha-topo font-normal" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Atuação<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                     <li><a class="link-linha-topo font-normal" href="direito-publico.php">DIREITO PÚBLICO</a></li>
                     <li><a class="link-linha-topo font-normal" href="direito-eleitoral.php">DIREITO ELEITORAL</a></li>
                     <li><a class="link-linha-topo font-normal" href="direito-empresarial.php">DIREITO EMPRESARIAL</a></li>
                     <li><a class="link-linha-topo font-normal" href="direito-imobiliario.php">DIREITO IMOBILIÁRIO</a></li>                     
                  </ul>
               </li>
               <li class="linha-topo"><a class="link-linha-topo font-normal" href="noticias.php">Notícias</a></li>
               <li class="dropdown linha-topo">
                  <a href="#" class="dropdown-toggle link-linha-topo font-normal" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Publicações<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                     <li><a class="link-linha-topo font-normal" href="informativos.php">INFORMATIVOS</a></li>
                     <li><a class="link-linha-topo font-normal" href="artigos.php">ARTIGOS</a></li>
                     <li><a class="link-linha-topo font-normal" href="instrucoes.php">INSTRUÇÕES</a></li>
                     <li><a class="link-linha-topo font-normal" href="palestras.php">PALESTRAS</a></li>
                  </ul>
               </li>
               <li class="linha-topo"><a class="link-linha-topo font-normal" href="midias.php">Mídia</a></li>
               <li class="linha-topo"><a class="link-linha-topo font-normal" href="fale-conosco.php">Fale Conosco</a></li>
               <li class="linha-topo"><a class="link-linha-topo font-normal" href="localizacao.php">Localização</a></li>
               <li class="linha-topo"><a class="link-linha-topo font-normal pd-right-none icon-redes" href="https://www.facebook.com/Marcos-Monteiro-Sociedade-de-Advogados-798300076864104/timeline/" target="_blank"><img src="img/icon-face.png" alt="Facebook" title="Facebook"></a></li>
               <li class="linha-topo"><a class="link-linha-topo font-normal pd-left-none icon-redes" href="#"><img src="img/icon-in.png" alt="Likedin" title="Likedin" target="_blank"></a></li>
            </ul>
         </div>
      </div>
   </nav>
</header>