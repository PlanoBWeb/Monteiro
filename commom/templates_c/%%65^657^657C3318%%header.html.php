<?php /* Smarty version 2.6.12, created on 2016-04-15 14:09:47
         compiled from ../inc/header.html */ ?>
<div id="fb-root"></div>
<?php echo '
<script>//(function(d, s, id) {
//   var js, fjs = d.getElementsByTagName(s)[0];
//   if (d.getElementById(id)) return;
//   js = d.createElement(s); js.id = id;
//   js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.5&appId=1455524614773861";
//   fjs.parentNode.insertBefore(js, fjs);
// }(document, \'script\', \'facebook-jssdk\'));
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, \'script\', \'facebook-jssdk\'));
</script>
'; ?>

<header class="header">
   <section class="encapsula-topo">
      <article class="topo">
         <div class="col-xs-12 col-sm-4 col-md-5 logo">
            <a href="index.php" class="img-logo">
               <img src="commom/img/logo.png" alt="Logo Monteiro" title="Logo Monteiro">
            </a>
         </div>

         <div class="col-xs-12 col-sm-4 col-md-3 topo-contato-mobile">
            <p class="txt-atend font-bold"><?php echo $this->_tpl_vars['arrayIdioma']['MN_ATEND']; ?>
</p>
            <div class="contato-topo">
               <img src="commom/img/icon-tel.png" alt="icone telefone" title="icone telefone">
               <a class="link-topo" href="tel:01139298934">11 3929-8934</a>
            </div>
            <div class="contato-topo">
               <img src="commom/img/icon-email.png" alt="icone e-mail" title="icone e-mail">
               <a class="link-topo" href="mailto:contato@gabanmonteiroadv.com.br">contato@gabanmonteiroadv.com.br</a>
            </div>
         </div>

         <div class="col-xs-12 col-sm-4 col-md-4 hidden-xs">
        <!--     <div class="bloco-linguas">
               <a href="?l=I">
                  <img src="commom/img/icon-en.png" alt="icone inglês" title="icone inglês">
               </a>
               <a href="?l=P">
                  <img src="commom/img/icon-pt.png" alt="icone português" title="icone português">
               </a>
            </div> -->
            <form action="noticias.php" class="form-search form-busca-desk" method="post" name="form_search">
               <input type="hidden" name="acao" value="busca">
               <input class="font-normal fl-left" id="buscaValor" autocomplete="off" type="search" name="search" placeholder="<?php echo $this->_tpl_vars['arrayIdioma']['MN_BUSCA']; ?>
">
               <input class="btn-ok cinza font-normal fl-left" type="submit" value="ok">
               <div  id="carrega-busca" class="carrega-busca"></div>
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
               <a class="navbar-brand img-logo" href="index.php"><img src="commom/img/logo.png" alt="Logo Monteiro" title="Logo Monteiro"></a>   
               <div class="bloco-linguas-mobile visible-xs-block">
                  <a class="open-search-mobile" href="#"><img src="commom/img/lupa.png" alt="icone lupa" title="icone lupa"></a>
               <!--    <a href="?l=I">
                     <img src="commom/img/icon-en.png" alt="icone inglês" title="icone inglês">
                  </a>
                  <a href="?l=P">
                     <img src="commom/img/icon-pt.png" alt="icone português" title="icone português"> 
                  </a> -->
               </div>
            </div>
            <form action="noticias.php" class="form-search search-mobile" method="post" name="form_search">
               <input type="hidden" name="acao" value="busca">
               <a class="close-search-mobile" href="#"><img src="commom/img/lupa.png" alt="icone lupa" title="icone lupa"></a>
               <input class="font-normal input-search-mobile" id="buscaValorMobile" autocomplete="off" type="search" name="search" placeholder="busca...">
               <input class="btn-ok cinza font-normal" type="submit" value="ok">
               <div  id="carrega-busca-mobile" class="carrega-busca"></div>
            </form>
         </div>
         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
               <li class="linha-topo"><a class="link-linha-topo <?php if ($this->_tpl_vars['menuAtivo'] == 'home'): ?>link-topo-ativo<?php endif; ?> font-normal" href="index.php"><?php echo $this->_tpl_vars['arrayIdioma']['MN_HOME']; ?>
</a></li>
               <!-- <li class="linha-topo"><a class="link-linha-topo font-normal" href="escritorio.php">Escritório</a></li> -->
               <li class="dropdown linha-topo">
                  <a href="#" class="dropdown-toggle visible-xs link-linha-topo <?php if ($this->_tpl_vars['menuAtivo'] == 'escritorio'): ?>link-topo-ativo<?php endif; ?> font-normal" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $this->_tpl_vars['arrayIdioma']['MN_ESCRITORIO']; ?>
