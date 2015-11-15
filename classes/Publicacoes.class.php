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

		if($post['id'])
		{
			$query .= " AND publicacoes.id = '".$post['id']."' ";
		}

		if($post['limitVeja'])
		{
			$sqlLimit = "LIMIT " . $post['limitVeja'];
		}

		if($post['tipo'])
		{
			$query .= " AND publicacoes.idTipo = '".$post['tipo']."' ";
		}

		if($post['anoAtual'])
		{
			$query .= " AND YEAR(data) = '".$post['anoAtual']."' ";
		}

		if($post['mesAtual'])
		{
			$query .= " AND MONTH(data) = '".$post['mesAtual']."' ";
		}

		if($post['idCat'])
		{
			$query .= " AND publicacoes.idCategoria = '".$post['idCat']."' ";
		}

		$retorno = array();
		$sql = "SELECT 
					*,
					C.id as idCategoria,
					publicacoes.id as id
				FROM
					" . $this->entidade . " 
				INNER JOIN
					categoria C
				ON	
					C.id = " . $this->entidade . ".Idcategoria
				WHERE
					1 = 1 ".$query . "
				ORDER BY
					data DESC
			".$sqlLimit." ";

			// echo "<pre>";
			// print_r($sql);
			// die();

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
				$dados[$i]['tituloAbrev'] 	= utf8_encode(limita_caracteres($rows['titulo_I'], 45, false));	
				$dados[$i]['texto'] 		= utf8_encode($rows['texto_I']);
				$dados[$i]['textoAbrev']	= utf8_encode(limita_caracteres($rows['texto_I'], 150, false));
				$dados[$i]['numPubclicacao'] 		= utf8_encode($rows['numPubclicacao_I']);
			}else{
				$dados[$i]['titulo'] 		= utf8_encode($rows['titulo']);	
				$dados[$i]['tituloAbrev'] 	= utf8_encode(limita_caracteres($rows['titulo'], 45, false));	
				$dados[$i]['texto'] 		= utf8_encode($rows['texto']);
				$dados[$i]['textoAbrev']	= utf8_encode(limita_caracteres($rows['texto'], 150, false));
				$dados[$i]['numPubclicacao'] 		= utf8_encode($rows['numPubclicacao']);
			}
			$dados[$i]['data'] 			= date("d/m/Y", strtotime($rows['data']));
			$dados[$i]['Mes']			= Mes(explode("-", ($rows['data'])));
			//$dados[$i]['MesAbreviado']	= limita_caracteres($dados[$i]['Mes'], 9, false);
			$dados[$i]['dataMes'] 		= explode("-", ($rows['data']));
			$dados[$i]['nomeCategoria'] 	= utf8_encode($rows['nomeCategoria']);
			$i++;
		}

		$retorno[0] = 0;
		$retorno[1] = $dados;
		return $retorno;
	}

}