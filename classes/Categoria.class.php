<?php

include_once "configs/funcoes.php";
include_once "Imagem.class.php";

class Categoria
{
	function Categoria()
    {
		$this->entidade = "categoria";

		$this->pathProjeto = PATH_SERVIDOR;
		
		$classImagem = new Imagem();
		$this->classImagem = $classImagem;
    }
	

	function Pesquisar($post, $totalPorPagina, $pagina)
	{
		$query = "";

		if($post['tipo'])
		{
			$query .= " AND publicacoes.idTipo = '".$post['tipo']."' ";
		}

		$retorno = array();
		$sql = "SELECT 
					*
				FROM
					" . $this->entidade . " 
				INNER JOIN
					publicacoes
				ON	
					publicacoes.idCategoria = categoria.id
				WHERE
					1 = 1 ".$query."
				GROUP BY	
					categoria.id
				ORDER BY
					categoria.id DESC
			";
			
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
				$dados[$i]['nomeCategoria_I'] 		= utf8_encode($rows['nomeCategoria_I']);	
			}else{
				$dados[$i]['nomeCategoria'] 		= utf8_encode($rows['nomeCategoria']);	
			}
			$i++;
		}

		$retorno[0] = 0;
		$retorno[1] = $dados;
		return $retorno;
	}

}