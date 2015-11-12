<?php 



	$url = $_SERVER['REQUEST_URI'];
	$url = substr($url, 1);
	$url = explode('/', $url);

	
	
	$permissao  = array('home', 'teste', 'erro');
	$parametros = array('id' => $url[3], 'pag' => 10);


	echo "<pre>";
	var_dump($url);

	if (in_array($permissao, $url[3])) {
		echo "Acessou";
	}else{
		echo "nao";
	}

	// if($url[1] != $permissao[1]){
	// 	echo "home";
	// }else{
	// 	echo "nao";
	// }
