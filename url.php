<?php 

	$pastaProjeto	= "clientes/MonteiroNovo/Web/";
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
		$PgAtiva = "atuacao"; 
	}



	// if(
	// 	$pagina == "marcos-antonio-gaban-monteiro.php" || 
	// 	$pagina == "" || 
	// 	$pagina == "" || 
	// 	$pagina == "" || 
	// 	$pagina == "" || 
	// 	$pagina == "" ||
	// 	){
	// 	$PgAtiva = "profissionais"; 
	// }
		
	

?>