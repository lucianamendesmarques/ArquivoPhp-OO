<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Celke</title>
    </head>
    <body>
        <?php
        require './FuncionarioPrivado.php';
        
        $funcionario = new FuncionarioPrivado();
        $funcionario->setNome("Luciana");
        $funcionario->setSalario(5200);
        //$funcionario->Nome = "Kelly";
        //$funcionario->Salario = 4200;
        //$funcionario->validarSalario(4200);
        echo $funcionario->verSalario();
        ?>
    </body>
</html>
