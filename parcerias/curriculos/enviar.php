<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $GetPost = filter_input_array(INPUT_POST,FILTER_DEFAULT);

    $Erro = true;
    $Nome = $GetPost['name'];
    $Email = $GetPost['email'];
    $Phone = $GetPost['telefone'];
    $Curriculo = $GetPost['arquivo'];
    $Mensagem = $GetPost['message'];

    include_once 'class/class.smtp.php';
    include_once 'class/class.phpmailer.php';

    $Mailer = new PHPMailer;
    $Mailer->CharSet = 'utf-8';
    $Mailer->SMTPDebug = 3;
    $Mailer->IsSMTP();
    $Mailer->Host = "smtp.primegraf.com.br";
    $Mailer->SMTPAuth = 'true';
    $Mailer->Username = 'digital@primegraf.com.br';
    $Mailer->Password = 'Digital30678077/';
    $Mailer->AddReplyTo($Email, $Nome);
    $Mailer->SMTSecure = 'tls';
    $Mailer->Port = 587;
    $Mailer->FromName = "{$Nome}";
    $Mailer->From = 'digital@primegraf.com.br';
    $Mailer->AddAddress('digital@primegraf.com.br');
    $Mailer->IsHTML(true);
    $Mailer->Subject = "Novo e-mail de {$Email} às".date("H:i")." - ".date("d/m/Y");
    $Mailer->Body = "Mensagem enviada através do site por {$Nome} <br>E-mail: {$Email}<br> Telefone: {$Phone}<br> Mensagem: {$Mensagem}";

    if($Mailer->Send()) {
        $Erro = false;
    }
    
    var_dump($Erro);
    
    header('location:index.php?status=sucesso');
    }else{
        header('location:index.php?status=erro');
    }

?>