<?php
	
	include_once "configs/config.php";
	include_once "url.php";
	include_once "news_indique.php";

	$smarty->assign("menuAtivo", $menuAtivo);
	$smarty->assign("pagina", $pagina);
	$smarty->assign("titulo", utf8_encode(TITULO));
	$smarty->assign("nome", $_SESSION['nome']);
	$smarty->display("midia.html");

?>