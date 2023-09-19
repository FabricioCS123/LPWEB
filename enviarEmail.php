<?php

$_nome = addslashes($_POST['nome']);
$_email = addslashes($_POST['email']);
$telefone = addslashes($_POST['telefone']);
$motivo = $_POST['motivo'];
$_msg = addslashes($_POST['mensagem']);

if(isset($_nome) && isset($_email) && isset($motivo) && isset($telefone) && isset($_msg) && !empty($_nome) && !empty($_email) && !empty($motivo) && !empty($telefone) && !empty($_msg)){
    $para = 'admin@reidomicroondas.com.br';
    $assunto = 'Nova mensagem de contato ('.$nome.')';
    $corpo = "Nome: ". $nome. "\r\n".
             "Email: ". $email. "\r\n".
             "Telefone: ". $telefone."\r\n".
             "Motivo: ". $motivo."\r\n".
             "Mensagem: ". $_msg;
    $cabecalho = "From: contato@reidomicroondas.com.br"."\r\n".
                 "Reply-To:".$email."\r\n".
                 "X-Mailer:PHP/".phpversion();
    if(mail($para, $assunto, $_msg, $cabecalho)){
        echo ('Email enviado com sucesso');
    }
    else{
        echo ('O email não pode ser enviado');
    }
}
else{
    echo ('Todos os campos precisam ser preenchidos antes de enviar');
}