<?php

if(isset($_POST['email']) && !empty($_POST['email'])){

	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$assunto = $_POST['assunto'];
	$mensagem = $_POST['mensagem'];

	$to = "cacomp@uel.br";
	$subject = "Contato Site cacomp";
	$body = "De: ".$nome."<".$email.">"."\r\n".
			"Assunto: ".$assunto.
			
			"\r\n \r\n".$mensagem. "\r\n";
	$header = "From: joao.paulo@uel.br"."\r\n"
			  ."Replay-To: ".$email."\r\n"
			  ."X=Mailer:PHP/".phpversion();

	if(mail($to, $subject, $body, $header)){
		echo("Email enviado com sucesso!");
	}else{
		echo("Email não pode ser enviado");
	}
}

header('location:index.html#contato');