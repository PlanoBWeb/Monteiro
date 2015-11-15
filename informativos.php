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
	$retorno = $class->Pesquisar($parametro, null, null);
	if( $retorno[0] )
	{
		$smarty->assign("mensagem", $retorno[1]);
		$smarty->assign("redir", "index.php");
		$smarty->display("mensagem.html");
		exit();
	}
	$totalPub = count($retorno[1]);

	// Dados do blog menu lateral	
	$parametroBlog['destaque']	= "1";
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
	$parametroDestaque['limitVeja']	= "4";
	$retornoCatego 		= $classCatego->Pesquisar($parametroDestaque, null, null);
	if( $retornoCatego[0] )
	{
		$smarty->assign("mensagem", $retornoCatego[1]);
		$smarty->assign("redir", "index.php");
		$smarty->display("mensagem.html");
		exit();
	}	

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