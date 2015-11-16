<?php
	
	include_once "configs/config.php";
	include_once "configs/idiomas.php";
	include_once "url.php";

	$smarty->assign("breadcrumb", "Escritório");
	$smarty->assign("arrayIdioma", $arrayIdioma);
	$smarty->assign("pagina", $pagina);
	$smarty->assign("titulo", utf8_encode(TITULO));
	$smarty->assign("nome", $_SESSION['nome']);
	$smarty->display("escritorio.html");

?>