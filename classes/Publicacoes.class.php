<?php

include_once "configs/funcoes.php";
include_once "Imagem.class.php";

class Publicacoes
{
	function Publicacoes()
    {
		$this->entidade = "publicacoes";

		$this->pathProjeto = PATH_SERVIDOR;
		
		$classImagem = new Imagem();
		$this->classImagem = $classImagem;
    }
	

	function Pesquisar($post, $totalPorPagina, $pagina)
	{
		$query = "";

		$sqlLimit = "";
		if ($totalPorPagina) {

			$numero = $pagina-1;
			$_limit = $numero*$totalPorPagina;

			$sqlLimit = "LIMIT ".$_limit.",".$totalPorPagina."";
		}

		if($post['id'])
		{
			$query .= " AND publicacoes.id = '".$post['id']."' ";
		}

		if($post['ano'])
		{
			$query .= " AND YEAR(data) = '".$post['ano']."' ";
		}

		if($post['mes'])
		{
			if (intval($post['mes'])) {
				$query .= " AND MONTH(data) = '".$post['mes']."' ";
			}else{
				$retorno = MesInverte($post['mes']);
				$query .= " AND MONTH(data) = '".$retorno."' ";
			}			
		}

		$retorno = array();
		$sql = "SELECT 
					*
				FROM
					" . $this->entidade . " 
				WHERE
					1 = 1 ".$query."
				ORDER BY
					data DESC
			".$sqlLimit." ";

		$result = mysql_query($sql);
		if (!($result))
		{
			$retorno[0] = "1";
			$retorno[1] = "Erro ao executar a query. Classe = " . $this->entidade . " - Metodo = Pesquisar";
			return $retorno;
		}
		
		$i = 0;
		while( $rows = mysql_fetch_array($result) )
		{
			$dados[$i] 					= $rows;
			if ($post['idioma'] == "I") {
				$dados[$i]['titulo'] 		= utf8_encode($rows['titulo_I']);
				$dados[$i]['texto'] 		= utf8_encode($rows['texto_I']);
				$dados[$i]['textoAbrev']	= utf8_encode(limita_caracteres($rows['texto_I'], 150, false));
			}else{
				$dados[$i]['titulo'] 		= utf8_encode($rows['titulo']);	
				$dados[$i]['texto'] 		= utf8_encode($rows['texto']);
				$dados[$i]['textoAbrev']	= utf8_encode(limita_caracteres($rows['texto'], 150, false));
			}
			$dados[$i]['data'] 			= date("d/m/Y", strtotime($rows['data']));
			$dados[$i]['Mes']			= Mes(explode("-", ($rows['data'])));
			//$dados[$i]['MesAbreviado']	= limita_caracteres($dados[$i]['Mes'], 9, false);
			$dados[$i]['dataMes'] 		= explode("-", ($rows['data']));
			$i++;
		}

		$retorno[0] = 0;
		$retorno[1] = $dados;
		return $retorno;
	}

}