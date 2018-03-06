<?php require "../bootstrap.php";?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Curso de PHP devclass - Udemy</title>
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <?php
            try {
                require load();
            } catch (Exception $e){
                echo $e->getMessage();
            }
            ?>
        </div>
    </body>
</html>
