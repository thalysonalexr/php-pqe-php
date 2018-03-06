<?php

$id = filter_input( INPUT_GET , "id" , FILTER_SANITIZE_NUMBER_INT );

$deletado = delete( "users" , "id" , $id );

if ($deletado) {
    flash( "message" , "Registro excluido com sucesso!" , "success" );
} else {
    flash( "message" , "Erro ao deletar registro." );
}

redirect( "listar" );
