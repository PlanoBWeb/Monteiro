<?php
	
	include_once "configs/config.php";
	include_once "url.php";
	include_once "configs/idiomas.php";

	$smarty->assign("breadcrumb", "Renegociação de Contratos Imobiliários");
	$smarty->assign("arrayIdioma", $arrayIdioma);
	$smarty->assign("PgAtiva", $PgAtiva);
	$smarty->assign("pagina", $pagina);
	$smarty->assign("titulo", utf8_encode(TITULO));
	$smarty->assign("nome", $_SESSION['nome']);
	$smarty->display("registro-e-legalizacao-de-imoveis.html");

?>	