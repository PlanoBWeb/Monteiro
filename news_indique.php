<?php 

	include_once "classes/Newsletter.class.php";
	$classNewsletter = new Newsletter();

	if ($_POST['acao'] == 'newsletter') {
		$parametro['newsletter'] = $_POST['newsletter'];
		$retorno	= $classNewsletter->Grava($parametro);
		if( $retorno[0] )
		{
			$smarty->assign("mensagem", $retorno[1]);
			$smarty->assign("redir", "index.php");
			$smarty->display("mensagem.html");
			exit();
		}else{
			if (empty($_POST['newsletter'])) 
			{
			   	header("Location: index.php"); 
			} else { 
				$ip = $_SERVER['REMOTE_ADDR'];
				$data = date("d/m/y");
				$hora = date("H:i"); 

				$newsletter = $_POST['newsletter'];

				$cont = "$ip\r\n";
				$cont .= "$data\r\n";
				$cont .= "$hora\r\n\r\n";
				$cont .= "E-mail: \t$newsletter\r\n";

				$headers 	= "MIME-Version: 1.1\r\n";
				$headers 	.= "Content-type: text/plain; charset=UTF-8\n";
				$assunto 	.= "Monteiro - Newsletter";
				$conteudo 	.= "$cont\r\n";
				$headers 	.= "From: joseygor@planobweb.com.br\n"; 
				$headers 	.= "Return-Path: joseygor@planobweb.com.br\r\n"; 
				//$headers 	.= "Bcc: contato@planobweb.com.br\r\n"; // cópia
				$headers 	.= "Reply-To: $email\n";
				$envio 		= mail("joseygor@planobweb.com.br", $assunto,$conteudo,$headers);

				echo utf8_decode("<script>alert('Cadastro enviado com sucesso.');location.href ='index.php'</script>");
			}
		}
	}

	if ($_POST['acao'] == 'indique') {
		if (empty($_POST['indique'])) 
		{
		   	header("Location: index.php"); 
		} else { 
			
			$indique = $_POST['indique'];

			$cont .= 'Site: \t <a href="http://www.mmonteiroadv.com.br" target="_blank">www.mmonteiroadv.com.br</a> \r\n';

			$headers 	= "MIME-Version: 1.1\r\n";
			$headers 	.= "Content-type: text/plain; charset=UTF-8\n";
			$assunto 	.= "Acesse a Monteiro";
			$conteudo 	.= "$cont\r\n";
			$headers 	.= "From: joseygor@planobweb.com.br\n"; 
			$headers 	.= "Return-Path: joseygor@planobweb.com.br\r\n"; 
			//$headers 	.= "Bcc: contato@planobweb.com.br\r\n"; // cópia
			$headers 	.= "Reply-To: $email\n";
			$envio 		= mail($indique, $assunto,$conteudo,$headers);

			echo utf8_decode("<script>alert('Enviado com sucesso.');location.href ='index.php'</script>");
		}
	}

	if ($_POST['acao'] == 'indiqueNot') {
		if (empty($_POST['indiqueNot'])) 
		{
		   	header("Location: index.php"); 
		} else { 
			
			$indique = $_POST['indiqueNot'];

			$cont .= 'Para ler acesse: \t <a href="'.$urlCompleta.'" target="_blank">'.$urlCompleta.'</a> \r\n';

			$headers 	= "MIME-Version: 1.1\r\n";
			$headers 	.= "Content-type: text/plain; charset=UTF-8\n";
			$assunto 	.= "Leia essa pagina";
			$conteudo 	.= "$cont\r\n";
			$headers 	.= "From: joseygor@planobweb.com.br\n"; 
			$headers 	.= "Return-Path: joseygor@planobweb.com.br\r\n"; 
			//$headers 	.= "Bcc: contato@planobweb.com.br\r\n"; // cópia
			$headers 	.= "Reply-To: $email\n";
			$envio 		= mail($indique, $assunto,$conteudo,$headers);

			echo utf8_decode("<script>alert('Enviado com sucesso.');location.href ='index.php'</script>");
		}
	}
	