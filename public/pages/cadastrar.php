<h2>Cadastro de usuário</h2>

<?=get("message")?>

<form action="/pages/forms/cadastrar.php" method="post" role="form">

    <legend>Formulário de Cadastro</legend>

    <div class="form-group">
        <label for="">Nome</label>
        <input type="text" class="form-control" name="fname" placeholder="Digite seu nome">
    </div>

    <div class="form-group">
        <label for="">Sobrenome</label>
        <input type="text" class="form-control" name="lname" placeholder="Digite seu sobrenome">
    </div>

    <div class="form-group">
        <label for="">E-mail</label>
        <input type="email" class="form-control" name="email" placeholder="exemplo@email.com">
    </div>

    <div class="form-group">
        <label for="">Senha</label>
        <input type="password" class="form-control" name="password" placeholder="Digite sua senha">
    </div>

    <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
