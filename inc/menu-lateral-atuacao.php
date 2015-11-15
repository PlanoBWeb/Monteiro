<div class="col-xs-12 col-sm-3 col-md-3 pd-none bloco-menu-lateral">
   <?php 
      $pagina = $_GET['pag']; 

      if($PgAtiva == "atuacao"):
   ?> 
   <h2 class="titulo-menu-lateral font-normal">DIREITO PÚBLICO</h2>
   <nav class="menu-lateral">
      <ul>         
         <li class="linha-menu-lateral <?php if($pagina == "tribunal-de-contas.php"){ echo "link-lateral-ativo"; } ?>"><a class="link-menu-lateral font-normal" href="tribunal-de-contas.php">Tribunal de Contas</a></li>
         <li class="linha-menu-lateral <?php if($pagina == "licitacoes-e-contratos.php"){ echo "link-lateral-ativo"; } ?>"><a class="link-menu-lateral font-normal" href="licitacoes-e-contratos.php">Licitações e Contratos</a></li>
         <li class="linha-menu-lateral <?php if($pagina == "improbidade-administrativa.php"){ echo "link-lateral-ativo"; } ?>"><a class="link-menu-lateral font-normal" href="improbidade-administrativa.php">Improbidade Administrativa</a></li>
         <li class="linha-menu-lateral <?php if($pagina == "crimes-de-responsabilidade.php"){ echo "link-lateral-ativo"; } ?>"><a class="link-menu-lateral font-normal" href="crimes-de-responsabilidade.php">Crimes de Responsabilidade</a></li>
         <li class="linha-menu-lateral <?php if($pagina == "terceiro-setor.php"){ echo "link-lateral-ativo"; } ?>"><a class="link-menu-lateral font-normal" href="terceiro-setor.php">Terceiro Setor</a></li>
         <li class="linha-menu-lateral <?php if($pagina == "processo-legislativo.php"){ echo "link-lateral-ativo"; } ?>"><a class="link-menu-lateral font-normal" href="processo-legislativo.php">Processo Legislativo</a></li>
         <li class="linha-menu-lateral <?php if($pagina == "consultoria.php"){ echo "link-lateral-ativo"; } ?>"><a class="link-menu-lateral font-normal" href="consultoria.php">Consultoria</a></li>
         <li class="linha-menu-lateral <?php if($pagina == "consorcios-municipais.php"){ echo "link-lateral-ativo"; } ?>"><a class="link-menu-lateral font-normal" href="consorcios-municipais.php">Consórcios Municipais</a></li>
      </ul>
   </nav>
   <?php 
      elseif ($PgAtiva == "direito-eleitoral.php"):
   ?>
   <h2 class="titulo-menu-lateral font-normal">DIREITO ELEITORAL</h2>
   <nav class="menu-lateral">
      <ul>         
         <li class="linha-menu-lateral <?php if($pagina == "marcos"){ echo "link-lateral-ativo"; } ?>"><a class="link-menu-lateral font-normal" href="marcos-antonio-gaban-monteiro.php?pag=marcos">Marcos Antonio Gaban Monteiro</a></li>
         <li class="linha-menu-lateral <?php if($pagina == "alvaro"){ echo "link-lateral-ativo"; } ?>"><a class="link-menu-lateral font-normal" href="alvaro-merlos-akinaga-cordeiro.php?pag=alvaro">Álvaro Merlos Akinaga Cordeiro</a></li>
         <li class="linha-menu-lateral <?php if($pagina == "juliana"){ echo "link-lateral-ativo"; } ?>"><a class="link-menu-lateral font-normal" href="juliana-gaban-monteiro-multini.php?pag=juliana">Juliana Gaban Monteiro Multini</a></li>
         <li class="linha-menu-lateral <?php if($pagina == "angelica"){ echo "link-lateral-ativo"; } ?>"><a class="link-menu-lateral font-normal" href="angelica-rebequi-da-motta-santos.php?pag=angelica">Angélica Rebequi da Motta Santos</a></li>
         <li class="linha-menu-lateral <?php if($pagina == "krikor"){ echo "link-lateral-ativo"; } ?>"><a class="link-menu-lateral font-normal" href="krikor-palma-artissian.php?pag=krikor">Krikor Palma Artissian</a></li>
         <li class="linha-menu-lateral <?php if($pagina == "roberta"){ echo "link-lateral-ativo"; } ?>"><a class="link-menu-lateral font-normal" href="roberta-moraes-dias-benatti.php?pag=roberta">Roberta Moraes Dias Benatti</a></li>
         <li class="linha-menu-lateral <?php if($pagina == "gabriel"){ echo "link-lateral-ativo"; } ?>"><a class="link-menu-lateral font-normal" href="gabriel-vieira-almeida-machado.php?pag=gabriel">Gabriel Vieira Almeida Machado</a></li>
         <li class="linha-menu-lateral <?php if($pagina == "ernesto"){ echo "link-lateral-ativo"; } ?>"><a class="link-menu-lateral font-normal" href="ernesto-ferreira-da-silva-neto.php?pag=ernesto">Ernesto Ferreira da Silva Neto</a></li>
      </ul>
   </nav>
   <?php 
      elseif ($PgAtiva == "direito-empresarial.php"):
   ?>
   <h2 class="titulo-menu-lateral font-normal">DIREITO EMPRESARIAL</h2>
   <nav class="menu-lateral">
      <ul>         
         <li class="linha-menu-lateral <?php if($pagina == "marcos" || $pagina == ""){ echo "link-lateral-ativo"; } ?>"><a class="link-menu-lateral font-normal" href="marcos-antonio-gaban-monteiro.php?pag=marcos">Marcos Antonio Gaban Monteiro</a></li>
         <li class="linha-menu-lateral <?php if($pagina == "alvaro"){ echo "link-lateral-ativo"; } ?>"><a class="link-menu-lateral font-normal" href="alvaro-merlos-akinaga-cordeiro.php?pag=alvaro">Álvaro Merlos Akinaga Cordeiro</a></li>
         <li class="linha-menu-lateral <?php if($pagina == "juliana"){ echo "link-lateral-ativo"; } ?>"><a class="link-menu-lateral font-normal" href="juliana-gaban-monteiro-multini.php?pag=juliana">Juliana Gaban Monteiro Multini</a></li>
         <li class="linha-menu-lateral <?php if($pagina == "angelica"){ echo "link-lateral-ativo"; } ?>"><a class="link-menu-lateral font-normal" href="angelica-rebequi-da-motta-santos.php?pag=angelica">Angélica Rebequi da Motta Santos</a></li>
         <li class="linha-menu-lateral <?php if($pagina == "krikor"){ echo "link-lateral-ativo"; } ?>"><a class="link-menu-lateral font-normal" href="krikor-palma-artissian.php?pag=krikor">Krikor Palma Artissian</a></li>
         <li class="linha-menu-lateral <?php if($pagina == "roberta"){ echo "link-lateral-ativo"; } ?>"><a class="link-menu-lateral font-normal" href="roberta-moraes-dias-benatti.php?pag=roberta">Roberta Moraes Dias Benatti</a></li>
         <li class="linha-menu-lateral <?php if($pagina == "gabriel"){ echo "link-lateral-ativo"; } ?>"><a class="link-menu-lateral font-normal" href="gabriel-vieira-almeida-machado.php?pag=gabriel">Gabriel Vieira Almeida Machado</a></li>
         <li class="linha-menu-lateral <?php if($pagina == "ernesto"){ echo "link-lateral-ativo"; } ?>"><a class="link-menu-lateral font-normal" href="ernesto-ferreira-da-silva-neto.php?pag=ernesto">Ernesto Ferreira da Silva Neto</a></li>
      </ul>
   </nav>
   <?php 
      elseif ($PgAtiva == "direito-imobiliario.php"):
   ?>
   <h2 class="titulo-menu-lateral font-normal">DIREITO IMOBILIÁRIO</h2>
   <nav class="menu-lateral">
      <ul>         
         <li class="linha-menu-lateral <?php if($pagina == "marcos" || $pagina == ""){ echo "link-lateral-ativo"; } ?>"><a class="link-menu-lateral font-normal" href="marcos-antonio-gaban-monteiro.php?pag=marcos">Marcos Antonio Gaban Monteiro</a></li>
         <li class="linha-menu-lateral <?php if($pagina == "alvaro"){ echo "link-lateral-ativo"; } ?>"><a class="link-menu-lateral font-normal" href="alvaro-merlos-akinaga-cordeiro.php?pag=alvaro">Álvaro Merlos Akinaga Cordeiro</a></li>
         <li class="linha-menu-lateral <?php if($pagina == "juliana"){ echo "link-lateral-ativo"; } ?>"><a class="link-menu-lateral font-normal" href="juliana-gaban-monteiro-multini.php?pag=juliana">Juliana Gaban Monteiro Multini</a></li>
         <li class="linha-menu-lateral <?php if($pagina == "angelica"){ echo "link-lateral-ativo"; } ?>"><a class="link-menu-lateral font-normal" href="angelica-rebequi-da-motta-santos.php?pag=angelica">Angélica Rebequi da Motta Santos</a></li>
         <li class="linha-menu-lateral <?php if($pagina == "krikor"){ echo "link-lateral-ativo"; } ?>"><a class="link-menu-lateral font-normal" href="krikor-palma-artissian.php?pag=krikor">Krikor Palma Artissian</a></li>
         <li class="linha-menu-lateral <?php if($pagina == "roberta"){ echo "link-lateral-ativo"; } ?>"><a class="link-menu-lateral font-normal" href="roberta-moraes-dias-benatti.php?pag=roberta">Roberta Moraes Dias Benatti</a></li>
         <li class="linha-menu-lateral <?php if($pagina == "gabriel"){ echo "link-lateral-ativo"; } ?>"><a class="link-menu-lateral font-normal" href="gabriel-vieira-almeida-machado.php?pag=gabriel">Gabriel Vieira Almeida Machado</a></li>
         <li class="linha-menu-lateral <?php if($pagina == "ernesto"){ echo "link-lateral-ativo"; } ?>"><a class="link-menu-lateral font-normal" href="ernesto-ferreira-da-silva-neto.php?pag=ernesto">Ernesto Ferreira da Silva Neto</a></li>
      </ul>
   </nav>
   <?php endif; ?>
</div>