<span class="caret"></span></a>
                  <a href="#" class="hidden-xs link-linha-topo link-linha-topo-esc <?php if ($this->_tpl_vars['menuAtivo'] == 'escritorio'): ?>link-topo-ativo<?php endif; ?> font-normal"><?php echo $this->_tpl_vars['arrayIdioma']['MN_ESCRITORIO']; ?>
<span class="caret"></span></a>
                  <ul class="dropdown-menu dropdown-menu-esc">
                     <li><a class="link-linha-topo font-normal" href="escritorio.php"><?php echo $this->_tpl_vars['arrayIdioma']['MN_APRESENTACAO']; ?>
</a></li>
                     <li><a class="link-linha-topo font-normal" href="missao-visao-valores.php"><?php echo $this->_tpl_vars['arrayIdioma']['MN_MISVALOBJ']; ?>
</a></li>
                     <!-- <li><a class="link-linha-topo font-normal" href="responsabilidade-social.php"><?php echo $this->_tpl_vars['arrayIdioma']['MN_RESPSOCIAL']; ?>
</a></li> -->
                  </ul>
               </li>


               <li class="dropdown linha-topo">
                  <a href="#" class="dropdown-toggle visible-xs link-linha-topo <?php if ($this->_tpl_vars['menuAtivo'] == 'profissionais'): ?>link-topo-ativo<?php endif; ?> font-normal" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $this->_tpl_vars['arrayIdioma']['MN_PROFISSIONAIS']; ?>
<span class="caret"></span></a>
                  <a href="#" class="hidden-xs link-linha-topo link-linha-topo-prof <?php if ($this->_tpl_vars['menuAtivo'] == 'profissionais'): ?>link-topo-ativo<?php endif; ?> font-normal"><?php echo $this->_tpl_vars['arrayIdioma']['MN_PROFISSIONAIS']; ?>
<span class="caret"></span></a>
                  <ul class="dropdown-menu dropdown-menu-prof">
                     <li><a class="link-linha-topo font-normal" href="marcos-antonio-gaban-monteiro.php">Marcos Antonio Gaban Monteiro</a></li>
                     <li><a class="link-linha-topo font-normal" href="alvaro-merlos-akinaga-cordeiro.php">Álvaro Merlos Akinaga Cordeiro</a></li>
                     <li><a class="link-linha-topo font-normal" href="juliana-gaban-monteiro-multini.php">Juliana Gaban Monteiro Multini</a></li>
                     <li><a class="link-linha-topo font-normal" href="angelica-rebequi-da-motta-santos.php">Angélica Rebequi da Motta Santos</a></li>
                     <!-- <li><a class="link-linha-topo font-normal" href="krikor-palma-artissian.php">Krikor Palma Artissian</a></li> -->
                     <li><a class="link-linha-topo font-normal" href="roberta-moraes-dias-benatti.php">Roberta Moraes Dias Benatti</a></li>
                     <li><a class="link-linha-topo font-normal" href="gabriel-vieira-almeida-machado.php">Gabriel Vieira Almeida Machado</a></li>
                     <li><a class="link-linha-topo font-normal" href="guillermo-santana-andrade-glassman.php">Guillermo Santana Andrade Glassman</a></li>
                     <li><a class="link-linha-topo font-normal" href="milena-araujo.php">Milena Araujo</a></li>
                  </ul>
               </li>


               <li class="dropdown linha-topo">
                  <a href="#" class="dropdown-toggle visible-xs link-linha-topo <?php if ($this->_tpl_vars['menuAtivo'] == 'atuacao'): ?>link-topo-ativo<?php endif; ?> font-normal" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $this->_tpl_vars['arrayIdioma']['MN_ATUACAO']; ?>
<span class="caret"></span></a>
                  <a href="#" class="hidden-xs link-linha-topo link-linha-topo-atu <?php if ($this->_tpl_vars['menuAtivo'] == 'atuacao'): ?>link-topo-ativo<?php endif; ?> font-normal"><?php echo $this->_tpl_vars['arrayIdioma']['MN_ATUACAO']; ?>
<span class="caret"></span></a>
                  <ul class="dropdown-menu dropdown-menu-atu">
                     <li><a class="link-linha-topo font-normal" href="direito-publico.php"><?php echo $this->_tpl_vars['arrayIdioma']['MN_DIRPUBLICO']; ?>
</a></li>
                     <li><a class="link-linha-topo font-normal" href="direito-eleitoral.php"><?php echo $this->_tpl_vars['arrayIdioma']['MN_DIRELEITORAL']; ?>
