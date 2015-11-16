<?php

include_once "configs/funcoes.php";
include_once "Imagem.class.php";
class Noticias
{
	function Noticias()
    {
		$this->entidade = "noticias";

		$this->pathProjeto = PATH_SERVIDOR;
		
		$classImagem = new Imagem();
		$this->classImagem = $classImagem;
    }
	
	function Grava($post, $file, $file2)
	{

		$retorno = array();

		//Checa se existe imagem
		if ($file['name'] != "")
		{
			//Grava a Imagem
			$retornoClassImagem = $this->classImagem->gravaImagem($file, $post['extencoeValidas'], "upload/noticias/", $copy);
			if( $retornoClassImagem[0] )
			{
				$retorno[0] = "1";
				$retorno[1] = $retornoClassImagem[1];
				return $retorno;
			}
		}

		//Checa se existe imagem
		if ($file2['name'] != "")
		{
			//Grava a Imagem
			$retornoClassImagem2 = $this->classImagem->gravaImagem($file2, $post['extencoeValidas'], "upload/noticias/", $copy);
			if( $retornoClassImagem2[0] )
			{
				$retorno[0] = "1";
				$retorno[1] = $retornoClassImagem2[1];
				return $retorno;
			}
		}
	
		$sql = "
			INSERT INTO
				".$this->entidade."
			SET
				titulo				= '". utf8_decode($post['titulo']) ."',
				titulo_I			= '". utf8_decode($post['titulo_I']) ."',
				por					= '". utf8_decode($post['por']) ."',
				data				= '". $post['data'] ."',
				texto				= '". addslashes(utf8_decode($post['texto'])) ."',
				texto_I				= '". addslashes(utf8_decode($post['texto_I'])) ."',
				tag					= '". utf8_decode(str_replace("'","''", $post['tag']))."',
				tag_I				= '". utf8_decode(str_replace("'","''", $post['tag_I']))."',
				Idcategoria			= '". $post['categoria'] ."',
				destaque			= '". $post['destaque'] ."',
				caminhoImagem		= '". $retornoClassImagem[1]."',
				caminhoImagemThumb	= '". $retornoClassImagem2[1]."'
				
		";

		$result = mysql_query($sql);
		$ultimoId = mysql_insert_id();
		if (!($result))
		{
			$retorno[0] = "1";
			$retorno[1] = "Erro ao executar a query. Classe = ".$this->entidade." - Metodo = grava";
			return $retorno;
		}

		$retorno[0] = 0;
		$retorno[1] = "Registro inserido com sucesso.";
		$retorno[2] = $ultimoId;
		return $retorno;
	}
	
