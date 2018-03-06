<?php

require_once("../../../bootstrap.php");

$id = filter_input( INPUT_POST , "id" , FILTER_SANITIZE_NUMBER_INT );

if (isEmpty()) {
    flash( "message" , "Preencha todos os campos" );
    return redirect( "/editar&id={$id}" );
}

$validate = validate([
    "fname" => "s",
    "lname" => "s",
    "email" => "e",
    "password" => "s"
]);

$validate->password = password_hash( $validate->password , PASSWORD_DEFAULT );

$atualizado = update( "users" , $validate , ["id", $id] );

if ($atualizado) {
    flash( "message" , "Atualizado com sucesso!" , "success" );
} else {
    flash( "message" , "Erro ao realizar a atualização" );
}

redirect( "listar" );
