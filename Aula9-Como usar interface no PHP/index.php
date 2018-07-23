<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP Orientado Objeto</title>
    </head>
    <body>
        <?php
        
        require './ICurso.php';
        require './CursoGraduacao.php';
        require './CursoPosGraduacao.php';
        
        $curso = new CursoGraduacao();
        echo $curso->disciplina("Desenvolvimento WEB");
        echo $curso->professor("luciana");
        
        $cursoPosGrad = new CursoPosGraduacao();
        echo $cursoPosGrad->disciplina("PHP OO");
        echo $cursoPosGrad->professor("Luciana");
        ?>
    </body>
</html>
