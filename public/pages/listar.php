<h2>Lista de usuários cadastrados</h2>

<?=get("message")?>

<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Sobrenome</th>
            <th>Email</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
        $users = all("users");
        foreach ($users as $user):
         ?>
        <tr>
            <td><?=$user->id;?></td>
            <td><?=$user->fname;?></td>
            <td><?=$user->lname;?></td>
            <td><?=$user->email;?></td>
            <td>
                <a href="?page=editar&id=<?=$user->id;?>" class="btn btn-success">Editar</a>
            </td>
            <td>
                <a href="?page=deletar&id=<?=$user->id;?>" class="btn btn-danger">Deletar</a>
            </td>
        </tr>
        <?php endforeach;?>
    </tbody>
</table>
