<h2>Cadastro de usuário</h2>

<?=get("message")?>

<?php

$user = find( "users" , "id" , $_GET["id"] );

 ?>

<form action="/pages/forms/editar.php" method="post" role="form">

    <legend>Formulário de Cadastro</legend>

    <input type="hidden" name="id" value="<?=$user->id?>">

    <div class="form-group">
        <label for="">Nome</label>
        <input type="text" class="form-control" name="fname" placeholder="Digite seu nome" value="<?=$user->fname?>">
    </div>

    <div class="form-group">
        <label for="">Sobrenome</label>
        <input type="text" class="form-control" name="lname" placeholder="Digite seu sobrenome" value="<?=$user->lname?>">
    </div>

    <div class="form-group">
        <label for="">E-mail</label>
        <input type="email" class="form-control" name="email" placeholder="exemplo@email.com" value="<?=$user->email?>">
    </div>

    <div class="form-group">
        <label for="">Senha</label>
        <input type="text" class="form-control" name="password" placeholder="Digite a nova senha">
    </div>

    <button type="submit" class="btn btn-primary">Atualizar</button>
</form>
