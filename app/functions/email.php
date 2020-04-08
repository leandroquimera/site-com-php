<?php

function send($data){

    $email = new \PHPMailer\PHPMailer\PHPMailer;
    $email->CharSet = 'UTF-8';
    $email->SMTPSecure = 'plain';
    $email->isSMTP();
    $email->Host = 'smtp.mailtrap.io';
    $email->Port = 465;
    $email->SMTPAuth = true;
    $email->Username = '994d85b53c799d';
    $email->Password = '38f2c6ed5a90f1';
    $email->isHTML(true);
    $email->setFrom($data['email']);
    $email->FromName = $data['quem'];
    $email->addAddress('Leandro contato@quimera.adm.br');
    $email->Body = $data['mensagem'];
    $email->Subject = $data['assunto'];
    $email->AltBody = 'Mensagem alternativa a mensagem que esta sendo enviada';
    $email->msgHTML($data['mensagem']);
    return $email->send();


}