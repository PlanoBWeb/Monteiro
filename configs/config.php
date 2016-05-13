<?php

// Data no passado
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");

// Sempre modificado
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");

// HTTP/1.1
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);

// HTTP/1.0
header("Pragma: no-cache");

session_start();

require $path.'libs/Smarty.class.php';

$smarty = new Smarty;
/*
$smarty->compile_check = false;
$smarty->caching = false;
$smarty->debugging = false;
*/

/* MyADMIN - http://phpmyadmin.locaweb.com.br/ */
if( $_SERVER['SERVER_NAME'] == 'planobweb' || $_SERVER['SERVER_NAME'] == '192.168.0.105' || $_SERVER['SERVER_NAME'] == 'dev')
{
	define("db_host", 'localhost');
	define("db_user", 'root');
	define("db_pass", '');
	define("db_base", 'monteiro');
	define("PATH_SERVIDOR","C:/wamp/www/Clientes/MonteiroEMassarana/Web/");
	// define("db_host", '179.188.16.95');
	// define("db_user", 'monteiroemassa');
	// define("db_pass", 'mo9428ro');
	// define("db_base", 'monteiroemassa');
	// define("PATH_SERVIDOR","E:/Home/monteiroemassarana/Web/Homologacao/");

}
else
{
	/* DADOS Online  */
	define("db_host", '179.188.16.95');
	define("db_user", 'monteiroemassa');
	define("db_pass", 'mo9428ro');
	define("db_base", 'monteiroemassa');
	define("PATH_SERVIDOR","E:/Home/monteiroemassarana/Web/");
}

//Acesso ao MyAdmin
$resultado=mysql_connect(db_host, db_user, db_pass);
if (!($resultado)) {
	echo "Erro ao conectar-se ao MySQL<br>";
}

//Acesso ao Banco de Dados
$resultado = mysql_select_db(db_base);
if (!($resultado)) {
	echo "Erro ao conectar-se ao Banco de Dados";
}

define("TITULO","Gaban Monteiro Sociedade de Advogados");

//Define idioma padrão
if(!$_SESSION['idioma'] || $_GET["l"])
{
    if($_GET["l"])
        $_idioma = $_GET["l"];
    else
        $_idioma = "P";

    session_start();
    $_SESSION['idioma'] = $_idioma;
}
// FIM - Define idioma padrão

session_start();
$_idioma = $_SESSION['idioma'];
include_once "idiomas.php";

?>