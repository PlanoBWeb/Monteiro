<?php
	
	include_once "configs/config.php";
	include_once "url.php";
	include_once "configs/idiomas.php";
	include_once "news_indique.php";

	if ($_POST['acao'] == "enviaForm") {
		if (empty($_POST['nome'])|| empty($_POST['email'])|| empty($_POST['tel']) || empty($_POST['msg'])) {
	   //Não tem mensagem vindo pelo formulário, não manda nada e redireciona para o formulario.html 
		   header("Location: index.php"); 
		} else { 

		  $ip = $_SERVER['REMOTE_ADDR'];
		  $data = date("d/m/y"); //função para pegar a data de envio do e-mail
		  $hora = date("H:i"); //para pegar a hora com a função date

		  $nome = $_POST['nome'];
		  $email = $_POST['email'];
		  $empresa = $_POST['empresa'];
		  $telefone = $_POST['tel'];
		  // $como = $_POST['como'];
		  $msg = $_POST['msg'];

		  $cont = "$ip\r\n";
		  $cont .= "$data\r\n";
		  $cont .= "$hora\r\n\r\n";
		  $cont .= "Nome: \t$nome\r\n";
		  $cont .= "E-mail: \t$email\r\n";
		  $cont .= "E-mail: \t$empresa\r\n";
		  $cont .= "Telefone: \t$tel\r\n";
		  //$cont .= "Onde nos encontrou: \t$como\r\n";
		  $cont .= "\r\nMensagem: \n";
		  $cont .= "$msg";

		  $headers 	= "MIME-Version: 1.1\r\n";
		  $headers 	.= "Content-type: text/plain; charset=UTF-8\n";
		  $assunto 	.= "Gaban Monteiro Sociedade de Advogados - Contato";
		  $conteudo 	.= "$cont\r\n";
		  //contato@gabanmonteiroadv.com.br
		  $headers 	.= "From: contato@gabanmonteiroadv.com.br\n"; // remetente-empresa
		  $headers 	.= "Return-Path: contato@gabanmonteiroadv.com.br\r\n"; // return-path - empresa
		  $headers 	.= "Bcc: contato@planobweb.com.br\r\n"; // cópia
		  $headers 	.= "Reply-To: $email\n";
		  $envio 		= mail("contato@gabanmonteiroadv.com.br", $assunto,$conteudo,$headers); //enviado

		  //echo "<script>alert('Enviado com sucesso!!');location.href ='obrigado-contato.php'</script>";
		  echo utf8_decode("<script>location.href ='obrigado-contato.php'</script>");
		}
	}

	$smarty->assign("menuAtivo", $menuAtivo);
	$smarty->assign("breadcrumb", "Fale Conosco");
	$smarty->assign("arrayIdioma", $arrayIdioma);
	$smarty->assign("PgAtiva", $PgAtiva);
	$smarty->assign("pagina", $pagina);
	$smarty->assign("titulo", utf8_encode(TITULO));
	$smarty->assign("nome", $_SESSION['nome']);
	$smarty->display("fale-conosco.html");

?>