</a></li>
                     <li><a class="link-linha-topo font-normal" href="direito-empresarial.php"><?php echo $this->_tpl_vars['arrayIdioma']['MN_DIREMPRESARIAL']; ?>
</a></li>
                     <li><a class="link-linha-topo font-normal" href="direito-imobiliario.php"><?php echo $this->_tpl_vars['arrayIdioma']['MN_DIRIMOBILIARIO']; ?>
</a></li>                     
                  </ul>
               </li>
               <li class="linha-topo"><a class="link-linha-topo <?php if ($this->_tpl_vars['menuAtivo'] == 'noticias'): ?>link-topo-ativo<?php endif; ?> font-normal" href="noticias.php"><?php echo $this->_tpl_vars['arrayIdioma']['MN_NOTICIAS']; ?>
</a></li>
               <li class="dropdown linha-topo">
                  <a href="#" class="dropdown-toggle visible-xs link-linha-topo <?php if ($this->_tpl_vars['menuAtivo'] == 'publicacoes'): ?>link-topo-ativo<?php endif; ?> font-normal" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $this->_tpl_vars['arrayIdioma']['MN_PUBLICACOES']; ?>
<span class="caret"></span></a>
                  <a href="#" class="hidden-xs link-linha-topo link-linha-topo-pub <?php if ($this->_tpl_vars['menuAtivo'] == 'publicacoes'): ?>link-topo-ativo<?php endif; ?> font-normal"><?php echo $this->_tpl_vars['arrayIdioma']['MN_PUBLICACOES']; ?>
<span class="caret"></span></a>
                  <ul class="dropdown-menu dropdown-menu-pub">
                     <li><a class="link-linha-topo font-normal" href="informativos.php"><?php echo $this->_tpl_vars['arrayIdioma']['MN_INFORMATIVOS']; ?>
</a></li>
                     <li><a class="link-linha-topo font-normal" href="artigos.php"><?php echo $this->_tpl_vars['arrayIdioma']['MN_ARTIGOS']; ?>
</a></li>
                     <!-- <li><a class="link-linha-topo font-normal" href="instrucoes.php"><?php echo $this->_tpl_vars['arrayIdioma']['MN_INSTRUCOES']; ?>
</a></li> -->
                     <li><a class="link-linha-topo font-normal" href="palestras.php"><?php echo $this->_tpl_vars['arrayIdioma']['MN_PALESTRAS']; ?>
</a></li>
                  </ul>
               </li>
               <li class="linha-topo"><a class="link-linha-topo <?php if ($this->_tpl_vars['menuAtivo'] == 'midia'): ?>link-topo-ativo<?php endif; ?> font-normal" href="midias.php"><?php echo $this->_tpl_vars['arrayIdioma']['MN_MIDIA']; ?>
</a></li>
               <li class="linha-topo"><a class="link-linha-topo <?php if ($this->_tpl_vars['menuAtivo'] == 'fale conosco'): ?>link-topo-ativo<?php endif; ?> font-normal" href="fale-conosco.php"><?php echo $this->_tpl_vars['arrayIdioma']['MN_FALECONOSCO']; ?>
</a></li>
               <li class="linha-topo"><a class="link-linha-topo <?php if ($this->_tpl_vars['menuAtivo'] == 'localizacao'): ?>link-topo-ativo<?php endif; ?> font-normal" href="localizacao.php"><?php echo $this->_tpl_vars['arrayIdioma']['MN_LOCALIZACAO']; ?>
</a></li>
               <li class="linha-topo"><a class=" font-normal pd-right-none icon-redes" href="https://www.facebook.com/Marcos-Monteiro-Sociedade-de-Advogados-798300076864104/timeline/" target="_blank"><img src="commom/img/icon-face.png" alt="Facebook" title="Facebook"></a></li>
               <li class="linha-topo"><a class=" font-normal pd-left-none icon-redes" href="https://www.linkedin.com/company/10305250?trk=tyah&trkInfo=clickedVertical%3Acompany%2CclickedEntityId%3A10305250%2Cidx%3A2-1-7%2CtarId%3A1447688521985%2Ctas%3Amarcos%20monteiro%20soc" target="_blank"><img src="commom/img/icon-in.png" alt="Likedin" title="Likedin" target="_blank"></a></li>
               <li class="linha-topo"><a class=" icon-youtube font-normal pd-left-none icon-redes" href="https://www.youtube.com/channel/UCsSSUlcc-jSWzuXz8HakFJw" target="_blank"><img src="commom/img/icon-youtube.png" alt="Youtube" title="Youtube" target="_blank"></a></li>
            </ul>
         </div>
      </div>
   </nav>
</header>