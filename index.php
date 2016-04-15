<?php
	
	include_once "configs/config.php";
	include_once "url.php";
	include_once "news_indique.php";
	include_once "classes/Noticias.class.php";
	$class = new Noticias();

	include_once "classes/Publicacoes.class.php";
	$classPub = new Publicacoes();

	$parametro['id'] 		= $_GET['id'];
	$parametro['idioma']	= $_idioma;
	$parametro['destaque']	= "1";
	$parametro['limitDestHome']	= "20";
	$retorno = $class->Pesquisar($parametro, null, null);
	if( $retorno[0] )
	{
		$smarty->assign("mensagem", $retorno[1]);
		$smarty->assign("redir", "index.php");
		$smarty->display("mensagem.html");
		exit();
	}
	$totalNotDestaque = count($retorno[1]);

	$parametro['id'] 		= $_GET['id'];
	$parametro['idioma']	= $_idioma;
	$parametro['tipo'] 		= "1";
	$parametro['limitVeja'] = "2";
	$retornoPub = $classPub->Pesquisar($parametro, null, null);
	if( $retornoPub[0] )
	{
		$smarty->assign("mensagem", $retornoPub[1]);
		$smarty->assign("redir", "index.php");
		$smarty->display("mensagem.html");
		exit();
	}

	$smarty->assign("menuAtivo", $menuAtivo);
	$smarty->assign("totalNotDestaque", $totalNotDestaque);
	$smarty->assign("dadosPub", $retornoPub[1]);
	$smarty->assign("dados", $retorno[1]);
	$smarty->assign("arrayIdioma", $arrayIdioma);
	$smarty->assign("pagina", $pagina);
	$smarty->assign("titulo", utf8_encode(TITULO));
	$smarty->assign("nome", $_SESSION['nome']);
	$smarty->display("index.html");

?>