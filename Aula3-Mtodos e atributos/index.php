<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP Orientado Objeto- Métodos e atributos</title>
    </head>
    <body>
        <?php
        // ira incluir o arquivo Usuario.php
        
        require './Usuario.php';
        
        // ira criar a varivél objeto que ira intanciar aclasse.
        
        $usuario = new Usuario();
        echo $usuario->setUsuario("Luciana", "lucianamarques745gmail.com");
        
        echo $usuario->getUsuario();
        
        $usuario->setNota(5,2);
        echo $usuario->getNota();
        ?>
    </body>
</html>
