<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP Orientado Objeto- Clonando Objetos com PHP
</title>
    </head>
    <body>
        <?php
           require './Nota.php';
           $notas = new Nota();
           $notas->setNota("Luciana", "Matemática", 5, 2);
           
           echo $notas->getNota();
           
           $notasDois = clone $notas;
           $notasDois->setProva(6);
           $notasDois->setTrabalho(4);
           $notasDois->setDisciplina("Historia");
           echo $notasDois->getNota();
        ?>
    </body>
</html>
