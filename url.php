<?php 

	// $pastaProjeto	= "clientes/MonteiroEMassarana/Web/";
	$pastaProjeto	= "/Monteiro/";
	$urlCompleta 	= $_SERVER['REQUEST_URI'];
	$posInicio		= strpos($urlCompleta, $pastaProjeto);
	$priimeiraEtapa	= substr($urlCompleta, ($posInicio+strlen($pastaProjeto)));
	if(strpos($priimeiraEtapa, "?"))
	{
		$posFinal		= strpos($priimeiraEtapa, "?");
		$pagina			= substr($priimeiraEtapa,0,$posFinal);
	}
	else
	{
		$pagina			= $priimeiraEtapa;
	}

	// Profissionais
	if(
		$pagina == "marcos-antonio-gaban-monteiro.php" || 
		$pagina == "alvaro-merlos-akinaga-cordeiro.php" || 
		$pagina == "juliana-gaban-monteiro-multini.php" || 
		$pagina == "angelica-rebequi-da-motta-santos.php" || 
		$pagina == "krikor-palma-artissian.php" || 
		$pagina == "roberta-moraes-dias-benatti.php" ||
		$pagina == "gabriel-vieira-almeida-machado.php" || 
		$pagina == "ernesto-ferreira-da-silva-neto.php"
		){
		$PgAtiva = "profissionais"; 
	}

	// Atuação
	if(
		$pagina == "direito-publico.php" || 
		$pagina == "tribunal-de-contas.php" || 
		$pagina == "licitacoes-e-contratos.php" || 
		$pagina == "improbidade-administrativa.php" || 
		$pagina == "crimes-de-responsabilidade.php" || 
		$pagina == "terceiro-setor.php" ||
		$pagina == "processo-legislativo.php" || 
		$pagina == "consultoria.php" || 
		$pagina == "consorcios-municipais.php"
		){
		$PgAtiva = "direito publico"; 
	}

	if(
		$pagina == "direito-eleitoral.php" || 
		$pagina == "assessoria-para-pre-candidatos.php" || 
		$pagina == "fidelidade-partidaria.php" || 
		$pagina == "raio-x-candidato.php" || 
		$pagina == "registro-candidatura.php" || 
		$pagina == "prestacao-de-contas.php" ||
		$pagina == "propaganda-eleitoral.php" || 
		$pagina == "assessoria-em-campanhas.php" || 
		$pagina == "impugnacao-de-mandato-eletivo.php" ||
		$pagina == "crimes-infracoes-eleitorais.php" ||
		$pagina == "cpi.php" 
		){
		$PgAtiva = "direito eleitoral"; 
	}

	if(
		$pagina == "direito-empresarial.php" ||
		$pagina == "planejamento-tributario.php" ||
		$pagina == "recuperacao-de-creditos.php" ||
		$pagina == "debitos-federais-estaduais.php" ||
		$pagina == "representacao-em-licitacoes.php" ||
		$pagina == "impugnacoes-em-editais.php" ||
		$pagina == "mandado-de-seguranca.php" ||
		$pagina == "advocacia-consultiva.php" ||
		$pagina == "diligencias-negociais.php"
	){
		$PgAtiva = "direito empresarial"; 
	}

	if(
		$pagina == "direito-imobiliario.php" ||
		$pagina == "consultoria-e-assessoria-Juridicas.php" ||
		$pagina == "registro-e-legalizacao-de-imoveis.php" ||
		$pagina == "renegociacao-de-contratos-imobiliarios.php" ||
		$pagina == "Contencioso-Judicial-e-extrajudicial.php" ||
		$pagina == "Acoes-de-Usucapiao.php" ||
		$pagina == "Inventarios-Judicial-e-Extrajudicial-com-partilha.php" ||
		$pagina == "Autorizacao-Alvara-Judicial-para-Venda-de-Imoveis.php" ||
		$pagina == "Acoes-possessorias-e-Imissao-na-posse.php" 
	){
		$PgAtiva = "direito imobiliario"; 
	}	

	if ($pagina == "informativos.php") {
		$paginaMenuBlog = "informativo.php";
	}elseif ($pagina == "artigos.php") {
		$paginaMenuBlog = "artigo.php";
	}elseif ($pagina == "instrucoes.php") {
		$paginaMenuBlog = "instrucao.php";
	}elseif ($pagina == "palestras.php") {
		$paginaMenuBlog = "palestra.php";
	}elseif ($pagina == "noticias.php") {
		$paginaMenuBlog = "noticia.php";
	}

	if ($pagina == "informativo.php") {
		$paginaMenuBlogInver = "informativos.php";
	}elseif ($pagina == "artigo.php") {
		$paginaMenuBlogInver = "artigos.php";
	}elseif ($pagina == "instrucao.php") {
		$paginaMenuBlogInver = "instrucoes.php";
	}elseif ($pagina == "palestra.php") {
		$paginaMenuBlogInver = "palestras.php";
	}elseif ($pagina == "noticia.php") {
		$paginaMenuBlogInver = "noticias.php";
	}

	if ($pagina == "informativos.php" || $pagina == "informativo.php" ) {
		$tipoPub = "1";
	}elseif ($pagina == "artigos.php" || $pagina == "artigo.php") {
		$tipoPub = "2";
	}elseif ($pagina == "instrucoes.php" || $pagina == "instrucao.php") {
		$tipoPub = "3";
	}elseif ($pagina == "palestras.php" || $pagina == "palestra.php") {
		$tipoPub = "4";
	}

?>