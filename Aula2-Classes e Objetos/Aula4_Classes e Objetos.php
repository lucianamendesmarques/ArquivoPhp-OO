<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP Orientado Objeto</title>
    </head>
    <body>
        <?php
          require './Usuario.php';
          $usuario = new Usuario();
          echo $usuario->getDadosUser("Luciana", "lucianamarques74@gmail.com");
        ?>
    </body>
</html>
