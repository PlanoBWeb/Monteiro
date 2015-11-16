<?php
	
	include_once "configs/config.php";
	include_once "url.php";
	include_once "configs/idiomas.php";
	include_once "news_indique.php";
	include_once "classes/Publicacoes.class.php";
	include_once "classes/Categoria.class.php";
	$class 		= new Publicacoes();
	$classCatego= new Categoria();
	$urlCompleta= UrlAtual(); 

	// Passa o tipo da publicação que vai ser
	$parametro['tipo'] 				= $tipoPub; 
	$parametroBlog['tipo'] 			= $tipoPub; 
	$parametroVejaTambem['tipo'] 	= $tipoPub; 

	$parametro['idioma']	= $_idioma;
	$parametro['id'] 		= $_GET['id'];
	$retorno = $class->Pesquisar($parametro, null, null);
	if( $retorno[0] )
	{
		$smarty->assign("mensagem", $retorno[1]);
		$smarty->assign("redir", "index.php");
		$smarty->display("mensagem.html");
		exit();
	}

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
	$parametro['id']	= $_GET['id'];
	$retornoCatego = $classCatego->Pesquisar($parametro, null, null);
	if( $retornoCatego[0] )
	{
		$smarty->assign("mensagem", $retornoCatego[1]);
		$smarty->assign("redir", "index.php");
		$smarty->display("mensagem.html");
		exit();
	}

	$parametroVejaTambem['destaque']	= "1";
	$parametroVejaTambem['limitVeja']	= "2";
	$retornoVejaTambem = $class->Pesquisar($parametroVejaTambem, null, null);
	if( $retornoVejaTambem[0] )
	{
		$smarty->assign("mensagem", $retornoVejaTambem[1]);
		$smarty->assign("redir", "index.php");
		$smarty->display("mensagem.html");
		exit();
	}
	$randVejaTambem = array_rand($retornoVejaTambem[1], 2);
	for ($i=0; $i < 2; $i++) { 
		$randVejaTambem[$i] = $retornoVejaTambem[1][$randVejaTambem[$i]];
	}

	$smarty->assign("paginaMenuBlogInver", $paginaMenuBlogInver);
	$smarty->assign("paginaMenuBlog", $paginaMenuBlog);
	$smarty->assign("dadosVejaTambem", $randVejaTambem);
	$smarty->assign("urlCompleta", $urlCompleta);
	$smarty->assign("dadosCategoria", $retornoCatego[1]);
	$smarty->assign("dadosMenuBlog", $retornoMenuBlog[1]);
	$smarty->assign("dados", $retorno[1]);
	$smarty->assign("arrayIdioma", $arrayIdioma);
	$smarty->assign("pagina", $pagina);
	$smarty->assign("titulo", utf8_encode(TITULO));
	$smarty->assign("nome", $_SESSION['nome']);
	$smarty->display("informativo.html");

?>