<?php /* Smarty version 2.6.12, created on 2015-11-13 17:30:55
         compiled from ../inc/footer.html */ ?>
<article class="compartilhe-monteiro">
	<div class="tamanho-max">
		<div class="col-xs-12 col-sm-3 col-md-3 pd-left-5 center-bloco-compartilhe">
			<h2 class="titulo-compartilhe font-normal"><?php echo $this->_tpl_vars['arrayIdioma']['MN_ASSINE_NEWS']; ?>
</h2>
			<form class="form-search" method="post" name="formnewsletter">
				<input type="hidden" name="acao" value="newsletter">
	            <input class="font-normal form-compartilhe" type="text" name="newsletter" placeholder="e-mail">
	            <input class="btn-ok cinza font-normal" type="submit" value="ok" onclick="return enviarnewsletter();">
	         </form>
		</div>
		<div class="col-xs-12 col-sm-1 col-md-1">&nbsp;</div>
		<div class="col-xs-12 col-sm-3 col-md-3  center-bloco-compartilhe">
			<h2 class="titulo-compartilhe font-normal"><?php echo $this->_tpl_vars['arrayIdioma']['MN_INDIQUE_SITE']; ?>
</h2>
			<form class="form-search" method="post" name="formindique">
				<input type="hidden" name="acao" value="indique">
	            <input class="font-normal form-compartilhe" type="text" name="indique" placeholder="e-mail">
	            <input class="btn-ok cinza font-normal" type="submit" value="ok" onclick="return enviarindique();">
	        </form>
		</div>
		<div class="col-xs-12 col-sm-1 col-md-1">&nbsp;</div>
		<div class="col-xs-12 col-sm-4 col-md-4 pd-right-5 center-bloco-compartilhe">
			<h2 class="titulo-compartilhe font-normal"><?php echo $this->_tpl_vars['arrayIdioma']['MN_CONECTADO_NOS']; ?>
</h2>
			<div class="bloco-conectado">
				<a href="https://www.facebook.com/Marcos-Monteiro-Sociedade-de-Advogados-798300076864104/" target="_blank">
					<img src="commom/img/face.png" alt"Facebook" title="Facebook">		
				</a>
				<a href="" target="_blank">
					<img src="commom/img/likedin.png" alt"Likedin" title="Likedin">		
				</a>
				<a href="" target="_blank">
					<img src="commom/img/youtube.png" alt"Youtube" title="Youtube">		
				</a>
			</div>
		</div>
	</div>
</article>
<section class="encapsula-rodape">
	<footer>
		<div class="row">
			<div class="col-xs-12 col-sm-3 col-md-3 hidden-xs bloco-sobre-footer">
				<a href="index.php">
					<img src="commom/img/logo-footer.png" alt="Marcos Monteiro Sociedade de Advogados" title="Marcos Monteiro Sociedade de Advogados">
				</a>
				<p class="txt-logo-footer font-normal"><?php echo $this->_tpl_vars['arrayIdioma']['MN_SOBRE_FOOTER']; ?>
 </p>
			</div>
			<div class="col-xs-12 col-sm-1 col-md-1">&nbsp;</div>
			<div class="col-xs-12 col-sm-5 col-md-3">
				<div class="bloco-center-footer">
					<p class="txt-titulo-footer font-normal"><?php echo $this->_tpl_vars['arrayIdioma']['MN_LOCALIZACAO']; ?>
</p>

					<div class="linha-local-footer">
						<img class="icon-local-footer" src="commom/img/icon-casa.png" alt="icone casa" title="icone casa">
						<p class="txt-local-footer font-normal"><?php echo $this->_tpl_vars['arrayIdioma']['MN_END_FOOTER']; ?>
</p>
					</div>
					<div class="linha-local-footer">
						<img class="icon-local-footer" src="commom/img/icon-cel.png" alt="icone telefone" title="icone telefone">
						<p><a class="txt-local-footer font-normal" href="tel:01139298934">55 11 3929-8934</a>  |  <a class="txt-local-footer font-normal" href="tel:01139298936">Fax: 55 11 3929-8936</a></p>
						<img class="icon-local-footer top-linha-footer" src="commom/img/icon-waths.png" alt="icone wathsapp" title="icone wathsapp">
						<p class="top-linha-footer"><a class="txt-local-footer font-normal" href="tel:011987492993">55 11 9 8749-2993</a></p>
					</div>
					<div class="linha-local-footer">
						<img class="icon-local-footer" src="commom/img/icon-msg.png" alt="icone mensagem" title="icone mensagem">
						<a class="txt-local-footer font-normal" href="mailto:contato@mmonteiroadv.com.br">contato@mmonteiroadv.com.br</a>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-1 col-md-1">&nbsp;</div>
			<div class="col-xs-12 col-sm-5 col-md-4">
				<div class="bloco-center-footer">
					<p class="txt-titulo-footer font-normal"><?php echo $this->_tpl_vars['arrayIdioma']['MN_CURTA_PAG']; ?>
</p><br>
					<div class="fb-page" data-href="https://www.facebook.com/Marcos-Monteiro-Sociedade-de-Advogados-798300076864104/timeline/" data-width="280" data-height="250" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"></div>
				</div>
			</div>
		</div>
		<div class="row bloco-direitos">
			<div class="col-xs-12 col-sm-12 col-md-12 encapsula-direitos">
				<p class="txt-direitos font-normal"><?php echo $this->_tpl_vars['arrayIdioma']['MN_DIREITOS']; ?>
</p>
				<a class="fl-right" href="http://www.planobweb.com.br/"><img src="commom/img/logo-planob.png" alt="PlanoBWeb" title="PlanoBWeb"></a>
				<p class="txt-dev font-normal"><?php echo $this->_tpl_vars['arrayIdioma']['MN_DEV']; ?>
</p>
			</div>
		</div>
	</footer>
</section>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="commom/js/bootstrap.min.js"></script>
<!-- vitrine -->
<script src="commom/js/vitrine/owl.carousel.js"></script>
<!-- vitrine -->
<script src="commom/js/geral.js" type="text/javascript"></script>
<script src="commom/js/lightbox.js"></script>
<script src="commom/js/funcoes.js"></script>
<?php echo '
 <script type="text/javascript">
    function enviarnewsletter()
    {
       d = document.formnewsletter;
       if(trim(d.newsletter.value)=="")
       {
          alert("O campo newsletter deve ser preenchido!");
          d.newsletter.focus();
          return false;
       }
       d.submit();
    }

    function enviarindique()
    {
       d = document.formindique;
       if(trim(d.indique.value)=="")
       {
          alert("O campo INDIQUE ESTE SITE deve ser preenchido!");
          d.indique.focus();
          return false;
       }
       d.submit();
    }

    $(\'.ano-menu-lateral\').click(function(event){
    	event.preventDefault();
        menu = $(this).next(\'.submenu-ano\');
        if($(\'.submenu-ano\').is(\':visible\')){
            $(\'.submenu-ano\').hide();   
        }else{
            $(menu).toggle();       
        }
    });

 </script>

	<script>
	$(document).ready(function() {
	 $("#owl-demo").owlCarousel({
	    navigation : true,
	    slideSpeed : 300,
	    paginationSpeed : 400,
	    singleItem : true
	 });
	});
	</script>
'; ?>