	function Altera($post, $file, $file2)
	{
		$retorno = array();

		//Checa se será autializado a imagem
		if ($file['name'] != "")
		{
	
			//Checa se existe a imagem
			if( file_exists($file["name"]) )
			{
				//Exclui a antiga
				if(!unlink( $this->pathProjeto.$file["name"] ))
				{
					$retorno[0] = "1";
					$retorno[1] = "Não foi possíel excluir a imagem antiga!";
					return $retorno;
				}
			}
			
			//Grava a Imagem
			$retornoClassImagem = $this->classImagem->gravaImagem($file, $post['extencoeValidas'], "upload/noticias/", $copy);
			if( $retornoClassImagem[0] )
			{
				$retorno[0] = "1";
				$retorno[1] = $retornoClassImagem[1];
				return $retorno;
			}
		}
		else
		{
			//Mantém a imagem antiga
			$retornoClassImagem[1] = $post["caminhoImagem"];
		}


		//Checa se será autializado a imagem
		if ($file2['name'] != "")
		{
			//Checa se existe a imagem
			if( file_exists($file2['name']) )
			{
				//Exclui a antiga
				if(!unlink( $this->pathProjeto.$file2['name'] ))
				{
					$retorno[0] = "1";
					$retorno[1] = "Não foi possíel excluir a imagem antiga 2!";
					return $retorno;
				}
			}
	
			
			//Grava a Imagem
			$retornoClassImagem2 = $this->classImagem->gravaImagem($file2, $post['extencoeValidas'], "upload/noticias/", $copy);
			if( $retornoClassImagem2[0] )
			{
				$retorno[0] = "1";
				$retorno[1] = $retornoClassImagem2[1];
				return $retorno;
			}
		}
		else
		{
			//Mantém a imagem antiga
			$retornoClassImagem2[1] = $post['caminhoImagemThumb'];
		}

		$sql = "
			UPDATE	
				".$this->entidade."
			SET
				titulo				= '". utf8_decode($post['titulo']) ."',
				titulo_I			= '". utf8_decode($post['titulo_I']) ."',
				por					= '". utf8_decode($post['por']) ."',
				data				= '". $post['data'] ."',
				texto				= '". addslashes(utf8_decode($post['texto'])) ."',
				texto_I				= '". addslashes(utf8_decode($post['texto_I'])) ."',
				tag					= '". utf8_decode(str_replace("'","''", $post['tag']))."',
				tag_I				= '". utf8_decode(str_replace("'","''", $post['tag_I']))."',
				Idcategoria			= '". $post['categoria'] ."',
				destaque			= '". $post['destaque'] ."',
				caminhoImagem		= '". $retornoClassImagem[1]."',
				caminhoImagemThumb	= '". $retornoClassImagem2[1]."'
			WHERE
				id 				= '".$post['id']."'
		".$query;
		$result = mysql_query($sql);
		if (!($result))
		{
			$retorno[0] = "1";
			$retorno[1] = "Erro ao executar a query. Classe = ".$this->entidade." - Metodo = Alterar";
			return $retorno;
		}
		
		$retorno[0] = 0;
		$retorno[1] = "Alteração feita com sucesso!";
		return $retorno;
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

		if($post['busca'])
		{
			if ($_SESSION['idioma'] == "P") {
			 	$query .= " AND noticias.titulo LIKE '%".$post['busca']."%' ";
			}else{
			 	$query .= " AND noticias.titulo_I LIKE '".$post['busca']."' ";
			}
			
		}

		if($post['tag'])
		{
			$query .= " AND noticias.tag like '%".utf8_decode($post['tag'])."%' ";
		}

		if($post['id'])
		{
			$query .= " AND noticias.id = '".$post['id']."' ";
		}

		if($post['idCat'])
		{
			$query .= " AND noticias.idCategoria = '".$post['idCat']."' ";
		}

		if($post['anoAtual'])
		{
			$query .= " AND YEAR(data) = '".$post['anoAtual']."' ";
		}

		if($post['mesAtual'])
		{
			$query .= " AND MONTH(data) = '".$post['mesAtual']."' ";
		}

		if($post['destaque'])
		{
			$query .= "AND noticias.destaque = '".$post['destaque']."' ";
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
					*, 
					C.id as idCategoria,
					noticias.id as id
				FROM
					" . $this->entidade . " 
				INNER JOIN
					categoria C
				ON	
					C.id = " . $this->entidade . ".Idcategoria
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
				$dados[$i]['tituloAbrev'] 	= utf8_encode(limita_caracteres($rows['titulo_I'], 45, false));	
				$dados[$i]['texto'] 		= utf8_encode($rows['texto_I']);
				$dados[$i]['textoAbrev']	= utf8_encode(limita_caracteres($rows['texto_I'], 150, false));
				$dados[$i]['tag']			= utf8_encode($rows['tag_I']);
			}else{
				$dados[$i]['titulo'] 		= utf8_encode($rows['titulo']);	
				$dados[$i]['tituloAbrev'] 	= utf8_encode(limita_caracteres($rows['titulo'], 45, false));	
				$dados[$i]['texto'] 		= utf8_encode($rows['texto']);
				$dados[$i]['textoAbrev']	= utf8_encode(limita_caracteres($rows['texto'], 150, false));
				$dados[$i]['tag']			= utf8_encode($rows['tag']);
			}
			$dados[$i]['data'] 				= date("d/m/Y", strtotime($rows['data']));
			$dados[$i]['titulo_I'] 		= utf8_encode($rows['titulo_I']);
			$dados[$i]['texto_I'] 			= utf8_encode($rows['texto_I']);
			$dados[$i]['Mes']				= Mes(explode("-", ($rows['data'])));
			$dados[$i]['nomeCategoria'] 	= utf8_encode($rows['nomeCategoria']);
			$dados[$i]['por']			 	= utf8_encode($rows['por']);
			$dados[$i]['dataMes'] 			= explode("-", ($rows['data']));
			$dados[$i]['data_formatada']	= date('Y-m-d', strtotime($rows['data']));
			$i++;
		}

