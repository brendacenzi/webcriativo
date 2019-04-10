<?php
   $nome = $_POST['nome'];
   $telefone = $_POST['tel'];
   $email = $_POST['email'];
   $assunto = $_POST['assunto'];
   $mensagem = $_POST['mensagem'];
	global $email;	 
	$seuemail = "contato@webcriativo.com.br";
	$assunto = $assunto;
	$headers = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=utf-8\r\n";
	$headers .= "From: $seuemail \r\n";
	$conteudo = "<strong>Nome:</strong> $nome<br />";
	$conteudo .= "<strong>Email:</strong> $email<br />";
	$conteudo .= "<strong>Telefone:</strong> $telefone<br />";
	$conteudo .= "<strong>Mensagem:</strong> $mensagem<br />";
									
	$enviando = mail($seuemail, $assunto, $conteudo, $headers);
   header("Location: fale-conosco");
?>