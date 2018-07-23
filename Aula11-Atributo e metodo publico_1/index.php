<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Curso de PHP Orientado a Objetos-Atributo e método público</title>
    </head>
    <body>
        <?php
        require './Funcionario.php';
        
        $funcionario = new Funcionario();
        $funcionario->setNome("Luciana");
        $funcionario->setSalario(5200);
        echo $funcionario->verSalario();
        ?>
    </body>
</html>
