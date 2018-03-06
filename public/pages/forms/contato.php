<?php

require_once("../../../bootstrap.php");

if (isEmpty()) {
    flash( "message" , "Preencha todos os campos" );
    return redirect( "contato" );
}

$validate = validate([
    "name" => "s",
    "email" => "e",
    "subject" => "s",
    "message" => "s"
]);


$data = [
    "quem" => $validate->email,
    "para" => "tha.motog@gmail.com",
    "mensagem" => $validate->message,
    "assunto" => $validate->subject
];


if (send($data)) {
    flash( "message" , "Email enviado com sucesso!", "success" );
} else {
    flash( "message" , "Houve um erro durante o envio. Tente novamente mais tarde." );
}

return redirect( "contato" );