		$retorno[0] = 0;
		$retorno[1] = $dados;
		return $retorno;
	}

	function PesquisarTags($post)
	{
		$query = "";

		if ($_SESSION['idioma'] == "I") {
			$query = "N.tag_I IS NOT NULL AND N.tag_I <> ''";
		}else{
			$query = "N.tag IS NOT NULL AND N.tag <> ''";
		}

		$retorno = array();
		$sql = "SELECT
					N.tag,
					N.tag_I
				FROM  
					" . $this->entidade . " N
				WHERE
					".$query."
				ORDER BY
					N.tag,N.tag_I ASC
		";

		$result = mysql_query($sql);
		if (!($result))
		{
			$retorno[0] = "1";
			$retorno[1] = "Erro ao executar a query. Classe = " . $this->entidade . " - Metodo = PesquisarTags";
			return $retorno;
		}

		$tags = array();
		$i = 0;
		while( $rows = mysql_fetch_array($result) )
		{
			//$dados[$i] 					= $rows;
			if ($_SESSION['idioma'] == "I") {
				$dados[$i]['tag'] 		= utf8_encode(nl2br(trim($rows['tag_I'])));
			}else{
				$dados[$i]['tag'] 		= utf8_encode(nl2br(trim($rows['tag'])));
			}
			

			$arTags = explode(",",$dados[$i]['tag']);

			//Varre todas as Tags da respectiva dica
			for ($j=0; $j < count($arTags) ; $j++) { 
				
				if(!in_array(trim($arTags[$j]), $tags))
					$tags[] = trim($arTags[$j]);
			}			

			$i++;
		}

		$retorno[0] = 0;
		$retorno[1] = $tags;
		return $retorno;
	}


	function PesquisarMenuLateral($post)
	{

		$query = "";

		$retorno = array();

		$sql = "SELECT 
					data
				FROM
					" . $this->entidade . " 
				WHERE
					1 = 1 ".$query."
				GROUP BY
					MONTH(data), YEAR(data)
				ORDER BY
					YEAR(data) DESC, MONTH(data) DESC
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
			$dados[$i]['data'] 			= date("d/m/Y", strtotime($rows['data']));
			$dados[$i]['Mes']			= Mes(explode("-", ($rows['data'])));
			$dados[$i]['dataMes'] 		= explode("-", ($rows['data']));
			$i++;
		}
		
		$retorno[0] = 0;
		$retorno[1] = $dados;
		return $retorno;
	}


	function Exclui_Categoria_Noticia($id)
	{
		$retorno = array();
		
		$sql = "
			DELETE FROM	
				produtocategoria
			WHERE
				idProduto = '".$id."'
		".$query;
		$result = mysql_query($sql);
		if (!($result))
		{
			$retorno[0] = "1";
			$retorno[1] = "Erro ao executar a query. Classe = ".$this->entidade." - Metodo = Exclui_categoria_produto";
			return $retorno;
		}
		
		$retorno[0] = 0;
		$retorno[1] = "Exclusão feita com sucesso!";
		return $retorno;
	}
	
	function Exclui($id)
	{
		$retorno = array();

		// Localiza imagem para exclusão do registro
		$parametro['id'] = $id;
		$dados = $this->Pesquisar($parametro, null, null);
		if( $dados[0] )
		{
			$retorno[0] = "1";
			$retorno[1] = "Não foi possível localizar a imagem para excluir!";
			return $retorno;
		}
		$imgExclusao = $dados[1][0]["caminhoImagem"];

		// Localiza imagem para exclusão do registro
		$parametro2['id'] = $id;
		$dados2 = $this->Pesquisar($parametro2, null, null);
		if( $dados2[0] )
		{
			$retorno[0] = "1";
			$retorno[1] = "Não foi possível localizar a imagem para excluir 2!";
			return $retorno;
		}
		$imgExclusao2 = $dados[1][0]["caminhoImagemThumb"];
		
		$sql = "
			DELETE FROM	
				".$this->entidade." 
			WHERE
				id = '".$id."'
		".$query;
		$result = mysql_query($sql);
		if (!($result))
		{
			$retorno[0] = "1";
			$retorno[1] = "Erro ao executar a query. Classe = ".$this->entidade." - Metodo = Exclui";
			return $retorno;
		}

		//Exclui imagem da pasta
		if($imgExclusao != "")
		{ 
			if(!unlink( $this->pathProjeto.$imgExclusao ))
			{
				$retorno[0] = "1";
				$retorno[1] = "Não foi possíel excluir a imagem do registro!";
				return $retorno;
			}
		}

		//Exclui imagem da pasta
		if($imgExclusao2 != "")
		{ 
			if(!unlink( $this->pathProjeto.$imgExclusao2 ))
			{
				$retorno[0] = "1";
				$retorno[1] = "Não foi possíel excluir manual!";
				return $retorno;
			}
		}

		$retorno[0] = 0;
		$retorno[1] = "Exclusão feita com sucesso!";
		return $retorno;
	}

}

