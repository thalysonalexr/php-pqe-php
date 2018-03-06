<?php

require_once("../../../bootstrap.php");

if (isEmpty()) {
    flash( "message" , "Preencha todos os campos" );
    return redirect( "cadastrar" );
}

$validate = validate([
    "fname" => "s",
    "lname" => "s",
    "email" => "e",
    "password" => "s"
]);

$validate->password = password_hash( $validate->password , PASSWORD_DEFAULT );

$cadastrado = create( "users" , $validate );

if ($cadastrado) {
    flash( "message" , "Cadastrado com sucesso!" , "success" );
} else {
    flash( "message" , "Erro ao realizar o cadastro" );
}

redirectToHome();
