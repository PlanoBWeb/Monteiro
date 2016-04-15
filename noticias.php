﻿<?php
	
	include_once "configs/config.php";
	include_once "url.php";
	include_once "configs/idiomas.php";
	include_once "news_indique.php";
	include_once "classes/Noticias.class.php";
	include_once "classes/Categoria.class.php";
	$class 		= new Noticias();
	$classCatego= new Categoria();

	// Dados da noticia
	// $parametro['id'] 		= $_GET['id'];
	// $parametro['idCat'] 	= $_GET['idCat'];
	$parametro['idioma']	= $_idioma;

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

	$retornoMenuBlogAnoMes = $class->Pesquisar(null, null, null);
	if( $retornoMenuBlogAnoMes[0] )
	{
		$smarty->assign("mensagem", $retornoMenuBlogAnoMes[1]);
		$smarty->assign("redir", "noticias.php");
		$smarty->display("mensagem.html");
		exit();
	}

	// Dados do blog menu lateral categoria
	$parametroDestaque['id']			= $_GET['id'];
	$parametroDestaque['limitVeja']		= "4";
	$parametroDestaque['tipoNoticia']	= "1";
	$retornoCatego 		= $classCatego->Pesquisar($parametroDestaque, null, null);
	if( $retornoCatego[0] )
	{
		$smarty->assign("mensagem", $retornoCatego[1]);
		$smarty->assign("redir", "noticias.php");
		$smarty->display("mensagem.html");
		exit();
	}

	$totalPorPagina = 10;
	if ($_POST['p']) {
		$_GET['p'] = $_POST['p'];
		$_GET['p'] = (!$_GET['p'] ? 1 : $_GET['p']);
	}else{
		$_GET['p'] = (!$_GET['p'] ? 1 : $_GET['p']);	
	}
	
	
	//  Fim Paginação
	// $parametro['tag'] = $_GET['tag'];
	if ($_POST['acao'] == "busca") {
		$parametro['busca'] = $_POST['search'];
		$retornoPag = $class->Pesquisar($parametro, null, null);
		$retorno = $class->Pesquisar($parametro, $totalPorPagina, $_GET['p']);

		if( $retorno[0] )
		{
			$smarty->assign("mensagem", $retorno[1]);
			$smarty->assign("redir", "index.php");
			$smarty->display("mensagem.html");
			exit();
		}

		// Busca ajax	
		if ($retorno[1]) {
			echo '<ul class="carrega-busca-ajax">';
			foreach ($retorno[1] as $key) {
				echo '	    		
						<li class="selectProduto">'.$key["titulo"].'</li>
				';
			}	
			echo "</ul>";
		}
		// Busca ajax
	}else{
		if (!$_GET['id']) {
			if ($_GET['idCat']) {
				$parametro['idCat'] 	= $_GET['idCat'];
			}elseif ($_GET['ano'] || $_GET['mes']) {
				$parametro['anoAtual'] 	= $_GET['ano'];
				$parametro['mesAtual'] 	= $_GET['mes'];
			}elseif ($_GET['tag']) {
				$parametro['tag'] = $_GET['tag'];
			}
			// else{
			// 	$dataAtual = explode("/",date("d/m/Y"));
			// 	$parametro['diaAtual'] = $dataAtual['0'];
			// 	$parametro['mesAtual'] = $dataAtual['1'];
			// 	$parametro['anoAtual'] = $dataAtual['2'];
			// }
		}else{
			$parametro['id'] 		= $_GET['id'];
		}
		$retornoPag = $class->Pesquisar($parametro, null, null);
		$retorno = $class->Pesquisar($parametro,  $totalPorPagina, $_GET['p']);

		if( $retorno[0] )
		{
			$smarty->assign("mensagem", $retorno[1]);
			$smarty->assign("redir", "noticias.php");
			$smarty->display("mensagem.html");
			exit();
		}

		// if ($retorno[1] == "") {
		// 	$parametro['mesAtual'] = $dataAtual['1'] -1;
		// 	$retornoPag = $class->Pesquisar($parametro, null, null);
		// 	$retorno = $class->Pesquisar($parametro,  $totalPorPagina, $_GET['p']);
		// 	if ($retorno[1] == "") {
		// 		$parametro['mesAtual'] = $dataAtual['1'] -1;
		// 		$parametro['anoAtual'] = $dataAtual['2'] -1;
		// 		$retorno = $class->Pesquisar($parametro,  $totalPorPagina, $_GET['p']);
		// 	}
		// }
	}

	$totalDeProdutos = count($retornoPag[1]);
	$conta = $totalDeProdutos / $totalPorPagina;
	if (!($_GET['idCat'] || $_GET['ano'] || $_GET['mes'] || $_GET['tag'] || $_POST['acao'])) {
		if ($totalDeProdutos >= 30) {
			$totalPaginas = 3;	
		}else{
			$totalPaginas = ceil($conta);	
		}
	}else{
		$totalPaginas = ceil($conta);	
	}

	$Numpaginas 	= array();
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

	$smarty->assign("menuAtivo", $menuAtivo);
	$smarty->assign("breadcrumb", "Notícias");
	$smarty->assign("dadosTags", $retornoTags[1]);
	$smarty->assign("totalPaginas", $totalPaginas);
	$smarty->assign("ultimaPaginacao", $ultimaPaginacao);
	$smarty->assign("Numpaginas", $Numpaginas);
	$smarty->assign("idCatPaginacao", $_GET['idCat']);
	$smarty->assign("anoPaginacao", $_GET['ano']);
	$smarty->assign("mesPaginacao", $_GET['mes']);
	$smarty->assign("tagPaginacao", $_GET['tag']);
	$smarty->assign("postBusca", $_POST['search']);
	$smarty->assign("paginaMenuBlogInver", $paginaMenuBlogInver);
	$smarty->assign("paginaMenuBlog", $paginaMenuBlog);
	$smarty->assign("dadosCategoria", $retornoCatego[1]);
	$smarty->assign("dadosMenuBlog", $retornoMenuBlog[1]);
	$smarty->assign("dadosMenuBlogAnoMes", $retornoMenuBlogAnoMes[1]);
	$smarty->assign("totalNot", $totalNot);
	$smarty->assign("dados", $retorno[1]);
	$smarty->assign("arrayIdioma", $arrayIdioma);
	$smarty->assign("pagina", $pagina);
	$smarty->assign("titulo", utf8_encode(TITULO));
	$smarty->assign("nome", $_SESSION['nome']);
	if (!$_POST['buscaAjax']) {
		$smarty->display('noticias.html');
	}
	exit;
