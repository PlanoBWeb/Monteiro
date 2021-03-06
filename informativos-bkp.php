<?php
	
	include_once "configs/config.php";
	include_once "url.php";
	include_once "configs/idiomas.php";
	include_once "news_indique.php";
	include_once "classes/Publicacoes.class.php";
	include_once "classes/Categoria.class.php";
	$class 		= new Publicacoes();
	$classCatego= new Categoria();

	// Passa o tipo da publicação que vai ser
	$parametro['tipo'] 			= $tipoPub; 
	$parametroBlog['tipo'] 		= $tipoPub; 
	$parametroDestaque['tipo'] 	= $tipoPub; 

	$parametro['idioma']	= $_idioma;
	if (!$_GET['id']) {
		if ($_GET['idCat']) {
			$parametro['idCat'] 	= $_GET['idCat'];
		}elseif ($_GET['ano'] || $_GET['mes']) {
			$parametro['anoAtual'] 	= $_GET['ano'];
			$parametro['mesAtual'] 	= $_GET['mes'];
		}
		else{
			$dataAtual = explode("/",date("d/m/Y"));
			$parametro['diaAtual'] = $dataAtual['0'];
			$parametro['mesAtual'] = $dataAtual['1'];
			$parametro['anoAtual'] = $dataAtual['2'];
		}
	}else{
		$parametro['id'] 		= $_GET['id'];
	}

	//  Paginação
	$parametroTipo['tipo'] = $tipoPub;
	$retornoPag = $class->Pesquisar($parametroTipo, null, null);
	if( $retornoPag[0] )
		die("<script>alert('".$retornoPag[1]."');location.href='index.php';</script>");

	$totalPorPagina = 10;
	$totalDeProdutos = count($retornoPag[1]);
	$conta = $totalDeProdutos / $totalPorPagina;
	$totalPaginas = ceil($conta);

	$_GET['p'] = (!$_GET['p'] ? 1 : $_GET['p']);
	//  Fim Paginação

	$parametro['tag'] = $_GET['tag'];
	$retorno = $class->Pesquisar($parametro, $totalPorPagina, $_GET['p']);
	if( $retorno[0] )
	{
		$smarty->assign("mensagem", $retorno[1]);
		$smarty->assign("redir", "index.php");
		$smarty->display("mensagem.html");
		exit();
	}
	if ($retorno[1] == "") {
		$parametro['mesAtual'] = $dataAtual['1'] -1;
		$retorno = $class->Pesquisar($parametro,  $totalPorPagina, $_GET['p']);
		if ($retorno[1] == "") {
			$parametro['mesAtual'] = $dataAtual['1'] -1;
			$parametro['anoAtual'] = $dataAtual['2'] -1;
			$retorno = $class->Pesquisar($parametro,  $totalPorPagina, $_GET['p']);
		}
	}
	
	$totalPub = count($retorno[1]);

	// Dados do blog menu lateral	
	$parametroBlog['destaque']	= "1";
	$parametroBlog['limitVeja']	= "4";
	$retornoMenuBlog = $class->Pesquisar($parametroBlog, null, null);
	if( $retornoMenuBlog[0] )
	{
		$smarty->assign("mensagem", $retornoMenuBlog[1]);
		$smarty->assign("redir", "index.php");
		$smarty->display("mensagem.html");
		exit();
	}

	// Dados do blog menu lateral categoria
	$parametroDestaque['id']		= $_GET['id'];
	$parametroDestaque['limitVeja']	= "2";
	$retornoCatego 		= $classCatego->Pesquisar($parametroDestaque, null, null);
	if( $retornoCatego[0] )
	{
		$smarty->assign("mensagem", $retornoCatego[1]);
		$smarty->assign("redir", "index.php");
		$smarty->display("mensagem.html");
		exit();
	}	

	$Numpaginas = array();
	for($j=0; $j <= $totalPaginas; $j++) { 
		$Numpaginas[$j] = $j;
	}
	$ultimaPaginacao = end($Numpaginas);
	$totalNot = count($retorno[1]);

	// Tags
	$retornoTags = $class->PesquisarTags(null, null, null);
	if( $retornoTags[0] )
	{
		$smarty->assign("mensagem", $retornoTags[1]);
		$smarty->assign("redir", "noticias.php");
		$smarty->display("mensagem.html");
	exit();
	}

	$smarty->assign("breadcrumb", "Informativos");
	$smarty->assign("dadosTags", $retornoTags[1]);
	$smarty->assign("totalPaginas", $totalPaginas);
	$smarty->assign("ultimaPaginacao", $ultimaPaginacao);
	$smarty->assign("Numpaginas", $Numpaginas);
	$smarty->assign("idCatPaginacao", $_GET['idCat']);
	$smarty->assign("anoPaginacao", $_GET['ano']);
	$smarty->assign("mesPaginacao", $_GET['mes']);
	$smarty->assign("paginaMenuBlogInver", $paginaMenuBlogInver);
	$smarty->assign("paginaMenuBlog", $paginaMenuBlog);
	$smarty->assign("totalPub", $totalPub);
	$smarty->assign("dadosCategoria", $retornoCatego[1]);
	$smarty->assign("dadosMenuBlog", $retornoMenuBlog[1]);
	$smarty->assign("dados", $retorno[1]);
	$smarty->assign("arrayIdioma", $arrayIdioma);
	$smarty->assign("pagina", $pagina);
	$smarty->assign("titulo", utf8_encode(TITULO));
	$smarty->assign("nome", $_SESSION['nome']);
	$smarty->display("informativos.html");

?>