<?php
	
	include_once "configs/config.php";
	include_once "url.php";
	include_once "configs/idiomas.php";
	include_once "news_indique.php";
	include_once "classes/Publicacoes.class.php";
	include_once "classes/Categoria.class.php";
	$class 		= new Publicacoes();
	$classCatego= new Categoria();

	if ($_GET['id']) {
		$parametroBlogAnoMes['tipo']= $tipoPub;
		$retornoMenuBlogAnoMes = $class->Pesquisar($parametroBlogAnoMes, null, null);
		if( $retornoMenuBlogAnoMes[0] )
		{
			$smarty->assign("mensagem", $retornoMenuBlogAnoMes[1]);
			$smarty->assign("redir", "noticias.php");
			$smarty->display("mensagem.html");
			exit();
		}

		// Passa o tipo da publicação que vai ser
		$parametro['tipo'] 				= $tipoPub; 
		$parametroBlog['tipo'] 			= $tipoPub; 
		$parametroVejaTambem['tipo'] 	= $tipoPub; 
		$parametroTipoTags['tipo']		= $tipoPub; 

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

		// $parametroVejaTambem['destaque']	= "1";
		// $parametroVejaTambem['limitVeja']	= "2";
		$retornoVejaTambem = $class->Pesquisar($parametroVejaTambem, null, null);
		if( $retornoVejaTambem[0] )
		{
			$smarty->assign("mensagem", $retornoVejaTambem[1]);
			$smarty->assign("redir", "index.php");
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

		// Tags
		$retornoTags = $class->PesquisarTags($parametroTipoTags, null, null);
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
		$smarty->assign("dadosVejaTambem", $randVejaTambem);
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
		$smarty->assign("dadosTagsPg", $retornoTagsPg[1]);
		$smarty->display("palestra.html");
	}else{
		$smarty->assign("redir", "index.php");
		$smarty->display("mensagem.html");
		exit();
	}
