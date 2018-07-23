<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Atributo e método protegido</title>
    </head>
    <body>
        <?php
        require './FuncionarioProtected.php';
        require './Bonus.php';
        
        $funcionario = new Bonus();
        $funcionario->setNome("Luciana");
        $funcionario->setSalario(5200);
        echo $funcionario->verSalario();
        
        ?>
    </body>
</html>
