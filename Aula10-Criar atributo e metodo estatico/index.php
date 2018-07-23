<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP Orientado Objeto</title>
    </head>
    <body>
        <?php
        require './Disciplina.php';
        
        $disciplina = new Disciplina("Cesar", 2, 6);
        echo $disciplina->situacao();
        
        //echo $disciplina->situacaoAluno();
        echo Disciplina::situacaoAluno();
        ?>
    </body>
</html>
