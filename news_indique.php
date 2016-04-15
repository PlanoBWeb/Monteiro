<?php 

	include_once "classes/Newsletter.class.php";
	include_once "configs/funcoes.php";
	$classNewsletter = new Newsletter();

	$urlCompleta = UrlAtual();

	// Assinar newsletter
	if ($_POST['acao'] == 'newsletter') {
		$parametro['newsletter'] = $_POST['email'];
		$retorno	= $classNewsletter->Grava($parametro);
		if( $retorno[0] )
		{
			$smarty->assign("mensagem", $retorno[1]);
			$smarty->assign("redir", "index.php");
			$smarty->display("mensagem.html");
			exit();
		}else{
			
			$ip = $_SERVER['REMOTE_ADDR'];
			$data = date("d/m/y");
			$hora = date("H:i"); 

			$newsletter = $_POST['email'];

			$cont = "$ip\r\n";
			$cont .= "$data\r\n";
			$cont .= "$hora\r\n\r\n";
			$cont .= "E-mail: \t$newsletter\r\n";

			$headers 	= "MIME-Version: 1.1\r\n";
			$headers 	.= "Content-type: text/plain; charset=UTF-8\n";
			$assunto 	.= "Gaban Monteiro - Newsletter";
			$conteudo 	.= "$cont\r\n";
			$headers 	.= "From: contato@gabanmonteiroadv.com.br\n"; 
			$headers 	.= "Return-Path: contato@gabanmonteiroadv.com.br\r\n"; 
			$headers 	.= "Bcc: contato@planobweb.com.br\r\n"; // cópia
			$headers 	.= "Reply-To: $email\n";
			$envio 		= mail("contato@gabanmonteiroadv.com.br", $assunto,$conteudo,$headers);

			//echo utf8_decode("<script>alert('Cadastro enviado com sucesso.');</script>");
			echo utf8_decode("<script>location.href ='obrigado-newsletter.php'</script>");
			
		}
	}


	// Indicação do site
	if ($_POST['acao'] == 'indique') {
		if (empty($_POST['email'])) 
		{
		   	header("Location: index.php"); 
		} else { 
			
			$indique = $_POST['email'];

			$cont .= 'Site: http://www.gabanmonteiroadv.com.br';

			$headers 	= "MIME-Version: 1.1\r\n";
			$headers 	.= "Content-type: text/plain; charset=UTF-8\n";
			$assunto 	.= "Acesse a Gaban Monteiro";
			$conteudo 	.= "$cont\r\n";
			$headers 	.= "From: contato@gabanmonteiroadv.com.br\n"; 
			$headers 	.= "Return-Path: contato@gabanmonteiroadv.com.br\r\n"; 
			//$headers 	.= "Bcc: contato@planobweb.com.br\r\n"; // cópia
			$headers 	.= "Reply-To: $email\n";
			$envio 		= mail($indique, $assunto,$conteudo,$headers);

			//echo utf8_decode("<script>alert('Enviado com sucesso.');</script>");
			echo utf8_decode("<script>location.href ='obrigado-indicacao.php'</script>");
		}
	}


	// Indicação da noticia
	if ($_POST['acao'] == 'indiqueNot') {
		if (empty($_POST['email'])) 
		{
		   	header("Location: index.php"); 
		} else { 
			
			$indique = $_POST['email'];
			$msg = " indicou essa página para você, para ler acesse: ";

			$cont .= $_POST['nome'] . $msg . $urlCompleta;

			$headers 	= "MIME-Version: 1.1\r\n";
			$headers 	.= "Content-type: text/plain; charset=UTF-8\n";
			$assunto 	.= "Leia essa pagina da Gaban Monteiro";
			$conteudo 	.= "$cont\r\n";
			$headers 	.= "From: contato@gabanmonteiroadv.com.br\n"; 
			$headers 	.= "Return-Path: contato@gabanmonteiroadv.com.br\r\n"; 
			//$headers 	.= "Bcc: contato@planobweb.com.br\r\n"; // cópia
			$headers 	.= "Reply-To: $email\n";
			$envio 		= mail($indique, $assunto,$conteudo,$headers);

			//echo utf8_decode("<script>alert('Enviado com sucesso.');</script>");
			echo utf8_decode("<script>location.href ='obrigado-indicacao.php'</script>");
		}
	}
	