<?php

function send( array $data ) {
    $mail = new PHPMailer\PHPMailer\PHPMailer;
    $mail->CharSet = "UTF-8";
    $mail->SMTPSecure = "plain";
    $mail->isSMTP();
    $mail->Host = "smtp.mailtrap.io";
    $mail->Port = 465;
    $mail->SMTPAuth = true;
    $mail->Username = "11ea9c47161089";
    $mail->Password = "697220fa0bfbeb";
    $mail->isHTML(true);
    $mail->setFrom('tha.motog@gmail.com');
    $mail->FromName = $data["quem"];
    $mail->addAddress($data["para"]);
    $mail->Body = $data["mensagem"];
    $mail->Subject = $data["assunto"];
    $mail->AltBody = "Para ver esse email tenha certeza de estar em um programa que aceiita HTML";
    $mail->MsgHTML($data["mensagem"]);
    return $mail->send();
}
