<?php
	
	include_once "configs/config.php";
	include_once "url.php";
	include_once "configs/idiomas.php";
	include_once "news_indique.php";
	include_once "classes/Noticias.class.php";
	include_once "classes/Categoria.class.php";
	$class 		= new Noticias();
	$classCatego= new Categoria();
	$urlCompleta = UrlAtual(); 

	if ($_GET['id']) {
		$retornoMenuBlogAnoMes = $class->Pesquisar(null, null, null);
		if( $retornoMenuBlogAnoMes[0] )
		{
			$smarty->assign("mensagem", $retornoMenuBlogAnoMes[1]);
			$smarty->assign("redir", "noticias.php");
			$smarty->display("mensagem.html");
			exit();
		}

		// Dados da noticia
		$parametro['idioma']	= $_idioma;
		$parametro['id'] 		= $_GET['id'];
		$retorno = $class->Pesquisar($parametro, null, null);
		if( $retorno[0] )
		{
			$smarty->assign("mensagem", $retorno[1]);
			$smarty->assign("redir", "noticias.php");
			$smarty->display("mensagem.html");
			exit();
		}

		$parametroVejaTambem['destaque']	= "1";
		$retornoVejaTambem = $class->Pesquisar($parametroVejaTambem, null, null);
		if( $retornoVejaTambem[0] )
		{
			$smarty->assign("mensagem", $retornoVejaTambem[1]);
			$smarty->assign("redir", "noticias.php");
			$smarty->display("mensagem.html");
			exit();
		}
		$totalResultArray = count($retornoVejaTambem[1]);
		if ($totalResultArray > 2) {
			$randVejaTambem = array_rand($retornoVejaTambem[1], 2);
			for ($i=0; $i < 2; $i++) { 
				$randVejaTambem[$i] = $retornoVejaTambem[1][$randVejaTambem[$i]];
			}
		}else{
			$randVejaTambem = "";
		}

		// Dados do blog menu lateral
		$parametroBlog['destaque']	= "1";
		$parametroBlog['limitVeja']	= "4";
		$retornoMenuBlog = $class->Pesquisar($parametroBlog, null, null);
		if( $retornoMenuBlog[0] )
		{
			$smarty->assign("mensagem", $retornoMenuBlog[1]);
			$smarty->assign("redir", "noticias.php");
			$smarty->display("mensagem.html");
		exit();
		}

		// Dados do blog menu lateral categoria
		$parametro['id']					= $_GET['id'];
		$parametro['tipoNoticia']			= "1";
		$retornoCatego = $classCatego->Pesquisar($parametro, null, null);
		if( $retornoCatego[0] )
		{
			$smarty->assign("mensagem", $retornoCatego[1]);
			$smarty->assign("redir", "noticias.php");
			$smarty->display("mensagem.html");
			exit();
		}

		// Tags
		$retornoTags = $class->PesquisarTags(null, null, null);
		if( $retornoTags[0] )
		{
			$smarty->assign("mensagem", $retornoTags[1]);
			$smarty->assign("redir", "noticias.php");
			$smarty->display("mensagem.html");
		exit();
		}

		$parametroTipoTagsPg['id'] = $_GET['id'];
		// Tags Página
		$retornoTagsPg = $class->PesquisarTags($parametroTipoTagsPg, null, null);
		if( $retornoTagsPg[0] )
		{
			$smarty->assign("mensagem", $retornoTagsPg[1]);
			$smarty->assign("redir", "noticias.php");
			$smarty->display("mensagem.html");
		exit();
		}

		$smarty->assign("menuAtivo", $menuAtivo);
		$smarty->assign("dadosMenuBlogAnoMes", $retornoMenuBlogAnoMes[1]);
		$smarty->assign("dadosTags", $retornoTags[1]);
		$smarty->assign("paginaMenuBlogInver", $paginaMenuBlogInver);
		$smarty->assign("paginaMenuBlog", $paginaMenuBlog);
		$smarty->assign("urlCompleta", $urlCompleta);
		$smarty->assign("dados", $retorno[1]);
		$smarty->assign("dadosVejaTambem", $randVejaTambem);
		$smarty->assign("dadosCategoria", $retornoCatego[1]);
		$smarty->assign("dadosMenuBlog", $retornoMenuBlog[1]);
		$smarty->assign("arrayIdioma", $arrayIdioma);
		$smarty->assign("pagina", $pagina);
		$smarty->assign("titulo", utf8_encode(TITULO));
		$smarty->assign("nome", $_SESSION['nome']);
		$smarty->assign("dadosTagsPg", $retornoTagsPg[1]);
		$smarty->display("noticia.html");
	}else{
		$smarty->assign("redir", "index.php");
		$smarty->display("mensagem.html");
		exit();
	}

?>